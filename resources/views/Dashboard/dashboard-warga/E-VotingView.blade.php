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
                    <!-- START FORM -->
                    <form action="{{ route('evoting.vote', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <div class="mb-3 row">
                                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="isi2" name="isi" value="{{ $dates['b'] }}" required>
                                    <label for="isi2">{{ $dates['b'] }}</label><br>
                                    <input type="radio" id="isi3" name="isi" value="{{ $dates['c'] }}" required>
                                    <label for="isi3">{{ $dates['c'] }}</label><br>
                                    <input type="radio" id="isi4" name="isi" value="{{ $dates['d'] }}" required>
                                    <label for="isi4">{{ $dates['d'] }}</label><br>
                                </div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- AKHIR FORM -->
                </main>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            </body>
            </html>
        @endsection
