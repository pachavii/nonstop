<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bookstore</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("https://images.unsplash.com/photo-1509021436665-8f07dbf5bf1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=2767&q=80");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-color: #A2C7E5;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                
                margin: 0;

            }

            .full-height {
                height: 50vh;
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
                font-size: 55px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 40px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .btn {
                border: 2px solid #E7E7E7;
                background-color: #E7E7E7;
                color: black;
                padding: 14px 28px;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                font-size: 50px;
                cursor: pointer;
                border-radius: 20px;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content" >
                <br><br><br>
                <div class="title m-b-md"style="font-size:80px;">
                    Data Management & Analytical Platform
                </div>
                <div class="title m-b-md"style="font-size:80px;">
                    for Book Store Sub-agents
                </div>

                <br><br><br>

                @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="font-size:60px;" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a style="font-size:60px;" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                @endif

            </div>
        </div>
    </body>
</html>
