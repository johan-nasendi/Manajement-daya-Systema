<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table ='post';
    protected $fillable = ['nama','email','foto','status'];
}
