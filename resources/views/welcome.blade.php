<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>coming soon :: tvdhdvt</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn&display=swap" rel="stylesheet">

    <script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #13191d;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            /*height: 100vh;*/
            margin: 0;
        }

        .full-height {
            min-height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
            align-content: center;
            flex-direction: column;
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
            line-height: 0.40;
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

        .footer p
        {
            font-size: .75em;
        }

        .m-b-md img {
            max-height: 200px;
        }

        .m-b-md img:hover{
            clip-path: none;
            border-radius: 99%;

        }

        .volk{
            font-family: 'Vollkorn', serif;
        }

        .subtitle
        {
            margin-top: -20.5px;
            font-size: 1.15em;
        }

        @media screen and (max-width: 1025px) {
            .links > a {
                display: block;
                margin: 25px;
            }
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
    <div class="main">
        <div class="m-b-md content">
            <img src="../images/heythere.jpg" id="hello" alt="Mug shot.">
            <p class="title volk">{{ config('app.name') }}</p>
            <p class="subtitle volk">- binnenkort / soon -</p>
        </div>
        <br>
        <div class="links content">
            <a href="https://www.linkedin.com/in/tvdhdvt/">LinkedIn</a>
            <a href="https://www.instagram.com/tvdhdvt/">Instagram</a>
            <a href="https://unsplash.com/@tvdhdvt">Unsplash</a>
            <a href="#"><strike>CV</strike></a>
        </div>
    </div>
    <footer class="footer">
        <p>2020 &copy;</p>
    </footer>
</div>
<script>
    $(document).ready(function() {
        var colors = ["#FFF7C0",
            "#489C79",
            "#F25C5E",
            "#2B879E",
            "#FFA566",
            "#8E407A",
            "#DE6262",
            "#C2768E"];

        var polys = ["polygon(100% 0, 0 61%, 36% 84%)",
                    "polygon(76% 0, 6% 60%, 84% 100%)",
                    "polygon(39% 5%, 46% 37%, 98% 20%, 52% 57%, 79% 91%, 36% 66%, 16% 85%, 26% 58%, 10% 35%, 32% 40%)",
                    "circle(50% at 50% 50%)",
                    "polygon(25% 0, 89% 35%, 63% 38%, 67% 96%, 5% 37%)"];

        bg = colors[Math.floor(Math.random() * colors.length)];
        av = polys[Math.floor(Math.random() * polys.length)];
        console.log(av);

        document.getElementsByTagName('body')[0].style.background = bg;
        document.getElementById('hello').style.clipPath = av;

        $("#hello").hover(function() {
            $(this).css("clip-path", "none");
            $(this).css("border-radius", "99%");
        }, function() {
            $(this).css("clip-path", av);
            $(this).css("border-radius", "0%");
        });
    });
</script>
</body>
</html>
