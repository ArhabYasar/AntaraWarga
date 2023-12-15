<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lupa Password</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@1,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .login{
            height: 100vh;
        }
        .lgn{
        }
         h1 {
            font-size: 40px;
            font-family: Karla;
            font-style: italic;
         }

         h1 span.white {
            color: #FFFFFF;
            text-decoration-line: underline;
            text-decoration-color: #FFFFFF;
            line-height: normal;
        }

         h1 span.blue {
            color: #2B44FF;
            text-decoration-line: underline;
            text-decoration-color: #2B44FF;
            line-height: normal;
        }
         h2 {
            color: #000;
            font-size: 40px;
            font-family: Karla;
            font-style: italic;
        }
        .login-form input{
            border-radius: 10px;
            border: 1px solid #9B9B9B;
            background: #EDEDED;
            margin-top: 7px
            font-family: Karla;
        }
        .login-form a{
            color: #1F28CF;
            font-size: 12px;
            font-family: Karla;
            font-style: italic;
            text-decoration-line: underline;
            margin: 19px 0 40px 0;
            display: block;
        }
        .login-form button{
            color: #FFF;
            font-size: 24px;
            font-family: Karla;
            font-style: normal;
            font-weight: 700;
            border: none;
        }
        .btnlgn{
            background: #2CB8F4;
            width: 100%;
            height: 50px;
        }
        .btnregister{
            background: #E44041;
            width: 100%;
            height: 50px;
        }
        .username{
            margin-bottom: 15px;
            width: 100%;
            height: 50px;
        }
        .lgn{
            /* margin: 0 0 59px 135px; */
        }
        .hr{
            margin-bottom: 30px;
        }
        .corosel{
            margin-bottom: 300px;
        }
        .p{
            color: #000;
            font-family: Karla;
            font-size: 12px;
            font-style: italic;
            padding: 0;
            margin: 0 0 50px 0 !important;
            display: block;
        }
        .p1{
            margin: 0 0 0 2px;
        }
    </style>
</head>
<body>
        <section class="login d-flex">
            <div class="login-left w-50 h-100">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100 h100 p-0" src="{{ asset('img/bgkiri.png') }}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block corosel">
                            <h1>
                                <span class="white">ANTARA</span>
                                <span class="blue">WARGA</span>
                            </h1>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="login-right w-50 h-100">
                <div class="row justify-content-center align-items-center h-100 m-0">
                    <div class="col-7 p-0">
                        <div class="header">
                            <h2 class="lgn text-center">FORGOT PASSWORD</h2>
                            <span class="p">
                                <p class="p1">Trouble Logging in?</p>
                                <p class="text-center">Enter your email and we'll send you a link to get back into your account.</p>
                            </span>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session()->has('status'))
                                <div class="alert alert-success">
                                    {{ session()->get('status') }}
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="login-form">
                                <div class="input-group mb-5 mt-5">
                                    <input type="email" class="form-control username" value="{{ old('email') }}" name="email" placeholder="Email" required autocomplete="off">
                                </div>
                                <button type="submit" class="btn btn-primary rounded btnlgn">SUBMIT</button>
                                <a href="/">
                                    <button type="button" class="btn btn-danger btnregister">CANCEL</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
