@extends('Layout.template-pengurus')
@section('konten-pengurus')
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Dashboard Pengurus</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            </head>
            <body>
                <main class="container">
                    <!-- START FORM -->
                    <form action="{{ url('/dashboardPengurus/Voting') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <div class="mb-3 row">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ old('kategori') }}" name="kategori" id="kategori" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ old('judul') }}" name="judul" id="judul" autocomplete="off" required>
                                </div>
                            </div>
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
