<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    protected $guarded = [];

    public function pasien(){
        return $this->belongsToMany(Pasien::class,'polis','id_tindakan','id_pasien');
    }
}
