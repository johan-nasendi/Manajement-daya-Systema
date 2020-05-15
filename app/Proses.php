<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proses extends Model
{
    protected $table = 'list';
    protected $fillable = ['nama','ttl','jenis_kelamin','agama','alamat','asal','jabatan','phone','status','bio','photo','email','password'];
}
