<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;


class PendaftaranUserController extends Controller
{
    public function index(Request $request){
        if($request){ 
            $pendaftaran = Pendaftaran::whereHas('pasien',function($pasien) use ($request){
                $pasien->where('nama','like','%'.$request->search.'%');
            })->orWhereHas('dokter',function($dokter) use ($request){
                $dokter->where('nama','like',"%{$request->search}%");
            })->paginate(2);
        }else{
            $pendaftaran = Pendaftaran::all();  
        }
        return view('pages.user.pendaftaran.home',compact('pendaftaran'));
    }
}
