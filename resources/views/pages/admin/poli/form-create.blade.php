@extends('layouts.admin.master')
@section('title','Tambah Data Poli')
@section('master','active')
@section('poli','active')


@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Poli</h1>
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
                <form action="{{ route('poli.store') }}" method="POST">
                    @csrf    
                    <div class="form-group">
                        <label for="poli">Poli</label>
                        <input type="text" name="poli" id="poli" class="form-control @error('poli')is-invalid @enderror" value="{{ old('poli') }}">
                        @error('poli')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>  
                    <a href="{{ route('poli.index') }}" class="btn btn-danger mt-3">Cancel</a>
                    <button type="submit" class="btn btn-primary mt-3 float-right">Submit</button>
                </form>    
            </div>
        </div>
    </div>
</section>
@endsection