<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = ['nik','nama','jenis_kelamin','tanggal_lahir','no_hp','alamat'];
}
