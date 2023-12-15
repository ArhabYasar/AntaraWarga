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
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            </head>
            <body>
                <main class="container">
                    <!-- START DATA -->
                    <div class="my-3 p-3 bg-body rounded shadow-sm">
                        @foreach ($data as $item)
                            <div class="countdown" data-tanggal="{{ $item->tanggal }}"></div>
                        @endforeach
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="col-sm-1">No</th>
                                    <th class="col-sm-1">Tanggal Jatuh Tempo</th>
                                    <th class="col-sm-1">Nama Iuran</th>
                                    <th class="col-sm-1">Total Tagihan</th>
                                    <th class="col-sm-1">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = $data->firstItem() ?>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nominal }}</td>
                                        <td>{{ $item->status }}</td>
                                    <?php $i++ ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- AKHIR DATA -->
                </main>

                <script>
                    // Ambil semua elemen dengan class "countdown"
                    var countdowns = document.querySelectorAll('.countdown');

                    // Iterasi melalui setiap elemen dan hitung sisa waktu
                    countdowns.forEach(function(countdown) {
                        var tanggalJatuhTempo = countdown.getAttribute('data-tanggal');

                        // Pemeriksaan apakah tanggalJatuhTempo adalah null atau tidak
                        if (tanggalJatuhTempo) {
                            var selisihHari = new Date(tanggalJatuhTempo) - new Date();
                            var sisaHari = Math.floor(selisihHari / (1000 * 60 * 60 * 24));

                            // Tampilkan hasil di elemen countdown
                            countdown.innerHTML = 'Sisa waktu: ' + sisaHari + ' hari';
                        } else {
                            // Tampilkan pesan atau lakukan sesuatu jika tanggalJatuhTempo null
                            countdown.innerHTML = 'Data tidak lengkap';
                        }
                    });
                </script>
            </body>
            </html>
@endsection
