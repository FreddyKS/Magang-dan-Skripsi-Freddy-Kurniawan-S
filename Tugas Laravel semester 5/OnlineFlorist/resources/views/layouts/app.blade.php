<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OnlineFlorist') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <style>
        body{
            background-image: url("/../storage/img/Background.jpg");
        }
        </style>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <li style="list-style-type:none">
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'OnlineFlorist') }}</a>
                    @if(Auth::check())
                        <a class="navbar-brand" href="{{ url('/profile') }}">Profile</a>
                        <a class="navbar-brand" style="color:blue" href="/cart">
                                        <img src="/storage/img/cart.png" width=45 height=40>
                                        </a>
                        @if(Auth::user()->email=='admin@admin.com')
                        <li class="nav-item dropdown" style="list-style-type:none">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                    Admin Menu <span class="caret"></span>
                                </a>
                            <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                                        Manage<br>
                                        _____________________________<br>
                                    
                                    <a class="dropdown-item" href="/manageflower">
                                        Manage Flower
                                    </a>
                                    <a class="dropdown-item" href="/manageflowertype">
                                        Manage Flower Type
                                    </a>
                                    <a class="dropdown-item" href="/manageuser">
                                        Manage User
                                    </a>
                                    <a class="dropdown-item" href="/managecourier">
                                        Manage Courier
                                    </a>
                                    _____________________________<br>
                                        Transaction<br>
                                        _____________________________<br>
                                    <a class="dropdown-item" href="/transactionhistory">
                                        Transaction History
                                    </a>
                                        @else
                                        @endif
                                    @endif
                                    </li>
                                </div>
                                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto"> 
                        <!-- Navbar to display time -->
                    <li class="nav-item">
                        <div class="navbar-brand" id="dated"></div>
                        <div class="navbar-brand" id="time"></div>
                    </li> 
                    
                    <script type="text/javascript">
                    //Source : stackoverflow.com
                    function showTime() {
                        var date = new Date(),
                        utc = new Date(Date.UTC(
                        date.getFullYear(),
                        date.getMonth(),
                        date.getDate(),
                        date.getHours()-7,
                        date.getMinutes(),
                        date.getSeconds(),
                    ));
                    var today = new Date();
                    var hh = today.getHours();
                    var mmm = today.getMinutes();
                    var ss = today.getSeconds();
                    var dd = today.getDate();
                    var mm = today.getMonth() + 1;
                    var d = today.getDay();
                    var yyyy = today.getFullYear();
                    //Display Day
                    if(hh<10){
                        hh = "0"+ hh;
                    }
                    if(mmm<10){
                        mmm = "0"+mmm;
                    }
                    if(ss<10){
                        ss = "0"+ss;
                    }
                    if(d == 1){
                        day = "Monday";
                    }
                    else if(d == 2){
                        day = "Tuesday";
                    }
                    else if(d == 3){
                        day = "Wednesday";
                    }
                    else if(d == 4){
                        day = "Thursday";
                    }
                    else if(d == 5){
                        day = "Friday";
                    }
                    else if(d == 6){
                        day = "Saturday";
                    }
                    else if(d == 7){
                        day = "Sunday";
                    }
                    if (dd < 10) {
                        dd = '0' + dd;
                    } 
                    //Month Display
                    if(mm == 1){
                        m = "January";
                    }
                    else if(mm == 2){
                        m = "February";
                    }
                    else if(mm == 3){
                        m = "March";
                    }
                    else if(mm == 4){
                        m = "April";
                    }
                    else if(mm == 5){
                        m = "May";
                    }
                    else if(mm == 6){
                        m = "June";
                    }
                    else if(mm == 7){
                        m = "July";
                    }
                    else if(mm == 8){
                        m = "August";
                    }
                    else if(mm == 9){
                        m = "September";
                    }
                    else if(mm == 10){
                        m = "October";
                    } 
                    else if(mm == 11){
                        m = "November";
                    }
                    else if(mm == 12){
                        m = "December";
                    }
                    var today = day +', '+ dd + ' ' + m + ' ' + yyyy;
                    var clocking = hh + ':' + mmm + ':' + ss; 
                        document.getElementById('dated').innerHTML = today;
                        document.getElementById('time').innerHTML = clocking;
                    }
                    setInterval(showTime, 1);
                </script>
                        <!-- Authentication Links -->
                        @guest
                            @if(!Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="/login">{{ __('Login') }}</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register">{{ __('Register') }}</a>
                                </li>
                           @else
                           @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Welcome, {{Session::get('name')}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/logout">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
