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
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="row">
                <div class="pb-3">
                    <form class="d-flex" action="{{ url('/dashboardWarga/UMKM') }}" method="get">
                        <input class="form-control me-1" type="search" id="searchInput" name="cari" value="{{ Request::get('cari') }}" placeholder="Search" aria-label="Search" autocomplete="off">
                        <button class="btn btn-secondary" type="submit">Cari</button>
                    </form>
                    <div id="searchResults" style="display: none;"></div>
                 </div>
                 <!-- TOMBOL TAMBAH DATA -->
                @foreach($umkms as $umkm)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('path-to-your-image-directory/' . $umkm->foto) }}" class="card-img-top mt-2" alt=".Foto Produk">
                        <div class="card-body">
                            <h5 class="card-title">{{ $umkm->nama }}</h5>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#umkmModal{{ $umkm->id }}">Detail Produk</a>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="umkmModal{{ $umkm->id }}" tabindex="-1" aria-labelledby="umkmModal{{ $umkm->id }}Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="umkmModal{{ $umkm->id }}Label">{{ $umkm->nama }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('path-to-your-image-directory/' . $umkm->foto) }}" class="card-img-top" alt=".Foto Produk">
                                <hr>
                                <h3 class="mt-3 text-center">Deskripsi</h3>
                                <p class="mt-3 mb-3">{{ $umkm->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
<style>
    .card-img-top {
        width: 100%;
        height: 200px; /* Sesuaikan tinggi gambar sesuai kebutuhan Anda */
        object-fit: contain; /* Menampilkan gambar secara keseluruhan */
    }
</style>
</html>
@endsection
