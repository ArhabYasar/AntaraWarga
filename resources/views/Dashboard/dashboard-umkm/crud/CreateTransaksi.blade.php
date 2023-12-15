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
        <form action="{{ url('/dashboardUMKM/Transaksi') }}" method="post">
            @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ old('nama') }}" name="nama" id="nama" autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="metode" class="col-sm-2 col-form-label">Metode</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode" id="emoney" value="E-MONEY" checked>
                            <label class="form-check-label" for="emoney">
                                E-MONEY
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode" id="bca" value="BCA">
                            <label class="form-check-label" for="bca">
                                BCA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode" id="kartu_kredit" value="KARTU KREDIT/DEBIT">
                            <label class="form-check-label" for="kartu_kredit">
                                KARTU KREDIT/DEBIT
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" value="{{ old('nominal') }}" name="nominal" id="nominal" autocomplete="off">
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
