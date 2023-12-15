@extends('Layout.template-pengurus')
@section('konten-pengurus')
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Dashboard UMKM</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            </head>
            <body>
                <main class="container">
                    <!-- START FORM -->
                    <form action="{{ url('/dashboardUMKM/Pasar/'.$data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Usaha</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $data->nama }}" name="nama" id="nama" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto Produk</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                            </div>

                            @if ($data->foto)
                            <div class="form-group">
                                <label>Foto Sekarang</label>
                                <img src="{{ asset('path-to-your-image-directory/' . $data->foto) }}" alt="Foto Produk" width="300">
                            </div>
                            @endif
                            <div class="mb-3 row">
                                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
                            </div>
                        </div>
                    </form>
                    <!-- AKHIR FORM -->
                </main>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            </body>
            </html>
            @endsection
