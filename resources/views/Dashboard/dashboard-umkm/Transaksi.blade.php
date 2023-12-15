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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <main class="container">
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- FORM PENCARIAN -->
            <div class="pb-3">
                <form class="d-flex" action="{{ url('/dashboardUMKM/Transaksi') }}" method="get">
                    <input class="form-control me-1" type="search" id="searchInput" name="cari" value="{{ Request::get('cari') }}" placeholder="Search" aria-label="Search" autocomplete="off">
                    <button class="btn btn-secondary" type="submit">Cari</button>
                </form>
                <div id="searchResults" style="display: none;"></div>
            </div>

            <!-- TOMBOL TAMBAH DATA -->
            <a href="{{ url('/dashboardUMKM/Transaksi/create') }}">
                <button class="btn btn-primary">Tambah Data+</button>
            </a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-sm-1">No</th>
                        <th class="col-md-2">Nama</th>
                        <th class="col-md-2">Metode</th>
                        <th class="col-md-2">Tanggal</th>
                        <th class="col-md-2">Status</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem() ?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->metode }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal{{ $item->id }}">View</button>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="viewModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewModalLabel{{ $item->id }}">View Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Content to display in the modal -->
                                    <p>Nama: {{ $item->nama }}</p>
                                    <p>Metode: {{ $item->metode }}</p>
                                    <p>Nominal: {{ $item->nominal }}</p>
                                    <p>Tanggal: {{ $item->tanggal }}</p>
                                    <p>Status: {{ $item->status }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
            {{ $data->withQueryString()->links() }}
        </div>
        <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        // Ensure that the modal script is initialized
        $('[data-toggle="modal"]').on('click', function () {
            var target_modal = $(this).data('target');
            $(target_modal).modal('show');
        });
    });
</script>

</body>
</html>
@endsection
