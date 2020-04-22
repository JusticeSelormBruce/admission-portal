<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\ApplicantMigrate;
use App\ApplicantProgrammes;
use App\Attachment;
use App\AttachmentMigrate;
use App\Education;
use App\EducationMigrate;
use App\FamilyGaurdian;
use App\FamilyMigrate;
use App\OtherResult;
use App\OtherResultsMigrate;
use App\ProgrammesMigrate;
use App\Submited;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MigrateController extends Controller
{
    public function migrateData()
    {
        $status = Submited::where('applicant_id', Auth::user()->app_id)->first();
        if ($status == null) {
            $user = Auth::user()->app_id;
            $this->ApplicantDetails($user);
            $this->GuardianDetails($user);
            $this->Programmes($user);
            $this->EducationDetails($user);
            $this->Results($user);
            $this->Attachments($user);
            $this->SetApplicationStatusToOne($user);
        } else {
            return redirect('my-dashboard');
        }

    }

    public function ApplicantDetails($id)
    {
        $applicantData = Applicant::where('application_id', $id)->get()->toArray();
        ApplicantMigrate::create($applicantData[0]);
    }

    public function GuardianDetails($id)
    {
        $data = FamilyGaurdian::where('applicant_id', $id)->get()->toArray();
        FamilyMigrate::create($data[0]);
    }

    public function Programmes($id)
    {
        $data = ApplicantProgrammes::where('applicant_id', $id)->get()->toArray();
        ProgrammesMigrate::create($data[0]);
    }

    public function EducationDetails($id)
    {
        $data = Education::where('applicant_id', $id)->get()->toArray();
        for ($x = 0; $x <= ((sizeof($data)) - 1); $x++) {
            EducationMigrate::create($data[$x]);
        }
    }

    public function Results($id)
    {
        $data = OtherResult::where('applicant_id', $id)->get()->toArray();
        for ($x = 0; $x <= ((sizeof($data)) - 1); $x++) {
            OtherResultsMigrate::create($data[$x]);
        }
    }

    public function Attachments($id)
    {
        $data = Attachment::where('applicant_id', $id)->get()->toArray();
        for ($x = 0; $x <= ((sizeof($data)) - 1); $x++) {
            AttachmentMigrate::create($data[$x]);
        }
    }

    public function SetApplicationStatusToOne($id)
    {
        $data = array('applicant_id' => $id, 'status' => 1);
        Submited::create($data);
        return redirect('my-dashboard');
    }

}
