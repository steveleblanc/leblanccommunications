<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UploadedFile extends Model
{
    protected $table = "files";

    public $fillable = [
    	'filename',
    	'user_id'
    	];

}
