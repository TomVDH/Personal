<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>:: underway :: tvdhdvt ::</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Vollkorn&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
                font-size: 55px;
            }

            .links > a {
                color: #181d21;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .m-b-md img {
                max-height: 170px;
                border-radius: 99%;
            }

            .m-b-md{
                font-family: 'Vollkorn', serif;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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
            @endif
            <div class="content">
                <div class="title m-b-md">
                    <img src="../images/87840345_10216315030297511_2746128769675689984_o.jpg" alt="Mug shot.">
                    <p>{{ config('app.name') }}</p>
                </div>
                <div class="links">
                    <a href="https://www.linkedin.com/in/tvdhdvt/">LinkedIn</a>
                    <a href="https://www.instagram.com/trouvaillisage/">Instagram</a>
                    <a href="https://unsplash.com/@tvdhdvt">Unsplash</a>
                    <a href="#">CV</a>
                </div>
            </div>
        </div>
        <script>
            var colors = ["#FFF7C0",
                    "#799979",
                    "#C46564",
                    "#3E838C",
                    "#F59B71",
                    "#615375"],

            bg = colors[Math.floor(Math.random() * colors.length)];

            document.getElementsByTagName('body')[0].style.background = bg;
        </script>
    </body>
</html>
