@extends('layouts.user.master')
@section('title','Pendaftaran')
@section('content')
    <div class="container mt-5">
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
    </div>
@endsection