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
        <form action="{{ url('/dashboardWarga/Pembayaran') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="form-group">
                    <label for="pengingat_id">Nama Iuran:</label>
                    <select name="pengingat_id" id="pengingat_id" class="form-control">
                        <option value="">Pilih Nama</option>
                        @foreach ($ingat as $pengingatItem)
                            <option value="{{ $pengingatItem->id }}">{{ $pengingatItem->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="user_id">Nama User:</label>
                    <select name="user_id" id="user_id" class="form-control">
                        <option value="">Pilih Nama</option>
                        @foreach ($user as $userItem)
                            <option value="{{ $userItem->id }}">{{ $userItem->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal:</label>
                    <input type="number" name="nominal" id="nominal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Pembayaran:</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="foto">Foto Bukti Pembayaran:</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div class="mb-3 row">
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
