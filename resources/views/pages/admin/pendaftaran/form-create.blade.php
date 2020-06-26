@extends('layouts.admin.master')
@section('title','Tambah Data Pasien')
@section('pendaftar','active')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pendaftaran Pasien</h1>
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
            <div class="col-md-6 offset-1">
                <form action="{{ route('pendaftaran.store') }}" method="POST">
                    @csrf
                        <div class="form-row">
                            <label for="pasien">Nama Pasien</label>
                            <select name="id_pasien" id="pasien" class="form-control">
                                @foreach ($pasien as $pasiens)
                                    <option value="{{ $pasiens->id }}">{{ $pasiens->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row">
                            <label for="dokter">Dokter</label>
                            <select name="id_dokter" id="dokter" class="form-control">
                                @foreach ($dokter as $dokters)
                                    <option value="{{ $dokters->id }}">{{ $dokters->dokter }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection