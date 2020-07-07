<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Pasien;
use App\Pendaftaran;

class PrintToPDFController extends Controller
{
    public function PasienToPDF(){
        $pasien = Pasien::all();
        $pdf = PDF::loadview('PDF.pasien.pasien',['pasien' => $pasien])->setPaper('a4','landscape');
        return $pdf->stream();
    }
    public function noDaftarPDF($id){
        $pendaftaran = Pendaftaran::find($id);
        $pdf = PDF::loadview('PDF.pasien.no_daftar',['pendaftaran' => $pendaftaran])->setPaper('a5');
        return $pdf->stream();
    }
}
