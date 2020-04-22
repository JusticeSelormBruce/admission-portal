<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationMigrate extends Model
{
    protected $guarded =[];
    protected $connection = "mysql2";
    protected $table = "educations";
}
