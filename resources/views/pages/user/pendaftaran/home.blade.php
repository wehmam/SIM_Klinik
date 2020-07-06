@extends('layouts.user.master')
@section('title','Pendaftaran')
@section('content')

<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h1><b>Daftar Pasien Terdaftar</b></h1>
                    </div>
                    <div class="col-md-12">
                        <img src="{{ asset('user/home/wallpaper.jpg') }}" width="500" height="480" alt="kosong">
                    </div>
                </div>
            </div>
            <div class="col-md-6">  
                <div class="row">
                    <div class="col-md-12 mb-4 mx-3">
                        <form class="form-inline my-2 my-lg-0" action="{{ action('PendaftaranUserController@index') }}">
                            <div class="row">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            <div class="row">
                @foreach($pendaftaran as $pendaftarans)
                <div class="col-md-6">
                        <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header text-center">Pendaftaran Klinik ABC</div>
                            <div class="card-body text-dark">
                                <h5 class="card-title text-center">No Antrian</h5>
                                <p class="card-text text-center">{{ $pendaftarans->no_pendaftaran }}</p>
                                <p class="card-text text-center text-primary">{{ $pendaftarans->pasien->nama }}</p>
                            
                                <p class="card-text text-center small"><b>{{  $pendaftarans->dokter->nama  }}</b></p>  
                                <p class="card-text text-center mt-3 small"><b>{{ $pendaftarans->poli->poli }}</b></p>
                            </div>  
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $pendaftaran->links() }}
            </div>
        </div>
    </div>
</div>

@endsection