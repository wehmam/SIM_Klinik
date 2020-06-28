@extends('layouts.admin.master')
@section('title','Pendaftaran Pasien')
{{-- @section('master','active') --}}
@section('pendaftaran','active')

@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pendaftaran Pasien Klinik AZ</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"> Add Data</i></a>
        </div>
    </div>
    <hr>
    </div>
</div>
<section class="content mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr class="">
                            {{-- <th></th> --}}
                            <th>No Pendaftaran</th>
                            <th>Nama</th>
                            <th>Dokter</th>
                            <th>Poli</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftaran as $pendaftarans)
                            <tr>
                                <td>{{ $pendaftarans->no_pendaftaran }}</td>
                                <td>{{ $pendaftarans->pasien->nama }}</td>
                                <td>Dr. {{ $pendaftarans->dokter->nama }}</td>
                                <td>{{ $pendaftarans->poli->poli }}</td>
                            </tr>
                        @endforeach
                        {{-- @foreach($pasien as $pasiens)
                            <tr>
                                <td></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pasiens->nik }}</td>
                                <td>{{ $pasiens->nama }}</td>
                                <td>{{ $pasiens->tanggal_lahir }}</td>
                                <td>{{ $pasiens->jenis_kelamin === 0 ? 'Laki-Laki' : 'Perempuan' }}</td>
                                <td>{{ $pasiens->no_hp }}</td>
                                <td>{{ $pasiens->alamat }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('pasien.edit',$pasiens->id,'edit') }}" class="btn btn-success mx-2"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('pasien.destroy',$pasiens->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data {{ $pasiens->nama }}?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
            {{-- <h1>halaman dokter</h1> --}}
             
        </div>
    </div>
</section>
@endsection