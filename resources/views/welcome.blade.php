

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Osobni asistent</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #C4C4C4;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
           
            .m-b-md {
                margin-bottom: 100px;
                margin-top: 200px;
               
                
            }
            
            .btn {
                height: 7vh;
                width: 35vh;
                background-color: #4F4F4F;
                margin-bottom: 10px;
                margin-top: 20px;
                font-size: 40px;
                color: #FFFFFF;
                font-weight: 100;
                font-family: Anaheim;
                font-weight: normal;


            }
            .about-us{
                
                background-color : #FFFFFF;
                color: #4F4F4F;
            }
            .btn-info {
                height: 7vh;
                width: 555vh;
                background-color: #52;
                margin-bottom: 10px;
                margin-top: 20px;
                font-size: 40px;
                color: #FFFFFF;
                font-weight: 100;
                font-family: Anaheim;
                font-weight: normal;
            }
        </style>
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <div class="content">

                <div class="title m-b-md">
                <img src="/svg/OsobniAsistent.svg" height="70"> Osobni Asistent
                </div>
                
                <div>
                <a href="{{ route('login') }}">
                <button type="button" class="btn btn-outline-primary">Prijavi se!</button>
                </a>
                </div>
                <div>
                <a href = "{{ route('register') }}">
                <button type="button" class="btn btn-outline-primary">Registriraj se!</button>
                <!-- </a>
                </div>
                <div>
                <button type="button" class="btn btn-outline-primary about-us">O aplikaciji</button>
                </div>
                 -->
              
        
            </div>
            
        </div>
    </body>
</html>
