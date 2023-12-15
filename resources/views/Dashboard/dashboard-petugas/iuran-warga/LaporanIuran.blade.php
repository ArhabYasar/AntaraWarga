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
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-sm-1">No</th>
                        <th class="col-md-1">Tipe Iuran</th>
                        <th class="col-md-2">Nama Iuran</th>
                        <th class="col-md-1">Nominal</th>
                        <th class="col-md-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($iuranData as $i => $item)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $item->tipe }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nominal }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#laporanModal{{ $item->id }}">View</a>
                            <div class="modal fade" id="laporanModal{{ $item->id }}" tabindex="-1" aria-labelledby="laporanModal{{ $item->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modal{{ $item->id }}Label">Detail Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Tipe Iuran: {{ $item->tipe }}</p>
                                            <p>Nama Iuran: {{ $item->nama }}</p>
                                            <p>Nominal: {{ $item->nominal }}</p>
                                            <p>Penanggung Jawab: {{ $item->getuser->name ?? 'Nama Tidak Tersedia' }}</p>
                                            <p>Keterangan: {{ $item->keterangan }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
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
