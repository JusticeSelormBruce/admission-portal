<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammesMigrate extends Model
{
    protected $guarded =[];
    protected $connection = "mysql2";
    protected $table = "programme";

}
