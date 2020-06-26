@extends('layouts.admin.master')
@section('title','Dokter')
@section('dokter','active')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Dokter</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('dokter.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"> Add Data</i></a>
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
                            {{-- <th></th> --}}
                            <th>No</th>
                            <th>Nama</th>
                            <th>Spesialis</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($dokter as $dokters)
                            <tr>
                                {{-- <td></td> --}}
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dokters->dokter }}</td>
                                <td>{{ $dokters->spesialis }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('dokter.edit',$dokters->id,'edit') }}" class="badge badge-success mr-2 m-2 px-2">Edit</a>
                                        <form action="{{ route('dokter.destroy',$dokters->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge badge-danger px-1 m-2" onclick="return confirm('Are You sure wanna delete {{ $dokters->dokter }} Data?')">Hapus</button>
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