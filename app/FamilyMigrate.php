<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMigrate extends Model
{
    protected $guarded =[];
    protected $connection = "mysql2";
    protected $table = "family_guadian";
}
