<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Pasien;

class PrintToPDFController extends Controller
{
    public function PasienToPDF(){
        $pasien = Pasien::all();
        $pdf = PDF::loadview('PDF.pasien.pasien',['pasien' => $pasien])->setPaper('a4','landscape');
        // dd($pdf);
        return $pdf->stream();
    }
}
