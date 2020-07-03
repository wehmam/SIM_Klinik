<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use App\Pasien;
use App\Dokter;
use App\Poli;
use Alert;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.pendaftaran.index',['pendaftaran'=> Pendaftaran::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $poli = Poli::all();
        // dd($poli);
        return view('pages.admin.pendaftaran.form-create',compact('pasien','dokter','poli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Pendaftaran::create($request->all());
        Alert::toast("Pendaftaran Berhasil","success");
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        // dd($pendaftaran);
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $poli = Poli::all();
        return view('pages.admin.pendaftaran.form-edit',compact('pendaftaran','pasien','dokter','poli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Pendaftaran::find($request->no_pendaftaran)->update($request->all());    
        Alert::toast("Data Berhasil diubah!","success");
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pendaftaran::destroy($id);
        Alert::toast("Data Pasien Berhasil Dihapus!","success");
        return redirect()->route('pendaftaran.index');
    }
}
