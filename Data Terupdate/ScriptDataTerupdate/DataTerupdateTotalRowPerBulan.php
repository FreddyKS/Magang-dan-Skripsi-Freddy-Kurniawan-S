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
BUMN : Angkasa Pura, Angkasa Pura 1, Angkasa Pura 2, Pegadaian, PNM, Askrindo, Jamkrindo, KAI 
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
     $query = "SELECT 'Angkasa Pura' AS nama_BUMN, 'airport_code' AS nama_tabel , 
 '(tidak ada atribut tanggal)' AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
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
 '' AS Desember_" .$year. ", 
 count(*) AS Total_Row
 FROM " .$database. ".airport_code ac 
UNION ALL
SELECT 'Angkasa Pura 1' AS nama_BUMN, 'dm_passenger_cargo_ap1' AS nama_tabel , 
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
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", 
 count(*) AS Total_Row
FROM " .$database. ".dm_passenger_cargo_ap1 dpca 
UNION ALL
SELECT 'Angkasa Pura 1' AS nama_BUMN, 'dm_kelas_bandara_ap1' AS nama_tabel , 
 CASE
  WHEN max(tgl_updated) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tgl_updated) > CURDATE() THEN CONCAT('(!! tanggal di atribut tgl_updated salah) ',max(tgl_updated))
  ELSE max(tgl_updated) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tgl_updated,6,7)=1 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tgl_updated,6,7)=2 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tgl_updated,6,7)=3 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tgl_updated,6,7)=4 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tgl_updated,6,7)=5 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tgl_updated,6,7)=6 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tgl_updated,6,7)=7 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tgl_updated,6,7)=8 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tgl_updated,6,7)=9 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tgl_updated,6,7)=10 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tgl_updated,6,7)=11 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tgl_updated,6,7)=12 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", 
 count(*) AS Total_Row
FROM " .$database. ".dm_kelas_bandara_ap1 dkba 
UNION ALL
SELECT 'Angkasa Pura 2' AS nama_BUMN, 'dm_passenger_cargo_ap2' AS nama_tabel , 
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
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", 
 count(*) AS Total_Row
FROM " .$database. ".dm_passenger_cargo_ap2
UNION ALL
SELECT 'Angkasa Pura 2' AS nama_BUMN, 'dm_kelas_bandara_ap2' AS nama_tabel , 
 CASE
  WHEN max(tgl_updated) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tgl_updated) > CURDATE() THEN CONCAT('(!! tanggal di atribut tgl_updated salah) ',max(tgl_updated))
  ELSE max(tgl_updated) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tgl_updated,6,7)=1 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tgl_updated,6,7)=2 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tgl_updated,6,7)=3 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tgl_updated,6,7)=4 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tgl_updated,6,7)=5 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tgl_updated,6,7)=6 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tgl_updated,6,7)=7 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tgl_updated,6,7)=8 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tgl_updated,6,7)=9 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tgl_updated,6,7)=10 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tgl_updated,6,7)=11 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tgl_updated,6,7)=12 AND substring(tgl_updated,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", 
 count(*) AS Total_Row
FROM " .$database. ".dm_kelas_bandara_ap2 
UNION ALL
SELECT 'Pegadaian' AS nama_BUMN, 'dm_pertumbuhan_produk_pgadai' AS nama_tabel , 
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
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", 
 count(*) AS Total_Row
FROM " .$database. ".dm_pertumbuhan_produk_pgadai dppp 
UNION ALL
SELECT 'Pegadaian' AS nama_BUMN, 'umkm_pegadaian' AS nama_tabel , 
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
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", 
 count(*) AS Total_Row
FROM " .$database. ".umkm_pegadaian up 
UNION ALL
SELECT 'Pegadaian' AS nama_BUMN, 'umkm_pegadaian_proyeksi' AS nama_tabel , 
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
 count(case when bulan='Mei' AND tahun=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when bulan='Jun' AND tahun=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when bulan='Jul' AND tahun=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when bulan='Aug' AND tahun=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when bulan='Sep' AND tahun=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when bulan='Okt' AND tahun=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when bulan='Nov' AND tahun=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when bulan='Des' AND tahun=" .$year. " then 1 else null end) AS Desember_" .$year. ", 
 count(*) AS Total_Row 
 FROM " .$database. ".umkm_pegadaian_proyeksi 
 WHERE tahun=(SELECT max(tahun) FROM " .$database. ".umkm_pegadaian_proyeksi)
UNION ALL
SELECT 'PNM' AS nama_BUMN, 'dm_produk_pnm' AS nama_tabel ,  
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
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", 
 count(*) AS Total_Row
 FROM " .$database. ".dm_produk_pnm
UNION ALL
SELECT 'PNM' AS nama_BUMN, 'umkm_pnm' AS nama_tabel ,  
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
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", 
 count(*) AS Total_Row
 FROM " .$database. ".umkm_pnm
UNION ALL
SELECT 'PNM' AS nama_BUMN, 'umkm_pnm_proyeksi' AS nama_tabel , 
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
 count(case when bulan='Mei' AND tahun=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when bulan='Jun' AND tahun=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when bulan='Jul' AND tahun=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when bulan='Aug' AND tahun=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when bulan='Sep' AND tahun=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when bulan='Okt' AND tahun=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when bulan='Nov' AND tahun=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when bulan='Des' AND tahun=" .$year. " then 1 else null end) AS Desember_" .$year. ", 
 count(*) AS Total_Row 
 FROM " .$database. ".umkm_pnm_proyeksi 
 WHERE tahun=(SELECT max(tahun) FROM " .$database. ".umkm_pnm_proyeksi)
UNION ALL
SELECT 'Askrindo' AS nama_BUMN, 'dm_pen_kur_askrindo' AS nama_tabel ,  
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
 FROM " .$database. ".dm_pen_kur_askrindo
UNION ALL
SELECT 'Askrindo' AS nama_BUMN, 'dm_produk_askrindo' AS nama_tabel ,  
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
 FROM " .$database. ".dm_produk_askrindo
UNION ALL
SELECT 'Jamkrindo' AS nama_BUMN, 'dm_komersil_jamkrindo' AS nama_tabel ,  
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
 FROM " .$database. ".dm_komersil_jamkrindo
UNION ALL
SELECT 'Jamkrindo' AS nama_BUMN, 'dm_kur_pen_jamkrindo' AS nama_tabel ,  
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
 FROM " .$database. ".dm_kur_pen_jamkrindo
UNION ALL
SELECT 'Jamkrindo' AS nama_BUMN, 'dm_pen_kur_jamkrindo' AS nama_tabel ,  
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
 FROM " .$database. ".dm_pen_kur_jamkrindo
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dash_kai' AS nama_tabel ,   
 CASE
  WHEN max(bulan_tahun) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(bulan_tahun),5,8) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di bulan_tahun salah) ',max(bulan_tahun))
  WHEN SUBSTRING(max(bulan_tahun),1,3) > MONTH(CURDATE()) AND SUBSTRING(max(bulan_tahun),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di bulan_tahun salah) ',max(bulan_tahun))
  ELSE max(bulan_tahun) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when substring(bulan_tahun,1,3)='Jan' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(bulan_tahun,1,3)='Feb' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(bulan_tahun,1,3)='Mar' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(bulan_tahun,1,3)='Apr' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(bulan_tahun,1,3)='May' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(bulan_tahun,1,3)='Jun' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(bulan_tahun,1,3)='Jul' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(bulan_tahun,1,3)='Aug' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(bulan_tahun,1,3)='Sep' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(bulan_tahun,1,3)='Okt' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(bulan_tahun,1,3)='Nov' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(bulan_tahun,1,3)='Des' AND substring(bulan_tahun,5,8)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dash_kai
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dash_kai1' AS nama_tabel ,   
 CASE
  WHEN max(y_m) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(y_m),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di y_m salah) ',max(y_m))
  WHEN SUBSTRING(max(y_m),6,7) > MONTH(CURDATE()) AND SUBSTRING(max(y_m),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut y_m salah) ',max(y_m))
  ELSE max(y_m) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when substring(y_m,6,7)=1 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(y_m,6,7)=2 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(y_m,6,7)=3 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(y_m,6,7)=4 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(y_m,6,7)=5 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(y_m,6,7)=6 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(y_m,6,7)=7 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(y_m,6,7)=8 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(y_m,6,7)=9 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(y_m,6,7)=10 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(y_m,6,7)=11 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(y_m,6,7)=12 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dash_kai1
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dash_kai2' AS nama_tabel ,   
 CASE
  WHEN max(y_m) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(y_m),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di y_m salah) ',max(y_m))
  WHEN SUBSTRING(max(y_m),6,7) > MONTH(CURDATE()) AND SUBSTRING(max(y_m),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut y_m salah) ',max(y_m))
  ELSE max(y_m) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when substring(y_m,6,7)=1 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(y_m,6,7)=2 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(y_m,6,7)=3 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(y_m,6,7)=4 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(y_m,6,7)=5 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(y_m,6,7)=6 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(y_m,6,7)=7 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(y_m,6,7)=8 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(y_m,6,7)=9 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(y_m,6,7)=10 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(y_m,6,7)=11 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(y_m,6,7)=12 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dash_kai2
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dash_kai3' AS nama_tabel ,   
 CASE
  WHEN max(y_m) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(y_m),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di y_m salah) ',max(y_m))
  WHEN SUBSTRING(max(y_m),6,7) > MONTH(CURDATE()) AND SUBSTRING(max(y_m),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut y_m salah) ',max(y_m))
  ELSE max(y_m) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when substring(y_m,6,7)=1 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(y_m,6,7)=2 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(y_m,6,7)=3 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(y_m,6,7)=4 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(y_m,6,7)=5 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(y_m,6,7)=6 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(y_m,6,7)=7 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(y_m,6,7)=8 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(y_m,6,7)=9 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(y_m,6,7)=10 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(y_m,6,7)=11 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(y_m,6,7)=12 AND substring(y_m,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS Total_Row
 FROM " .$database. ".dash_kai3
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dm_pengiriman_barang_kai' AS nama_tabel ,  
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
 FROM " .$database. ".dm_pengiriman_barang_kai
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dm_penumpang_kai' AS nama_tabel ,  
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
 FROM " .$database. ".dm_penumpang_kai";
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
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulan.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" disabled> 1 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman2.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"ASDP, PELNI, Pelindo 1, Pelindo 2, Pelindo 3, Pelindo 4\"> 2 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman3.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Pos Indonesia, BGR, RNI, Jasa Marga, Antara, Bio Farma, ITDC\"> 3 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman4.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"PLN, Pertamina\"> 4 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman5.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Telkom, Inalum\"> 5 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman6.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Pupuk Indonesia, Semen Indonesia, PTPN\"> 6 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman7.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"Garuda, Citilink, Bulog, Mandiri\"> 7 </button>";
echo "<button onclick=\"location.href='/ScriptDataTerupdate/DataTerupdateTotalRowPerBulanHalaman8.php?year=".$year."&database=".$database."&password=".$_GET['password']."&host=".$host."&user=".$user."&port=".$port."&token=".$_GET['token']."'\" title=\"BNI, BTN, BRI\"> 8 </button>";
$mysqli -> close();
?>
</center>
</body>
</html>
