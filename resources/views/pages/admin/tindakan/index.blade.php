@extends('layouts.admin.master')
@section('title','Pendaftaran')
@section('tindakan','active')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Pasien</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('tindakan.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"> Add Data</i></a>
        </div>
    </div>
    <hr>
    </div>
</div>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Tindakan</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse($tindakan as $tindakans)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tindakans->tindakan }}</td>
                                <td>{{ $tindakans->harga }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('tindakan.edit',$tindakans->id,'edit') }}" class="badge badge-success mr-2 m-2 px-2">Edit</a>
                                        <form action="{{ route('tindakan.destroy',$tindakans->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge badge-danger px-1 m-2" onclick="return confirm('Are You sure wanna delete {{ $tindakans->tindakan }} Data?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                                @empty 
                                <td colspan="6" class="text-center">Data Kosong!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
            {{-- <h1>halaman dokter</h1> --}}
             
        </div>
    </div>
</section>
@endsection