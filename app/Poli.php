<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poli extends Model
{
    protected $fillable = ['poli'];


    public function pendaftaran(){
        return $this->hasMany(Pendaftaran::class,'id_poli','id');
    }
}
