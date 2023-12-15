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
                <main>
                    <div class="container">
                        <h2>Verifikasi dan Perbarui Informasi Akun</h2>

                        <form action="{{ route('update') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                            </div>

                            <div class="mb-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                            </div>

                            <div class="mb-3">
                                <label for="password">Password Baru:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Perbarui Informasi</button>
                        </form>
                    </div>
                </main>
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            </body>
            </html>
@endsection
