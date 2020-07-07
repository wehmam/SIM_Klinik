@extends('layouts.admin.master')
@section('title','Tambah Data Pasien')
{{-- @section('','active') --}}
@section('pendaftaran','active')

@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-8 offset-1">
            <h1 class="m-0 text-dark">Pendaftaran Pasien Rawat Jalan</h1>
        </div>
    </div>
    <hr>
    </div>
</div>

<section class="content mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-1">
                <form action="{{ route('pendaftaran.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="pasien">Pasien</label>
                        <select name="id_pasien" id="pasien" class="js-example-basic-single form-control @error('id_pasien') is-invalid @enderror">
                            <option value="">-- Pilih Pasien --</option>
                            @foreach($pasien as $pasiens)
                                <option value="{{ $pasiens->id }}">{{ $pasiens->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_pasien')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dokter">Dokter</label>
                        <select name="id_dokter" id="dokter" class="js-example-basic-single form-control @error('id_dokter') is-invalid @enderror">
                            <option value="">-- Pilih Dokter --</option>
                            @foreach($dokter as $dokters)
                                <option value="{{ $dokters->id }}">{{ $dokters->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_dokter')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="poli">Poli</label>
                        <select name="id_poli" id="poli" class="js-example-basic-single form-control @error('id_poli') is-invalid @enderror">
                            <option value="">-- Pilih Poli --</option>
                            @foreach($poli as $polis)
                                <option value="{{ $polis->id }}">{{ $polis->poli }}</option>
                            @endforeach
                        </select>
                        @error('id_poli')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection