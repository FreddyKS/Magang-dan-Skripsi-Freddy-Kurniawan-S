<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thesis</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image : url('/../../storage/Images/Background_Web_ImagesHome.png');
                background-position: center center;
                background-size: 100%;
                background-repeat: no-repeat;
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
            .SpanClass {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .Zooming{
		        transition: font-size .3s ease;
	        }
	        .Zooming:hover{
		        color: #32CD32;
		        font-size: 14px;
	            font-weight: 600;
                transition : scale(1.1);
	        }
            .Zooming:active{
                color: #ADFF2F;
		        font-size: 14px;
	            font-weight: 600;
                transition : scale(1.1);
            }
            .Logo{
		        transition: transform .5s ease;
	        }
	        .Logo:hover{
		        transform: scale(1.1);
            }
            .Logo:Zooming:hover{
		        transform: scale(1.1);
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <!-- Web Icon (generated by : https://www.favicon-generator.org/ -->
    <link rel="apple-touch-icon" sizes="57x57" href="/../storage/Images/WebIcon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/../storage/Images/WebIcon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/../storage/Images/WebIcon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/../storage/Images/WebIcon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/../storage/Images/WebIcon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/../storage/Images/WebIcon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/../storage/Images/WebIcon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/../storage/Images/WebIcon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/../storage/Images/WebIcon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/../storage/Images/WebIcon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/../storage/Images/WebIcon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/../storage/Images/WebIcon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/../storage/Images/WebIcon/favicon-16x16.png">
    <link rel="manifest" href="/../storage/Images/WebIcon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/../storage/Images/WebIcon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
			@if(Auth::check())
                        Welcome,
                        {{ Auth::user()->name }}
                        @else
                        @endif
                        @if (!(Auth::check()))
                        <a class="Zooming" href="{{ url('/login') }}">Login</a>
                        <a class="Zooming" href="{{ url('/register') }}">Register</a>
                        @else
                        <a class="Zooming" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        @endif
                </div>
            <div class="content">
                <div class="title m-b-md">
                </div>

                <div class="links">
                @if (Auth::check())
                <a class="Zooming" href=""> <img class="Logo" src="/../../storage/Images/Logo.jpg" style="width:150px;height:100px"> </a>
                <a class="Zooming" href="/stack"> <img class="Zooming" src="/../../storage/Images/Stack_background.jpg" style="width:75px;height:50px"> Stack </a>
                <a class="Zooming" href="/queue"> <img class="Zooming" src="/../../storage/Images/Background_Image.png" style="width:75px;height:50px"> Queue </a>
                <a class="Zooming" href="/structandpointers"> <img class="Zooming" src="/../../storage/Images/StructAndPointers.png" style="width:75px;height:50px"> Struct and Pointers</a><br>
                <a class="Zooming" href="/showScore/{{Auth::user()->email}}"> <img class="Zooming" src="/../../storage/Images/ScoreList.png" style="width:65px;height:40px"> View {{ Auth::user()->name }}'s Score</a>
                @else
                <span> <img class="Logo" src="/../../storage/Images/Logo.jpg" style="width:150px;height:100px"> </span>
                <span class="SpanClass"> <img class="Zooming" src="/../../storage/Images/Stack_background.jpg" style="width:75px;height:50px"> Stack </span>
                <span class="SpanClass"> <img class="Zooming" src="/../../storage/Images/Background_Image.png" style="width:75px;height:50px"> Queue </span>
                <span class="SpanClass"> <img class="Zooming" src="/../../storage/Images/StructAndPointers.png" style="width:75px;height:50px"> Struct and Pointers</span><br>
                <span class="SpanClass"> <img class="Zooming" src="/../../storage/Images/ScoreList.png" style="width:65px;height:40px"> View Score</span>
                @endif
                </div>
            </div>
        </div>
    </body>
</html>