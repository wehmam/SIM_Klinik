@extends('layouts.admin.master')
@section('title','Poli Pemeriksaan')
@section('poli','active')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Pasien Poli</h1>
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
                <table id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr class="">
                            <th></th>
                            <th>No Antrian</th>
                            <th>Nama</th>
                            <th>Tindakan</th>
                            <th>Total Biaya</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($pasien as $pasiens)
                            <tr>
                                <td></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pasiens->nama }}</td>
                                <td>
                                    @foreach ($pasiens->tindakan as $item)
                                        {{ $item->tindakan. " ," }}
                                    @endforeach
                                </td>
                                <td>
                                    @php
                                        $total = 0;
                                        $total = $pasiens->tindakan('harga');   
                                    @endphp
                                    {{ $total->sum('harga') }}
                                </td>
        
                                    
                                {{-- <td>{{ $pasiens->tindakan->tindakan }}</> --}}
                                {{-- <td>{{ $polis->tindakan->tindakan }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>  
        </div>
    </div>
</section>
@endsection