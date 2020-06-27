<?php

namespace App\Http\Controllers;

use App\poli;
use App\Http\Requests\PoliRequest;
use Alert;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.poli.index',['poli'=> Poli::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.poli.form-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PoliRequest $request)
    {
        Poli::create($request->all());
        Alert::toast("Data Poli $request->poli Berhasil Disimpan","success");
        return redirect()->route('poli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\poli  $poli
     * @return \Illuminate\Http\Response
     */
    public function show(poli $poli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\poli  $poli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poli = Poli::find($id);
        return view('pages.admin.poli.form-edit',compact('poli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\poli  $poli
     * @return \Illuminate\Http\Response
     */
    public function update(PoliRequest $request)
    {
        Poli::find($request->id)->update($request->all());
        Alert::toast("Data Poli $request->poli Berhasil Diedit!","success");
        return redirect()->route('poli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\poli  $poli
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Poli::destroy($id);
        Alert::toast("Data Berhasil Dihapus","error");
        return redirect()->route('poli.index');
    }
}
