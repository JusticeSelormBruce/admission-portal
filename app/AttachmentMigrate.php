<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttachmentMigrate extends Model
{
    protected $guarded =[];
    protected $connection = "mysql2";
    protected $table = "attachment";

}
