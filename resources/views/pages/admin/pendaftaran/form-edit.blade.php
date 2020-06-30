@extends('layouts.admin.master')
@section('title','Edit Data Pasien')
@section('master','active')
@section('pasien','active')

@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-8 offset-1">
            <h1 class="m-0 text-dark">Edit Pendaftaran Pasien Rawat Jalan</h1>
        </div>
    </div>
    <hr>
    </div>
</div>

<section class="content mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-1">
                <form action="{{ route('pendaftaran.update',$pendaftaran->no_pendaftaran) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="no_pendaftaran" value="{{ $pendaftaran->no_pendaftaran }}">
                    <div class="form-group">
                        <label for="pasien">Pasien</label>
                        <select name="id_pasien" id="pasien" class="form-control">
                            @foreach($pasien as $pasiens)
                                <option value="{{ $pasiens->id }}" {{ old('id_pasien') ?? $pendaftaran->id_pasien === $pasiens->id ? 'selected' : '' }}>{{ $pasiens->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dokter">Dokter</label>
                        <select name="id_dokter" id="dokter" class="form-control">
                            @foreach($dokter as $dokters)
                                <option value="{{ $dokters->id }}" {{ old('id_dokter') ?? $pendaftaran->id_dokter === $dokters->id ? 'selected' : '' }}>{{ $dokters->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="poli">Poli</label>
                        <select name="id_poli" id="poli" class="form-control">
                            @foreach($poli as $polis)
                                <option value="{{ $polis->id }}" {{ old('id_poli') ?? $pendaftaran->id_poli === $polis->id ? 'selected' : '' }}>{{ $polis->poli }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection