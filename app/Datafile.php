<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datafile extends Model
{
    protected $table ='datafile';
    protected $filelable =['nama_file','file','ket'];
}
