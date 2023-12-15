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
                             <!-- FORM PENCARIAN -->
                             <div class="pb-3">
                                <form class="d-flex" action="{{ url('/dashboardWarga/Pengumuman') }}" method="get">
                                    <input class="form-control me-1" type="search" id="searchInput" name="cari" value="{{ Request::get('cari') }}" placeholder="Search" aria-label="Search" autocomplete="off">
                                    <button class="btn btn-secondary" type="submit">Cari</button>
                                </form>
                                <div id="searchResults" style="display: none;"></div>
                             </div>

                             <!-- TOMBOL TAMBAH DATA -->
                             <table class="table table-striped">
                                 <thead>
                                     <tr>
                                         <th class="col-sm-1">No</th>
                                         <th class="col-md-2">Kategori</th>
                                         <th class="col-md-3">Isi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    <?php $i = $data->firstItem() ?>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>{{ $item->isi }}</td>
                                        </tr>
                                        <?php $i++ ?>
                                    @endforeach
                                 </tbody>
                             </table>
                            {{ $data->withQueryString()->links() }}
                       </div>
                       <!-- AKHIR DATA -->
                 </main>
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            </body>
            </html>
@endsection