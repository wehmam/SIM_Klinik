@extends('layouts.admin.master')
@section('title','Tambah Data Dokter')
@section('dokter','active')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Dokter</h1>
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
                <form action="{{ route('dokter.store') }}" method="POST">
                    @csrf    
                    <div class="form-group">
                        <label for="dokter">Nama</label>
                        <input type="text" name="nama" id="dokter" class="form-control @error('nama')is-invalid @enderror" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="spesialis">Spesialis</label>
                        <input type="text" name="spesialis" id="spesialis" class="form-control @error('spesialis')is-invalid @enderror" value="{{ old('spesialis') }}">
                        @error('spesialis')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>    
            </div>
            {{-- <h1>halaman dokter</h1> --}}
             
        </div>
    </div>
</section>
@endsection