@extends('layouts.admin.master')
@section('title','Tambah Data Poli')
@section('poli','active')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Poli</h1>
        </div>
    </div>
    <hr>
    </div>
</div>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('poli.update',$poli->id) }}" method="POST">
                    @csrf    
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $poli->id }}" id="">
                    <div class="form-group">
                        <label for="poli">Poli</label>
                        <input type="text" name="poli" id="poli" class="form-control @error('poli')is-invalid @enderror" value="{{ old('poli') ?? $poli->poli }}">
                        @error('poli')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>    
            </div>
        </div>
    </div>
</section>
@endsection