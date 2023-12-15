<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Pengurus</title>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="chat">
        <div class="top">
            <div>
                <h2>{{ $diskusi->topik }}</h2>
                <small>Berlangsung</small>
                <a href="{{ url('/dashboardWarga/Diskusi') }}">
                    <button>Kembali</button>
                </a>
            </div>
        </div>
        <div class="messages">
            @include('Dashboard.dashboard-pengurus.pengumuman.receive',['message' => " "])
        </div>
        <div class="bottom">
            <form>
                @csrf
                <input type="text" id="message" name="message" placeholder="Enter Message..." autocomplete="off">
                <button type="submit"></button>
            </form>
        </div>
    </div>
</body>
<script>
    const pusher = new Pusher('{{config('broadcasting.connections.pusher.key')}}', {cluster: 'ap1'});
    const channel = pusher.subscribe('public');

    //Receive Message
    channel.bind('chat', function(data){
        $.post("/dashboardPengurus/receive",{
            _token: '{{csrf_token()}}',
            message: data.message,
        })
            .done(function (res) {
                $(".messages > .message").last().after(res);
                $(document).scrollTop($(document).height());
        });
    });

    //Broadcast Message
    $("form").submit(function(event){
        event.preventDefault();

        $.ajax({
            url: '/dashboardPengurus/broadcast',
            method: 'POST',
            headers: {
                'X-Socket-Id': pusher.connection.socket_id
            },
            data: {
                _token: '{{csrf_token()}}',
                message: $("form #message").val(),
            }
        }).done(function (res){
            $(".messages > .message").last().after(res);
            $("form #message").val('');
            $(document).scrollTop($(document).height());
        });
    });
</script>
</html>
