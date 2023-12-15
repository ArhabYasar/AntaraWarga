<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@1,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center">
        User List>
    </h2>
    <table class="table border-0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>email</th>
            </tr>
        </thead>
        <thead>
            @foreach ($user as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->email }}</td>
                </tr>
            @endforeach
        </thead>
    </table>
</body>
</html>
