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
                                <form class="d-flex" action="{{ url('/dashboardWarga/Diskusi') }}" method="get">
                                    <input class="form-control me-1" type="search" id="searchInput" name="cari" value="{{ Request::get('cari') }}" placeholder="Search" aria-label="Search" autocomplete="off">
                                    <button class="btn btn-secondary" type="submit">Cari</button>
                                </form>
                                <div id="searchResults" style="display: none;"></div>
                             </div>

                             <table class="table table-striped">
                                 <thead>
                                     <tr>
                                         <th class="col-sm-1">No</th>
                                         <th class="col-md-2">Topik</th>
                                         <th class="col-md-2">Isi</th>
                                         <th class="col-md-1">Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    <?php $i = $data->firstItem() ?>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->topik }}</td>
                                            <td>{{ $item->isi }}</td>
                                            <td>
                                                <a href='{{ url("/dashboardWarga/Diskusi/$item->id/chat") }}' class="btn btn-success btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Tidak ada data yang ditemukan.</td>
                                        </tr>
                                    @endforelse
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
