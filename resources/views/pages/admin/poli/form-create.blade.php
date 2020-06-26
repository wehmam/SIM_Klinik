@extends('layouts.admin.master')
@section('title','Pemeriksaan Pasien Rawat Jalan')
@section('poli','active')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Poli Pemeriksaan</h1>
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
               <form action="{{ route('poli.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="pasien">pasien</label>
                        <select name="id_pasien" id="pasien" class="form-control @error('id_pasien') is-invalid @enderror">
                            @foreach($pasien as $pasiens)
                                <option value="{{ $pasiens->id }}">{{ $pasiens->nama }}</option>            
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tindakan">Tindakan</label>
                        
                        <select class="js-example-basic-multiple form-control" name="id_tindakan[]" multiple="multiple">
                            {{-- <option value=""></option> --}}
                            @foreach($tindakan as $tindakans)
                                <option value="{{ $tindakans->id }}" class="text-dark">{{ $tindakans->tindakan . " "}} {{ $tindakans->harga }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="catatan">Catatan</label>
                        <textarea name="catatan" id="catatan" cols="30" class="form-control @error('catatan') is-invalid @enderror" rows="5">{{ old('catatan') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
        </div>
    </div>
</section>

@endsection