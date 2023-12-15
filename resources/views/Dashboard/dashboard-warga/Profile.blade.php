@extends('Layout.template-pengurus')
@section('konten-pengurus')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard Warga</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <main class="container">
            <div class="row my-3">
                <div class="col-md-4 text-center">
                    <!-- Foto -->
                    <img src="{{ asset('path-to-your-image-directory/' . $data->foto) }}" alt="Foto Profil" class="img-fluid rounded-circle">
                    <!-- Nama -->
                    <h3 class="mt-2">{{ $data->nama }}</h3>
                </div>
                <div class="col-md-8">
                    <!-- Bagian Kiri -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" value="{{ $data->username ?? 'Username Kosong' }}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" value="{{ $data->nik ?? 'NIK Kosong' }}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="nkk">NKK</label>
                            <input type="text" class="form-control" id="nkk" value="{{ $data->nkk ?? 'NKK Kosong' }}" readonly>
                        </div>
                    </div>
                    <!-- Bagian Kanan -->
                    <div class="row">
                        <div class="col-md-4">
                            <label for="nomor_hp">Nomor HP</label>
                            <input type="text" class="form-control" id="nomor_hp" value="{{ $data->nomor_hp ?? 'Nomor HP Kosong' }}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" value="{{ $data->email ?? 'Email Kosong' }}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" value="{{ $data->alamat ?? 'Alamat Kosong' }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
    </html>
@endsection
