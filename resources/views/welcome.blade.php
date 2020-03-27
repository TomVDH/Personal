<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>:: underway :: tvdhdvt ::</title>

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
            height: 100vh;
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
            max-height: 170px;
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

        .wrapper {

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
            <img src="../images/87840345_10216315030297511_2746128769675689984_o.jpg" id="hello" alt="Mug shot.">
            <p class="title volk">{{ config('app.name') }}</p>
            <p class="subtitle volk">- binnenkort / soon -</p>
        </div>
        <br>
        <div class="links content">
            <a href="https://www.linkedin.com/in/tvdhdvt/">LinkedIn</a>
            <a href="https://www.instagram.com/trouvaillisage/">Instagram</a>
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
            "#799979",
            "#C46564",
            "#3E838C",
            "#F59B71",
            "#615375"];

        var polys = ["polygon(76% 0, 6% 60%, 84% 100%)",
            "polygon(100% 0, 0 61%, 36% 84%)",
            "polygon(75% 42%, 56% 69%, 83% 95%, 24% 69%, 12% 12%)",
            "polygon(30% 27%, 100% 2%, 63% 65%, 0 89%)"];

        bg = colors[Math.floor(Math.random() * colors.length)];
        av = polys[Math.floor(Math.random() * polys.length)];


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
