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
                     <!-- START DATA -->
                     <div class="my-3 p-3 bg-body rounded shadow-sm">
                             <!-- TOMBOL TAMBAH DATA -->
                             <table class="table table-striped">
                                 <thead>
                                     <tr>
                                         <th class="col-sm-1">No</th>
                                         <th class="col-md-2">Nama Iuran</th>
                                         <th class="col-sm-2">Nama User</th>
                                         <th class="col-md-2">Tanggal Pembayaran</th>
                                         <th class="col-md-2">Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i = $data->firstItem() ?>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->pengingat->nama }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bayarModal{{ $item->id }}">View</a>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                        <div class="modal fade" id="bayarModal{{ $item->id }}" tabindex="-1" aria-labelledby="bayarModal{{ $item->id }}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="bayarModal{{ $item->id }}Label">{{ $item->pengingat->nama }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{ asset('path-to-your-image-directory/' . $item->foto) }}" class="card-img-top" alt=".Foto Bukti Pembayaran">
                                                        <hr>
                                                        <div class="mt-3 mb-3 mr-1 ">
                                                            <h5>Nama User:</h5>
                                                            <p>{{ $item->user->name }}</p>
                                                        </div>
                                                        <div class="mt-3 mb-3 mr-1">
                                                            <h5>Tanggal Pembayaran:</h5>
                                                            <p>{{ $item->tanggal }}</p>
                                                        </div>
                                                        <div class="mt-3 mb-3 mr-1">
                                                            <h5>Nominal:</h5>
                                                            <p>{{ $item->nominal }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                        
                                        {{ $data->withQueryString()->links() }}
                                    @endforeach
                                 </tbody>
                             </table>
                       </div>
                       <!-- AKHIR DATA -->
                 </main>
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            </body>
            </html>
@endsection
