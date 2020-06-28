@extends('layouts.admin.master')
@section('title','Edit Data Pasien')
@section('master','active')
@section('pasien','active')


@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-8 offset-1">
            <h1 class="m-0 text-dark">Edit Data Pasien</h1>
        </div>
    </div>
    <hr>
    </div>
</div>

<section class="content mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-1">
                <form action="{{ route('pasien.update',$pasien->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <input type="hidden" name="id" value="{{ $pasien->id }}">
                        
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" name="nik" id="nik" class="form-control @error('nik')is-invalid @enderror" value="{{ old('nik') ?? $pasien->nik }}">
                            @error('nik')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') ?? $pasien->nama }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                <option value="0" {{ old('jenis_kelamin') ?? $pasien->jenis_kelamin ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="1" {{ old('jenis_kelamin') ?? $pasien->jenis_kelamin ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') ?? $pasien->tanggal_lahir }}">
                            @error('tanggal_lahir')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    
                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') ?? $pasien->no_hp }}">
                            @error('no_hp')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
    
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control">{{ old('alamat') ?? $pasien->alamat }}</textarea>
                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <a href="{{ route('pasien.index') }}" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection