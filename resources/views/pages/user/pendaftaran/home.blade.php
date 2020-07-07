@extends('layouts.user.master')
@section('title','Pendaftaran')
@section('content')

<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-3"><b>Daftar Pasien Klinik AZ</b></h1>
                    </div>
                    <div class="col-md-12">
                        <img src="{{ asset('user/home/wallpaper.jpg') }}" width="500" height="480" alt="kosong">
                    </div>
                </div>
            </div>

            @if($pendaftaran->count() == 0)
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6 class="mt-5 text-center text-secondary">Belum ada pendaftar</h6>
                    </div>
                </div>
            @else
            <div class="col-md-6">  
                <div class="row">
                    <div class="col-md-12 mb-4 mx-3">
                        <form class="form-inline float-right" action="{{ action('PendaftaranUserController@index') }}">
                            <div class="row">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    @foreach($pendaftaran as $pendaftarans)
                    <div class="col-md-6 mt-5">
                            <div class="card border-primary mb-3" style="max-width: 18rem;">
                                <div class="card-header text-center">Pendaftaran Klinik AZ</div>
                                <div class="card-body text-dark">
                                    <h5 class="card-title text-center">No Antrian</h5>
                                    <p class="card-text text-center">{{ $pendaftarans->no_pendaftaran }}</p>
                                    <p class="card-text text-center text-info">{{ $pendaftarans->pasien->nama }}</p>
                                    <p class="card-text text-center small"><b>{{  $pendaftarans->dokter->nama  }}</b></p>  
                                    <p class="card-text text-center mt-3 small"><b>{{ $pendaftarans->poli->poli }}</b></p>
                                </div>  
                                <a href="{{ route('noPasien-PDF',$pendaftarans->no_pendaftaran) }}" class="mx-auto mb-2 btn btn-primary">Cetak No</a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{ $pendaftaran->links() }}
                </div>
            @endif
        </div>
    </div>
</div>

@endsection