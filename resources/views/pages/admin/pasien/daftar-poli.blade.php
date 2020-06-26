@extends('layouts.admin.master')
@section('title','Tambah Data Pasien')
@section('pendaftar','active')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pendaftaran Pasien ke poli</h1>
        </div>
        <div class="col-sm-6">
            {{-- <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"> Add Data</i></a> --}}
        </div>
    </div>
    <hr>
    </div>
</div>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <form action="{{ route('pendaftaran.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_pasien" value="{{ $pendaftaran->pasien->no_rm }}">
                    <div class="form-row">
                        <div class="col">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') ?? $pendaftaran->pasien->nik }}" disabled>
                            @error('nik')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') ?? $pendaftaran->pasien->nama }}" disabled>
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="no_hp">No Handphone</label>
                            <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') ?? $pendaftaran->pasien->no_hp }}" disabled>
                            @error('no_hp')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="id_dokter">Dokter</label>
                            <select name="id_dokter" id="id_dokter" class="form-control">
                                @foreach($dokter as $dokters)
                                    <option value="{{ $dokters->id }}">{{ $dokters->spesialis . " - " . $dokters->dokter }} </option>
                                @endforeach
                            </select>
                            @error('id_dokter')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" disabled>{{ old('alamat') ?? $pendaftaran->pasien->alamat }}</textarea>
                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection