<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Homepage by Laravel, Website Icon by https://www.favicon-generator.org/ -->
    <head>
        <link rel="apple-touch-icon" sizes="57x57" href="/../IconWebsite/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/../IconWebsite/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/../IconWebsite/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/../IconWebsite/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/../IconWebsite/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/../IconWebsite/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/../IconWebsite/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/../IconWebsite/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/../IconWebsite/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/../IconWebsite/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/../IconWebsite/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/../IconWebsite/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/../IconWebsite/favicon-16x16.png">
<link rel="manifest" href="/../IconWebsite/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/../IconWebsite/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Tanggal, Total Row Per Bulan dan Keseluruhan</title>
	<center>
	<a href="/../HomepageDataTerupdate.php"> <img class="Logo" src="/../TelkomIndonesia.jpg" style="height:200px;width:310px" title="Kembali ke Menu Utama"> </a>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
                margin-bottom: 30px;
            }
	    .Logo{
		transition: transform .5s ease;
	    }
	    .Logo:hover{
		transform: scale(1.1);
	    }
	    button{ 
    		font-family: 'Nunito', sans-serif;
		font-size: .8em;
		font-weight: bold;
		background-color: #666;
		color: #FFF;
		padding: 2px 6px;
		border-collapse: separate;
		border: 1px solid #000;
		cursor: pointer;
	    }
	    button:enabled:hover{
		background-color: darkslategray;
	    }
	    button:focused{
	    	font-family: 'Nunito', sans-serif;
		font-size: .8em;
		font-weight: bold;
		background: black;
		color: #FFF;
		padding: 2px 6px;
		border-collapse: separate;
		border: 1px solid #000;
		cursor: pointer;
	    }
	    button:disabled{
	    	opacity:0.5;
		cursor: not-allowed;
	    }
        </style>
	<!-- syntax dibawah berarti -> Jika tidak ada variable $year, $year diisi dengan tahun sekarang ini -->
<?php 
      if(isset($_GET['year'])){ 
	  $year=$_GET['year']; 
      }
      else{ 
	  $year=date("Y");
      }
      if(isset($_GET['database'])){
	  $database=$_GET['database'];
      }
      else{
      	  $database="web";
      }
      if(isset($_GET['port'])){
	  $port=$_GET['port'];
      }
      else{
      	  $port="14113";
      }
      if(isset($_GET['user'])){
	  $user=$_GET['user'];
      }
      else{
      	  $user="u_web";
      }
      if(isset($_GET['password'])){
	  $password=strrev($_GET['password']);
	  $password=str_rot13($password);
	  $password=base64_decode($password);
      }
      else{
      	  $password="PT Telekomunikasi Indonesia";
	  $_GET['password']="PT Telekomunikasi Indonesia";
      }
      if(isset($_GET['host'])){
	  $HOST=$_GET['host'].":".$port;
      }
      else{
      	  $HOST="pen-dev.udata.id";
	  $HOST=$HOST.":";
	  $HOST=$HOST.$port;
      }
echo "<h2> Data Terupdate, Total Row Perbulan dan Keseluruhan Tahun " .$_GET['year']. " per "?> <div id="dated"></div>
<?php echo "Database " .$database?><br>
Mohon memilih halaman
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
                    //Display hari dengan teks
                    if(d == 1){
                        day = "Senin";
                    }
                    else if(d == 2){
                        day = "Selasa";
                    }
                    else if(d == 3){
                        day = "Rabu";
                    }
                    else if(d == 4){
                        day = "Kamis";
                    }
                    else if(d == 5){
                        day = "Jumat";
                    }
                    else if(d == 6){
                        day = "Sabtu";
                    }
                    else if(d == 7){
                        day = "Minggu";
                    }
                    else if(d == 0){
                        day = "Minggu";
                    } 
                    //Display bulan dengan teks
                    if(mm == 1){
                        m = "Januari";
                    }
                    else if(mm == 2){
                        m = "Februari";
                    }
                    else if(mm == 3){
                        m = "Maret";
                    }
                    else if(mm == 4){
                        m = "April";
                    }
                    else if(mm == 5){
                        m = "Mei";
                    }
                    else if(mm == 6){
                        m = "Juni";
                    }
                    else if(mm == 7){
                        m = "Juli";
                    }
                    else if(mm == 8){
                        m = "Agustus";
                    }
                    else if(mm == 9){
                        m = "September";
                    }
                    else if(mm == 10){
                        m = "Oktober";
                    } 
                    else if(mm == 11){
                        m = "November";
                    }
                    else if(mm == 12){
                        m = "Desember";
                    }
                    var today = day +', '+ dd + ' ' + m + ' ' + yyyy;
                        document.getElementById('dated').innerHTML = today;
                    }
		showTime();
                </script> </h2>
<style type="text/css">
th {
font-family: 'Nunito', sans-serif;
font-size: .8em;
font-weight: bold;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: 'Nunito', sans-serif;
font-size: .8em;
border: 1px solid #DDD;
}
</style>
<?php
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulan.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Angkasa Pura, Angkasa Pura 1, Angkasa Pura 2, Pegadaian, PNM, Askrindo, Jamkrindo, KAI\"> 1 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman2.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"ASDP, PELNI, Pelindo 1, Pelindo 2, Pelindo 3, Pelindo 4\"> 2 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman3.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Pos Indonesia, BGR, RNI, Jasa Marga, Antara, Bio Farma, ITDC\"> 3 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman4.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"PLN, Pertamina\"> 4 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman5.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Telkom, Inalum\"> 5 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman6.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Pupuk Indonesia, Semen Indonesia, PTPN\"> 6 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman7.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Garuda, Citilink, Bulog, Mandiri\"> 7 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman8.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"BNI, BTN, BRI\"> 8 </button>";
echo "<h2> Nomor halaman dapat di mouse-hover/ditaruh cursor mouse<br> untuk melihat BUMN apa saja yang akan ditampilkan di halaman tersebut </h2>";
?>
</center>
</body>
</html>
