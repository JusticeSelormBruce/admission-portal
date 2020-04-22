<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicantMigrate extends Model
{

    protected $guarded = [];
    protected $connection = "mysql2";
    protected $table = "applicant";
}
