@extends('layouts.admin.master')
@section('title','Daftar Poli')
@section('poli','active')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Poli</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('poli.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"> Add Data</i></a>
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
                            <th>Poli</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($poli as $polis)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $polis->poli }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('poli.edit',$polis->id,'edit') }}" class="badge badge-success mx-2 px-2">Edit</a>
                                        <form action="{{ route('poli.destroy',$polis->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge badge-danger" onclick="return confirm('Yakin Ingin menghapus data {{ $polis->poli }}?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection