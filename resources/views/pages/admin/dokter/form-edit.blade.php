@extends('layouts.admin.master')
@section('title','Edit Data Dokter')
@section('master','active')
@section('dokter','active')


@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Dokter</h1>
        </div>
        <div class="col-sm-6">
            {{-- <a href="{{ route('dokter.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"> Add Data</i></a> --}}
        </div>
    </div>
    <hr>
    </div>
</div>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('dokter.update',$dokter->id) }}" method="POST">
                    @csrf    
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $dokter->id }}">
                    <div class="form-group">
                        <label for="nama">Nama Dokter</label>
                        <input type="text" name="nama" id="dokter" class="form-control @error('nama')is-invalid @enderror" value="{{ old('nama') ?? $dokter->nama }}">
                        @error('dokter')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="spesialis">Spesialis</label>
                        <input type="text" name="spesialis" id="spesialis" class="form-control @error('spesialis')is-invalid @enderror" value="{{ old('spesialis') ?? $dokter->spesialis }}">
                        @error('spesialis')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <a href="{{ route('dokter.index') }}" class="btn btn-danger mt-3">Cancel</a>
                    <button type="submit" class="btn btn-primary mt-3 float-right">Submit</button>
                </form>    
            </div>
            {{-- <h1>halaman dokter</h1> --}}
             
        </div>
    </div>
</section>
@endsection