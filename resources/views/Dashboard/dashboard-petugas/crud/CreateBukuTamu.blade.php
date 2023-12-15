@extends('Layout.template-pengurus')
@section('konten-pengurus')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Pengurus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <!-- START FORM -->
        <form action="{{ url('/dashboardPetugas/BukuTamu') }}" method="post">
            @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ old('nama') }}" name="nama" id="nama"
                            autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="Laki-Laki">
                            <label class="form-check-label" for="laki-laki">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="perempuan" value="Perempuan">
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Lapor</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lapor" id="sudah" value="Sudah">
                            <label class="form-check-label" for="sudah">
                                Sudah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lapor" id="belum" value="Belum">
                            <label class="form-check-label" for="belum">
                                Belum
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Status Kawin</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_kawin" id="menikah"
                                value="Menikah">
                            <label class="form-check-label" for="menikah">
                                Menikah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_kawin" id="belum-menikah"
                                value="Belum Menikah">
                            <label class="form-check-label" for="belum-menikah">
                                Belum Menikah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_kawin" id="duda" value="Duda">
                            <label class="form-check-label" for="duda">
                                Duda
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_kawin" id="janda" value="Janda">
                            <label class="form-check-label" for="janda">
                                Janda
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lain_lain" class="col-sm-2 col-form-label">Lain-lain</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="lain_lain" id="lain_lain"
                            rows="3">{{ old('lain_lain') }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="usia" class="col-sm-2 col-form-label">Usia</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" value="{{ old('usia') }}" name="usia" id="usia"
                            autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kunjungan" class="col-sm-2 col-form-label">Kunjungan Ke</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" value="{{ old('kunjungan') }}" name="kunjungan"
                            id="kunjungan" autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- AKHIR FORM -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>
@endsection
