<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
public $timestamp=false;
protected $fillable= ['name','email'];
}
