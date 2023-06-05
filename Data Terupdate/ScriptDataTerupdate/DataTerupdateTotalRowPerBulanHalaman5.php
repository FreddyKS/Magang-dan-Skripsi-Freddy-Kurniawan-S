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
BUMN : Telkom, Inalum 
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
     $mysqli = new mysqli($HOST, $user, $password);
     if ($mysqli -> connect_errno) {
        echo "Gagal Menyambungkan ke MySQL, Error : " . $mysqli -> connect_error;
        exit();
     }
     $query = "SELECT 'Telkom' AS nama_BUMN, 'data_arpu_jenis_layanan_telkomsel' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(tahun),'-',max(bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan=1 AND tahun=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when bulan=2 AND tahun=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when bulan=3 AND tahun=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when bulan=4 AND tahun=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when bulan=5 AND tahun=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when bulan=6 AND tahun=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when bulan=7 AND tahun=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when bulan=8 AND tahun=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when bulan=9 AND tahun=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when bulan=10 AND tahun=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when bulan=11 AND tahun=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when bulan=12 AND tahun=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row 
 FROM " .$database. ".data_arpu_jenis_layanan_telkomsel WHERE tahun=(SELECT max(tahun) FROM " .$database. ".data_arpu_jenis_layanan_telkomsel)
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'data_arpu_jenis_pembayaran_telkomsel' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(tahun),'-',max(bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan=1 AND tahun=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when bulan=2 AND tahun=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when bulan=3 AND tahun=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when bulan=4 AND tahun=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when bulan=5 AND tahun=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when bulan=6 AND tahun=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when bulan=7 AND tahun=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when bulan=8 AND tahun=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when bulan=9 AND tahun=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when bulan=10 AND tahun=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when bulan=11 AND tahun=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when bulan=12 AND tahun=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row 
 FROM " .$database. ".data_arpu_jenis_pembayaran_telkomsel WHERE tahun=(SELECT max(tahun) FROM " .$database. ".data_arpu_jenis_pembayaran_telkomsel)
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkom' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dm_arpu_telkom
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkom_bck' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dm_arpu_telkom_bck
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkom_test' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dm_arpu_telkom_test
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkomsel' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dm_arpu_telkomsel
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkomsel_jenis_layanan' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dm_arpu_telkomsel_jenis_layanan
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkomsel_jenis_pembayaran' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dm_arpu_telkomsel_jenis_pembayaran
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'telkom_1' AS nama_tabel ,
 CASE
  WHEN max(Date) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(Date)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_" .$year. ", 
 '' AS Februari_" .$year. ",
 '' AS Maret_" .$year. ",
 '' AS April_" .$year. ",
 '' AS Mei_" .$year. ",
 '' AS Juni_" .$year. ",
 '' AS Juli_" .$year. ",
 '' AS Agustus_" .$year. ",
 '' AS September_" .$year. ",
 '' AS Oktober_" .$year. ",
 '' AS November_" .$year. ",
 '' AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".telkom_1
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'telkom_2' AS nama_tabel ,  
 CASE
  WHEN max(date) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(date)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_" .$year. ", 
 '' AS Februari_" .$year. ",
 '' AS Maret_" .$year. ",
 '' AS April_" .$year. ",
 '' AS Mei_" .$year. ",
 '' AS Juni_" .$year. ",
 '' AS Juli_" .$year. ",
 '' AS Agustus_" .$year. ",
 '' AS September_" .$year. ",
 '' AS Oktober_" .$year. ",
 '' AS November_" .$year. ",
 '' AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".telkom_2
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'telkom_3' AS nama_tabel ,
 CASE
  WHEN max(date) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(date)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_" .$year. ", 
 '' AS Februari_" .$year. ",
 '' AS Maret_" .$year. ",
 '' AS April_" .$year. ",
 '' AS Mei_" .$year. ",
 '' AS Juni_" .$year. ",
 '' AS Juli_" .$year. ",
 '' AS Agustus_" .$year. ",
 '' AS September_" .$year. ",
 '' AS Oktober_" .$year. ",
 '' AS November_" .$year. ",
 '' AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".telkom_3
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'int_arpu' AS nama_tabel ,
CASE
  WHEN max(PERIODE) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(PERIODE),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut PERIODE salah) ',max(PERIODE))
  WHEN SUBSTRING(max(PERIODE),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(PERIODE),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut PERIODE salah) ',max(PERIODE))
  ELSE max(PERIODE) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(PERIODE,5,6)=1 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(PERIODE,5,6)=2 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(PERIODE,5,6)=3 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(PERIODE,5,6)=4 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(PERIODE,5,6)=5 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(PERIODE,5,6)=6 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(PERIODE,5,6)=7 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(PERIODE,5,6)=8 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(PERIODE,5,6)=9 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(PERIODE,5,6)=10 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(PERIODE,5,6)=11 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(PERIODE,5,6)=12 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".int_arpu
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'int_arpu_cro' AS nama_tabel ,
CASE
  WHEN max(PERIODE) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(PERIODE),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut PERIODE salah) ',max(PERIODE))
  WHEN SUBSTRING(max(PERIODE),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(PERIODE),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut PERIODE salah) ',max(PERIODE))
  ELSE max(PERIODE) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(PERIODE,5,6)=1 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(PERIODE,5,6)=2 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(PERIODE,5,6)=3 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(PERIODE,5,6)=4 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(PERIODE,5,6)=5 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(PERIODE,5,6)=6 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(PERIODE,5,6)=7 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(PERIODE,5,6)=8 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(PERIODE,5,6)=9 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(PERIODE,5,6)=10 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(PERIODE,5,6)=11 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(PERIODE,5,6)=12 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".int_arpu_cro
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'int_arpu_kota' AS nama_tabel ,
CASE
  WHEN max(PERIODE) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(PERIODE),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut PERIODE salah) ',max(PERIODE))
  WHEN SUBSTRING(max(PERIODE),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(PERIODE),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut PERIODE salah) ',max(PERIODE))
  ELSE max(PERIODE) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(PERIODE,5,6)=1 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(PERIODE,5,6)=2 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(PERIODE,5,6)=3 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(PERIODE,5,6)=4 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(PERIODE,5,6)=5 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(PERIODE,5,6)=6 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(PERIODE,5,6)=7 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(PERIODE,5,6)=8 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(PERIODE,5,6)=9 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(PERIODE,5,6)=10 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(PERIODE,5,6)=11 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(PERIODE,5,6)=12 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".int_arpu_kota
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'int_arpu_reg' AS nama_tabel ,
CASE
  WHEN max(PERIODE) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(PERIODE),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut PERIODE salah) ',max(PERIODE))
  WHEN SUBSTRING(max(PERIODE),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(PERIODE),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut PERIODE salah) ',max(PERIODE))
  ELSE max(PERIODE) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(PERIODE,5,6)=1 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(PERIODE,5,6)=2 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(PERIODE,5,6)=3 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(PERIODE,5,6)=4 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(PERIODE,5,6)=5 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(PERIODE,5,6)=6 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(PERIODE,5,6)=7 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(PERIODE,5,6)=8 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(PERIODE,5,6)=9 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(PERIODE,5,6)=10 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(PERIODE,5,6)=11 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(PERIODE,5,6)=12 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".int_arpu_reg
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpurev_nasional_telkomsel' AS nama_tabel ,
CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(tanggal),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut tanggal salah) ',max(tanggal))
  WHEN SUBSTRING(max(tanggal),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(tanggal),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,5,6)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,5,6)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,5,6)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,5,6)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,5,6)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,5,6)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,5,6)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,5,6)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,5,6)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,5,6)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,5,6)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,5,6)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dm_arpurev_nasional_telkomsel
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpurev_regional_telkomsel' AS nama_tabel ,
CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(tanggal),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut tanggal salah) ',max(tanggal))
  WHEN SUBSTRING(max(tanggal),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(tanggal),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,5,6)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,5,6)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,5,6)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,5,6)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,5,6)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,5,6)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,5,6)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,5,6)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,5,6)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,5,6)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,5,6)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,5,6)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dm_arpurev_regional_telkomsel
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'int_arpu_regional' AS nama_tabel ,
CASE
  WHEN max(PERIODE) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(PERIODE),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut PERIODE salah) ',max(PERIODE))
  WHEN SUBSTRING(max(PERIODE),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(PERIODE),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut PERIODE salah) ',max(PERIODE))
  ELSE max(PERIODE) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(PERIODE,5,6)=1 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(PERIODE,5,6)=2 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(PERIODE,5,6)=3 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(PERIODE,5,6)=4 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(PERIODE,5,6)=5 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(PERIODE,5,6)=6 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(PERIODE,5,6)=7 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(PERIODE,5,6)=8 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(PERIODE,5,6)=9 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(PERIODE,5,6)=10 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(PERIODE,5,6)=11 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(PERIODE,5,6)=12 AND substring(PERIODE,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".int_arpu_regional
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'customer_inalum' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when bulan='Februari' AND tahun=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when bulan='Maret' AND tahun=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when bulan='April' AND tahun=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when bulan='Mei' AND tahun=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when bulan='Juni' AND tahun=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when bulan='Juli' AND tahun=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when bulan='Agustus' AND tahun=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when bulan='September' AND tahun=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when bulan='Oktober' AND tahun=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when bulan='November' AND tahun=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when bulan='Desember' AND tahun=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".customer_inalum WHERE tahun=(SELECT max(tahun) FROM " .$database. ".customer_inalum)
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'data_LME_inalum' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".data_LME_inalum
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'data_komoditi_inalum' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Jan' AND tahun=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when bulan='Feb' AND tahun=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when bulan='Mar' AND tahun=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when bulan='Apr' AND tahun=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when bulan='May' AND tahun=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when bulan='Jun' AND tahun=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when bulan='Jul' AND tahun=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when bulan='Aug' AND tahun=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when bulan='Sep' AND tahun=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when bulan='Oct' AND tahun=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when bulan='Nov' AND tahun=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when bulan='Dec' AND tahun=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".data_komoditi_inalum WHERE tahun=(SELECT max(tahun) FROM " .$database. ".data_komoditi_inalum)
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'data_sales_inalum' AS nama_tabel ,  
 CASE
  WHEN max(end) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(end) > CURDATE() THEN CONCAT('(!! tanggal di atribut end salah) ',max(end))
  ELSE max(end) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(end,6,7)=1 AND substring(end,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(end,6,7)=2 AND substring(end,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(end,6,7)=3 AND substring(end,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(end,6,7)=4 AND substring(end,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(end,6,7)=5 AND substring(end,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(end,6,7)=6 AND substring(end,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(end,6,7)=7 AND substring(end,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(end,6,7)=8 AND substring(end,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(end,6,7)=9 AND substring(end,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(end,6,7)=10 AND substring(end,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(end,6,7)=11 AND substring(end,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(end,6,7)=12 AND substring(end,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".data_sales_inalum
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'dm_commodity_inalum' AS nama_tabel , 
 CASE
  WHEN max(periode) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(periode) > CURDATE() THEN CONCAT('(!! tanggal di atribut periode salah) ',max(periode))
  ELSE max(periode) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(periode,6,7)=1 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(periode,6,7)=2 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(periode,6,7)=3 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(periode,6,7)=4 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(periode,6,7)=5 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(periode,6,7)=6 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(periode,6,7)=7 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(periode,6,7)=8 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(periode,6,7)=9 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(periode,6,7)=10 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(periode,6,7)=11 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(periode,6,7)=12 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dm_commodity_inalum
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'dm_lme_inalum' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dm_lme_inalum
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'dm_sales_inalum' AS nama_tabel , 
 CASE
  WHEN max(end_date) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(end_date) > CURDATE() THEN CONCAT('(!! tanggal di atribut end_date salah) ',max(end_date))
  ELSE max(end_date) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(end_date,6,7)=1 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(end_date,6,7)=2 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(end_date,6,7)=3 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(end_date,6,7)=4 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(end_date,6,7)=5 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(end_date,6,7)=6 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(end_date,6,7)=7 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(end_date,6,7)=8 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(end_date,6,7)=9 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(end_date,6,7)=10 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(end_date,6,7)=11 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(end_date,6,7)=12 AND substring(end_date,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dm_sales_inalum
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'penjualan_by_product_inalum' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when bulan='Februari' AND tahun=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when bulan='Maret' AND tahun=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when bulan='April' AND tahun=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when bulan='Mei' AND tahun=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when bulan='Juni' AND tahun=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when bulan='Juli' AND tahun=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when bulan='Agustus' AND tahun=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when bulan='September' AND tahun=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when bulan='Oktober' AND tahun=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when bulan='November' AND tahun=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when bulan='Desember' AND tahun=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".penjualan_by_product_inalum WHERE tahun=(SELECT max(tahun) FROM " .$database. ".penjualan_by_product_inalum)
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'penjualan_by_prov_inalum' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when bulan='Februari' AND tahun=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when bulan='Maret' AND tahun=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when bulan='April' AND tahun=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when bulan='Mei' AND tahun=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when bulan='Juni' AND tahun=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when bulan='Juli' AND tahun=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when bulan='Agustus' AND tahun=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when bulan='September' AND tahun=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when bulan='Oktober' AND tahun=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when bulan='November' AND tahun=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when bulan='Desember' AND tahun=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".penjualan_by_prov_inalum WHERE tahun=(SELECT max(tahun) FROM " .$database. ".penjualan_by_prov_inalum)
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'penjualan_inalum' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan=1 AND tahun=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when bulan=2 AND tahun=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when bulan=3 AND tahun=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when bulan=4 AND tahun=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when bulan=5 AND tahun=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when bulan=6 AND tahun=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when bulan=7 AND tahun=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when bulan=8 AND tahun=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when bulan=9 AND tahun=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when bulan=10 AND tahun=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when bulan=11 AND tahun=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when bulan=12 AND tahun=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".penjualan_inalum WHERE tahun=(SELECT max(tahun) FROM " .$database. ".penjualan_inalum)";
if ($result = $mysqli -> query($query)) {
 echo '<div style="overflow-x:auto;">';
 echo "<table>";
 echo "<tr><th> Nama BUMN </th><th> Nama Tabel </th><th> Data Terupdate </th><th> Tanggal Pengecekan </th><th> Januari " .$year. " </th><th> Februari " .$year. " </th><th> Maret " .$year. " </th><th> April " .$year. " </th><th> Mei " .$year. " </th><th> Juni " .$year. " </th><th> Juli " .$year. " </th><th> Agustus " .$year. " </th><th> September " .$year. " </th><th> Oktober " .$year. " </th><th> November " .$year. " </th><th> Desember " .$year. " </th><th> Jumlah Row tabel Keseluruhan </th></tr>";
 while( $row = $result -> fetch_array() )
    {
      //echo $row['nama_BUMN'] . " " . $row['nama_tabel'] . " " . $row['tanggal_terupdate'] . " " . $row['jumlah_row_tabel'];
      echo "<tr><td>" . $row['nama_BUMN'] . "</td><td>" . $row['nama_tabel'] . "</td><td>" . $row['data_terupdate'] . "</td><td>" . $row['tanggal_pengecekan'] . "</td><td>" . $row['Januari_' .$year] . "</td><td>" . $row['Februari_' .$year] . "</td><td>" . $row['Maret_' .$year] . "</td><td>" . $row['April_' .$year] . "</td><td>" . $row['Mei_' .$year] . "</td><td>" . $row['Juni_' .$year] . "</td><td>" . $row['Juli_' .$year] . "</td><td>" . $row['Agustus_' .$year] . "</td><td>" . $row['September_' .$year] . "</td><td>" . $row['Oktober_' .$year] . "</td><td>" . $row['November_' .$year] . "</td><td>" . $row['Desember_' .$year] . "</td><td>" . $row['Total_Row'] . "</td></tr>";
      //echo "<br />";
    }
 echo "</table>";
 echo "</div>";
}
else {
   echo "!!Syntax SQL Gagal dieksekusi <br> !!";
   echo $mysqli -> error."<br>";
}
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulan.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Angkasa Pura, Angkasa Pura 1, Angkasa Pura 2, Pegadaian, PNM, Askrindo, Jamkrindo, KAI\"> 1 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman2.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"ASDP, PELNI, Pelindo 1, Pelindo 2, Pelindo 3, Pelindo 4\"> 2 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman3.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Pos Indonesia, BGR, RNI, Jasa Marga, Antara, Bio Farma, ITDC\"> 3 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman4.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"PLN, Pertamina\"> 4 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman5.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" disabled> 5 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman6.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Pupuk Indonesia, Semen Indonesia, PTPN\"> 6 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman7.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Garuda, Citilink, Bulog, Mandiri\"> 7 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman8.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"BNI, BTN, BRI\"> 8 </button>";
$mysqli -> close();
?>
</center>
</body>
</html>
