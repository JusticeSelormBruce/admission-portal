<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\ApplicantProgrammes;
use App\Attachment;
use App\Education;
use App\FamilyGaurdian;
use App\OtherResult;
use Illuminate\Support\Facades\Auth;


class MyDetails extends Controller
{
    public function index()
    {
        $applicant = Applicant::where('application_id', Auth::user()->app_id)->first();
        $educations = Education::where('applicant_id', Auth::user()->app_id)->get()->all();
        $family = FamilyGaurdian::where('applicant_id', Auth::user()->app_id)->first();
        $otherresults = OtherResult::where('applicant_id', Auth::user()->app_id)->get()->all();
        $attachments = Attachment::where('applicant_id', Auth::user()->app_id)->get()->all();
        $programmes = ApplicantProgrammes::where('applicant_id', Auth::user()->app_id)->first();
        $applicantcount = Applicant::where('application_id', Auth::user()->app_id)->count();
        return view('my_details', compact('applicant', 'educations', 'family', 'otherresults', 'attachments', 'programmes', 'applicantcount'));
    }
}
