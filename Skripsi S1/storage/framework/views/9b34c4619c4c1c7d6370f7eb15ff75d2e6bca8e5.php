<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Data Structures in C language App')); ?></title>

    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css">
</head>
<body>
    <style>
        </style>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
            <li style="list-style-type:none">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'Data Structure in  C language App')); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
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
                    <!-- Navbar to display date -->
                        <div class="navbar-brand" id="dated"></div>
                    <!-- Navbar to display time -->
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
                    //Add 0 when the time is only 1 digit(Example: 1 O'clock, we display 01)
                    if(hh<10){
                        hh = "0"+ hh;
                    }
                    if(mmm<10){
                        mmm = "0"+mmm;
                    }
                    if(ss<10){
                        ss = "0"+ss;
                    }
                    if (dd < 10) {
                        dd = '0' + dd;
                    }
                    //Display Day by Words
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
                    else if(d == 0){
                        day = "Sunday";
                    } 
                    //Month Display with Words
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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH G:\Semester 7\Thesis\resources\views/layouts/app.blade.php ENDPATH**/ ?>