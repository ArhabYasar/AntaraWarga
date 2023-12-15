@extends('Layout.template-pengurus')

@section('konten-pengurus')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <main class="container">
        <!-- START DATA -->
        <div class="pb-3">
            <form class="d-flex" action="{{ url('/dashboardPetugas/BukuTamu') }}" method="get">
                <input class="form-control me-1" type="search" id="searchInput" name="cari" value="{{ Request::get('cari') }}" placeholder="Search" aria-label="Search" autocomplete="off">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
            <div id="searchResults" style="display: none;"></div>
        </div>
        <!-- TOMBOL TAMBAH DATA -->
        <a href="{{ url('/dashboardPetugas/BukuTamu/create') }}">
            <button class="btn btn-primar">Tambah Data+</button>
        </a>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-sm-1">No</th>
                        <th class="col-md-1">Nama</th>
                        <th class="col-md-2">Gender</th>
                        <th class="col-md-1">Keterangan</th>
                        <th class="col-md-1">Usia</th>
                        <th class="col-md-1">Kunjungan Ke</th>
                        <th class="col-md-1">Aksi</th>
                    </tr>
                    <tr>
                        <th>Lapor</th>
                        <th>Status Kawin</th>
                        <th>Lain Lain</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($data as $i => $item)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->usia }}</td>
                        <td>{{ $item->kunjungan }}</td>
                        <a href='{{ url('/dashboardPetugas/BukuTamu/'.$item->id.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Apakah Yakin Anda Ingin Menghapus Data Ini?')" class="d-inline" action="{{ url('/dashboardPetugas/BukuTamu/'.$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger" >Del</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $item->lapor }}</td>
                        <td>{{ $item->status_kawin }}</td>
                        <td>{{ $item->lain_lain }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- AKHIR DATA -->
    </main>
</body>
</html>
@endsection
