<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\ApplicantProgrammes;
use App\Attachment;
use App\Education;
use App\FamilyGaurdian;
use App\OtherResult;
use App\Sold;
use App\Submited;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ApplicantController extends Controller
{

    public function InitialLogin()
    {

        $Solds = Sold::all();
        $value= Submited::where('applicant_id', Auth::user()->app_id)->first();

        if (!$value == null) {
                    return      redirect('my-dashboard');
        } else {
            foreach ($Solds as $sold) {
                if (Hash::check($sold->pin, Auth::user()->password)) {
                    if (Auth::user()->status == 0) {
                        $formDetails = DB::table('forms')->where('id', 1)->first();
                        return view('applicant.initial_login', compact('formDetails'));
                    } else {
                        return redirect('Applicant-Dashboard');
                    }
                }
            }
        }

    }

    public function ChangeLoginStatusToOne(Request $request)
    {
        if (Auth::user()->status == 0) {
            DB::table('users')->where('app_id', Auth::user()->app_id)->update(['status' => 1]);
            return redirect('Applicant-Dashboard');
        } else {
            return redirect('Applicant-Dashboard');
        }


    }

    public function bioIndex()
    {
        $applicant = DB::table('applicants')->where('application_id', Auth::user()->app_id)->first();
        return view('applicant.bioindex', compact('applicant'));
    }

    public function saveApplicantBio(Request $request)
    {
        $user = Auth::user();
        $data = $this->validateApplicantDetails() + array('suffix' => 'null', 'application_id' => $user->app_id);
        $applicant = Applicant::create($data);
        $this->storeAvatar($applicant);
        return redirect('Family-Gaurdian');


    }

    public function GaurdianIndex()
    {
        $applicant = DB::table('family_gaurdians')->where('applicant_id', Auth::user()->app_id)->first();
        return view('applicant.family_gaurdian', compact('applicant'));
    }

    public function SaveGaurdianDetails(Request $request)
    {
        $user = Auth::user();
        $data = $this->validateGuardianDetails() + ['applicant_id' => $user->app_id];
        FamilyGaurdian::create($data);
        return redirect('education');
    }

    public function AddEducation()
    {
        $educations = DB::table('education')->where('applicant_id', Auth::user()->app_id)->get();
        $result = DB::table('education')->where('applicant_id', Auth::user()->app_id)->count();
        return view('applicant.education.add_education', compact('educations', 'result'));
    }

    public function SaveEducationDetails(Request $request)
    {
        $data = $request->all();
        Education::create($data + ['applicant_id' => Auth::user()->app_id]);
        return back();
    }

    public function gotoOtherResults()
    {
        return redirect('other-results');
    }

    public function deleteASchool(Request $request)
    {
        DB::table('education')->where('id', $request->id)->delete();
        return back();
    }


    public function AddProgrammes()
    {
        $form = Sold::where('serial', Auth::user()->email)->get('form_id')->first();
        $programmes = DB::table('programmes')->where('category', $form->form_id)->get()->all();
        $program = DB::table('applicant_programmes')->where('applicant_id', Auth::user()->app_id)->first();
        $result = DB::table('applicant_programmes')->where('applicant_id', Auth::user()->app_id)->count();
        return view('applicant.programmes.add_programme', compact('result', 'programmes', 'program'));
    }

    public function SaveProgrammes(Request $request)
    {
        $data = $request->all() + ['applicant_id' => auth::user()->app_id];
        ApplicantProgrammes::create($data);
        return back();
    }

    public function UpdateProgrammesDetails(Request $request)
    {
        DB::table('applicant_programmes')->where('applicant_id', Auth::user()->app_id)
            ->update(['first_choice' => $request->first_choice, 'second_choice' => $request->second_choice]);
        return back();
    }

    public function OtherResults()
    {
        $examsType = DB::table('exams_types')->get()->all();
        $subject = Session::get('subjects');
        $otherResults = DB::table('other_results')->where('applicant_id', Auth::user()->app_id)->get();
        return view('applicant.other_results.add_result', compact('examsType', 'subject', 'otherResults'));
    }

    public function getExamsTypes(Request $request)
    {
        Session::put('exam_type', $request->examstype);
        $subjects = DB::table('exams_subjects')->where('exam_type', $request->examstype)->get()->all();
        Session::put('subjects', $subjects);
        return redirect('other-results');
    }

    public function saveOtherResultDetails(Request $request)
    {
        $month_year = $request->month . '/' . $request->year;
        $exams_type = Session::get('exam_type');
        $data = $this->validateOtherResultsDetails() + ['applicant_id' => Auth::user()->app_id, 'monthyear' => $month_year, 'exam_type' => $exams_type];
        OtherResult::create($data);
        return back();
    }

    public function deleteResult(Request $request)
    {
        $id = $request->id;
        DB::table('other_results')->where('id', $id)->delete();
        return back();
    }

    public function Attachments()
    {
        $files = DB::table('attachments')->where('applicant_id', Auth::user()->app_id)->get()->all();
        return view('applicant.attachments.index', compact('files'));
    }

    public function saveAttachments(Request $request)
    {

        $data = $this->validateAttachment() + ['applicant_id' => Auth::user()->app_id];
        $value = Attachment::create($data);
        $this->storeImage($value);
        return back();
    }

    public function deleteAttachment(Request $request)
    {
        $id = $request->id;
        DB::table('attachments')->where('id', $id)->delete();
        return back();
    }

    public function PreviewDocument()
    {
        $applicant = Applicant::where('application_id', Auth::user()->app_id)->first();
        $educations = Education::where('applicant_id', Auth::user()->app_id)->get()->all();
        $family = FamilyGaurdian::where('applicant_id', Auth::user()->app_id)->first();
        $otherresults = OtherResult::where('applicant_id', Auth::user()->app_id)->get()->all();
        $attachments = Attachment::where('applicant_id', Auth::user()->app_id)->get()->all();
        $programmes = ApplicantProgrammes::where('applicant_id', Auth::user()->app_id)->first();
        $applicantcount = Applicant::where('application_id', Auth::user()->app_id)->count();
        return view('applicant.submit.preview', compact('applicant', 'educations', 'family', 'otherresults', 'attachments', 'programmes', 'applicantcount'));
    }

    public function updateGuardianDetails()
    {
        $data = $this->validateGuardianDetails();
        DB::table('family_gaurdians')->where('applicant_id', Auth::user()->app_id)->update($data);
        return redirect('preview');
    }


    public function SubmitApplication()
    {
        return view("confirm_form_submission");
    }

    public function validateApplicantDetails()
    {
        return tap(
            request()->validate(
                [
                    "title" => "",
                    "lname" => "",
                    "fname" => "",
                    "mname" => "",
                    "sex" => "",
                    "dob" => "",
                    "email" => "",
                    "homephone" => "",
                    "cellphone" => "",
                    "fax" => "",
                    "homeadd" => "",
                    "post_address" => "",
                    "region" => "",
                    "city" => "",
                    "ssnit" => "",
                    "place_of_birth" => "",
                    "hometown" => "",
                    "disability" => "",
                    "religion" => "",
                    "denomination" => "",
                    "marital_status" => "",
                    "no_children" => "",
                    "country" => "",
                    "nationality" => "",
                    "langSpoken" => ""
                ]
            ),
            function () {
                if (request()->hasFile('image')) {
                    request()->validate(
                        [
                            'image' => 'file|image|max:10000'
                        ]
                    );
                }
            }
        );


    }

    public function validateGuardianDetails()
    {
        return request()->validate([
            "fullname" => "",
            "relationship" => "",
            "homeadd" => "",
            "post_box" => "",
            "city" => "",
            "zipcode" => "",
            "region" => "",
            "country" => "",
            "phone1" => "",
            "phone2" => "",
            "company" => " ",
            "occupation" => ""
        ]);
    }

    public function validateOtherResultsDetails()
    {
        return request()->validate([
            "examindex" => "required",
            "subject" => "required",
            "qualification" => "required"
        ]);
    }

    public function validateAttachment()
    {

        return tap(
            request()->validate(
                [
                    "file_name" => "required",
                    "file" => 'mimes:pdf'
                ]
            ),
            function () {
                if (request()->hasFile('file')) {
                    request()->validate(
                        [
                            'file' => 'file|required|max:10000'
                        ]
                    );
                }
            }
        );
    }

    public function storeImage($file)
    {

        if (request()->has('file')) {
            $file->update(
                [
                    'file' => request()->file->store('attachments', 'public')
                ]

            );
        }
    }

    public function storeAvatar($file)
    {

        if (request()->has('image')) {
            $file->update(
                [
                    'image' => request()->image->store('profile', 'public')
                ]

            );
        }
    }
}
