@extends('layouts.user.master')
@section('title','Pendaftaran')
@section('content')
   
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h1>Daftar Pasien Terdaftar</h1>
                </div>
                <div class="col-md-12 mt-3">
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

{{-- <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-3 mb-3">Daftar Pasien Terdaftar</h1>
                <hr>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-4 ml-auto">
                <form class="form-inline my-2 my-lg-0" action="{{ action('PendaftaranUserController@index') }}">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No Antrian</th>
                            <th>Nama Pendaftar</th>
                            <th>Poli</th>
                            <th>Dokter</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pendaftaran as $pendaftarans)
                            <tr>
                                <td>{{ $pendaftarans->no_pendaftaran }}</td>
                                <td>{{ $pendaftarans->pasien->nama }}</td>
                                <td>{{ $pendaftarans->poli->poli }}</td>
                                <td>{{ $pendaftarans->dokter->nama }}</td>
                            @empty
                                <td colspan="6" class="text-center">Belum Ada Pasien Terdaftar!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $pendaftaran->links() }}
            </div>
        </div>
</div> --}}
@endsection