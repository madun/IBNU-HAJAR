<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IBNU HAJAR</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div class="top-right links">
            @if (Auth::guest())
                <a href="{{ route('user.login') }}">Login</a>
            @else
                {{-- <a href="{{ route('register') }}">Register</a> --}}
                <a href="{{ route('account') }}">
                  @php
                    $firstName = Auth::user()->nama_anggota;
                    $arr = explode(' ',trim($firstName));
                    $nama = '';
                    if ($arr[0] == 'Hj.' || $arr[0] == 'HJ.' || $arr[0] == 'H.' || $arr[0] == 'DRA.' || $arr[0] == 'Dra.' || $arr[0] == 'Dr.' || $arr[0] == 'Drs.' || $arr[0] == 'S.' || $arr[0] == 'Ir.' || $arr[0] == 'IR.' || $arr[0] == 'R.' || $arr[0] == 'N.E.') {
                      $nama = $arr[1];
                    } else {
                      $nama = $arr[0];
                    }
                    if ($nama == 'Hj.' || $nama == 'HJ.' || $nama == 'H.' || $nama == 'DRA.' || $nama == 'Dra.' || $nama == 'Dr.' || $nama == 'Drs.' || $nama == 'S.' || $nama == 'Ir.' || $nama == 'IR.' || $nama == 'R.'|| $nama == 'N.E.') {
                      $nama = $arr[2];
                    } else {
                      $nama = $arr[0];
                    }
                    echo $nama;
                  @endphp
                     <i class="fa fa-angle-down white"></i></a>
                </a>
                
            @endif
          </div>
            {{-- <a href="{{ url('/home') }}">Home</a> --}}
            <div class="content">
                <div class="title m-b-md">
                    IBNU HAJAR
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
