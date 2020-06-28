<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = ['nama','spesialis'];
    
    public function pendaftaran(){
        return $this->hasMany(Pendaftaran::class,'id_dokter','id');
    }
}
