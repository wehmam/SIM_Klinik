@extends('layouts.admin.master')
@section('title','Pendaftaran')
@section('pendaftar','active')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Pasien</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"> Add Data</i></a>
        </div>
    </div>
    <hr>
    </div>
</div>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr class="">
                            <th></th>
                            <th>No Antrian</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>No Handphone</th>
                            <th>Dokter</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($pendaftaran as $pendaftarans)
                            <tr>
                                <td></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pendaftarans->pasien->nik }}</td>
                                <td><a href="{{ route('pendaftaran.show',$pendaftarans->id) }}">{{ $pendaftarans->pasien->nama }}</a></td>
                                <td>{{ $pendaftarans->pasien->no_hp }}</td>
                                <td>{{ $pendaftarans->dokter->dokter }}</td>
                                <td>{{ $pendaftarans->pasien->alamat }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('pendaftaran.edit',$pendaftarans->id,'edit') }}" class="badge badge-success mr-2 m-2 px-2">Edit</a>
                                        <form action="{{ route('pendaftaran.destroy',$pendaftarans->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge badge-danger px-1 m-2" onclick="return confirm('Are You sure wanna delete {{ $pendaftarans->nama }} Data?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <h1>halaman dokter</h1> --}}
             
        </div>
    </div>
</section>
@endsection