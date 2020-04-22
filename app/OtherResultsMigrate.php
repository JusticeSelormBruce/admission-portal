<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherResultsMigrate extends Model
{
    protected $guarded =[];
    protected $connection = "mysql2";
    protected $table = "other_result";
}
