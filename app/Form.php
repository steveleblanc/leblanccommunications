<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Form extends Model
{
  public $table = "forms";

    public $fillable = [
    	'name',
    	'email',
    	'phone',
    	'text'
    	];
}
