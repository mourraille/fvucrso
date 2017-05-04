<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FVUCRSO2017</title>

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

            #hor-minimalist-a
            {
                font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
                font-size: 12px;
                background: #fff;
                margin: 45px;
                width: 100%;
                border-collapse: collapse;
                text-align: left;
                margin-top: 20%;
            }
            #hor-minimalist-a th
            {
                font-size: 14px;
                font-weight: normal;
                color: dimgray;
                padding: 10px 8px;
                border-bottom: 2px solid gray;
            }
            #hor-minimalist-a td
            {
                color: #669;
                padding: 9px 8px 0px 8px;
            }
            #hor-minimalist-a tbody tr:hover td
            {
                color: darkslategray;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    FVUCRSO ~ 2017
                </div>

                <div class="links">
                    <a href="http://so.ucr.ac.cr">Página de la Sede</a>
                    <a href="http://UCRSO.INFO">Página Informática Empresarial</a>
                </div>


                <table id="hor-minimalist-a">
                    <tr>
                        <th>Nombre</th>
                        <th>Puntos</th>
                        <th>Fecha</th>
                    </tr>
                    @foreach ($inputs as $input)
                    <tr>
                        <td>{{$input->name}}</td>
                        <td>{{$input->points}}</td>
                        <td>{{$input->created_at}}</td>
                    </tr>
                        @endforeach
                </table>
            </div>

        </div>
        <h5>mourraille</h5>
    </body>

</html>
