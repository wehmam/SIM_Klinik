<?php

namespace App\Http\Controllers;

use App\Pasien;
use App\Http\Requests\PasienRequest;
use Illuminate\Http\Request;
use Alert;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.pasien.index',['pasien'=> Pasien::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pasien.form-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasienRequest $request)
    {
        Pasien::create($request->all());
        Alert::toast("Pendaftaran Pasien $request->nama Berhasil!","success");
        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        // dd($pasien);
        return view('pages.admin.pasien.form-edit',compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(PasienRequest $request)
    {
        Pasien::find($request->id)->update($request->all());
        Alert::toast("Pasien $request->nama Berhasil Di ubah!","success");
        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasien::destroy($id);
        Alert::toast('Data Berhasil Dihapus!','error');
        return redirect()->route('pasien.index');
    }
}
