<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'no_pendaftaran';

    public function pasien(){
        return $this->belongsTo(Pasien::class,'id_pasien','id');
    }
    public function dokter(){
        return $this->belongsTo(Dokter::class,'id_dokter','id');
    }
    public function poli(){
        return $this->belongsTo(Poli::class,'id_poli','id');
    }
}
