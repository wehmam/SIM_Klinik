<?php

namespace App\Http\Controllers;

use App\Dokter;
use App\Http\Requests\DokterRequest;
use Illuminate\Http\Request;
use Alert;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.dokter.index',['dokter'=>Dokter::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dokter.form-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DokterRequest $request)
    {
        Dokter::create($request->all());
        Alert::toast("Data Dokter $request->dokter Berhasil Disimpan!","success");
        return redirect()->route('dokter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.admin.dokter.form-edit',['dokter'=>Dokter::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(DokterRequest $request)
    {
        Dokter::find($request->id)->update($request->all());
        Alert::toast("Data Dokter $request->nama Berhasil Diubah!","success");
        return redirect()->route('dokter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dokter::destroy($id);
        Alert::toast("Data Berhasil Dihapus!","error");
        return redirect()->route('dokter.index');
    }
}
