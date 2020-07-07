<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 text-center">
                <div class="card border-primary mb-3 mx-auto" style="max-width: 18rem;">
                    <div class="card-header text-center mb-5" style="border:1px solid black">
                        <strong>Pendaftaran Klinik AZ</strong> 
                    </div>
                        <div class="card-body text-dark mb-5" style="border:1px solid black">
                            <h6 style="margin-top:40px">No Antrian:</h6>
                            <h2 class="mt-4">{{ $pendaftaran->no_pendaftaran }}</h2>
                            <h5 class="mt-3">{{ $pendaftaran->pasien->nama }}</h5>
                            <p class="small mt-3"><b>{{ $pendaftaran->poli->poli }}</b></p>
                            <p class="small">{{ $pendaftaran->dokter->nama }}</p>
                        </div>  
                </div>
            </div>
        </div>
    </div>

</body>
</html>