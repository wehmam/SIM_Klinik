<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $guarded = [];
    
    public function tindakan(){
        return $this->belongsToMany(Tindakan::class,'polis','id_pasien','id_tindakan');
    }
}
