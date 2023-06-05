<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
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
                background: url('/../storage/Images/Background_Web_Images.png') 0 0 no repeat;
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
            .Zooming{
		        transition: font-size .3s ease;
	        }
	        .Zooming:hover{
		        color: red;
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
                        date.getSeconds()
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
                </div>
            <div class="content">
                <div class="title m-b-md">
                </div>

                <div class="links">
                <a class="Zooming" href=""> <img class="Logo" src="/../../storage/Images/Logo.jpg" style="width:150px;height:100px"> </a>
                <a class="Zooming" href="/stack"> <img class="Zooming" src="/../../storage/Images/Stack_background.jpg" style="width:75px;height:50px"> Stack </a>
                <a class="Zooming" href="/queue"> <img class="Zooming" src="/../../storage/Images/Background_Image.png" style="width:75px;height:50px"> Queue </a>
                <a class="Zooming" href="/structandpointers"> <img class="Zooming" src="/../../storage/Images/StructAndPointers.png" style="width:75px;height:50px"> Struct and Pointers</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH D:\Semester 7\Thesis\resources\views/welcome.blade.php ENDPATH**/ ?>