@extends('Layout.template-pengurus')
@section('konten-pengurus')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Pengurus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <a href="{{ url('/dashboardPengurus/Voting') }}">
        <button class="btn btn-primary">Kembali</button>
    </a>
    <canvas id="myChart" width="300" height="200"></canvas>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['{{ $dates['b'] }}', '{{ $dates['c'] }}', '{{ $dates['d'] }}'],
                datasets: [{
                    label: 'Data Voting',
                    data: [{{ $votes->where('isi', $dates['b'])->count() }}, {{ $votes->where('isi', $dates['c'])->count() }}, {{ $votes->where('isi', $dates['d'])->count() }}],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    @if(isset($errorMessage))
        <p>{{ $errorMessage }}</p>
    @else
        <!-- your existing code to display votes -->
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-2">Tanggal Voting</th>
                <th class="col-md-2">Nama User</th>
                <th class="col-md-2">Judul Voting</th>
                <th class="col-md-2">Pilihan Voting</th>
            </tr>
        </thead>
        <tbody>
            @foreach($votes as $vote)
            <tr>
                <td>{{ $vote->created_at->format('d-m-Y') }}</td>
                <td>{{ $vote->user->username }}</td>
                <td>{{ $voting->judul }}</td>
                <td>{{ $vote->isi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection
