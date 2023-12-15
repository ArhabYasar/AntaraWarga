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
            </head>
            <body>
                <main class="container">
                    <form action="{{ url('/dashboardWarga/Profile/'.$data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row my-3">
                            <div class="col-md-4 text-center">
                                <input type="file" class="form-control" id="foto" name="foto">
                                @if ($data->foto)
                                <div class="form-group mt-3">
                                    <label>Foto Sekarang</label>
                                    <img src="{{ asset('path-to-your-image-directory/' . $data->foto) }}" alt="Foto Berita" width="300">
                                </div>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <!-- Bagian Kiri -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="nkk">NKK</label>
                                        <input type="text" class="form-control" id="nkk" name="nkk" value="{{ $data->nkk }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nomor_hp">Nomor HP</label>
                                        <input type="number" class="form-control" id="nomor_hp" name="nomor_hp" value="{{ $data->nomor_hp }}">
                                    </div>
                                </div>
                                <!-- Bagian Kanan -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nama -->
                        <div class="mb-3">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
                        </div>

                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{ $data->username }}">
                        </div>

                        <!-- Nik -->
                        <div class="mb-3">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" value="{{ $data->nik }}">
                        </div>

                        <!-- Simpan Button -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </main>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            </body>
            </html>
            @endsection
