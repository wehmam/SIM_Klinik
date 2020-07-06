<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <center>
        <h5 class="mb-3">Daftar Pasien Klinik AZ</h5>
    </center>

    <section>
        <table class="table table-bordered" style="width: 100%">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>No Hp</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasien as $pasiens)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pasiens->nik }}</td>
                        <td>{{ $pasiens->nama }}</td>
                        <td>{{ date('d F Y',strtotime($pasiens->tanggal_lahir))}}</td>
                        <td>{{ $pasiens->jenis_kelamin === 0 ? 'Pria' : 'Wanita' }}</td>
                        <td>{{ $pasiens->no_hp }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>