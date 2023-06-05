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
        <title> Tanggal, Total Row Per Bulan dan Keseluruhan Tahun 2020</title>
	<center>
	<a href="/../HomepageDataTerupdate.php"> <img class="Logo" src="/../TelkomIndonesia.jpg" style="height:200px;width:310px"> </a>

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
        </style>
<h2> Data Terupdate, Total Row Perbulan dan Keseluruhan Tahun 2020 per <div id="dated"></div> 
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
     $HOST = 'pen-prod.udata.id:14113';
     $user = 'de';
     $password = 'a37ec703b88f';
     $mysqli = new mysqli($HOST, $user, $password);
     if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL : " . $mysqli -> connect_error;
        exit();
     }
     $query = "
SELECT 'Angkasa Pura' AS nama_BUMN, 'airport_code' AS nama_tabel , 
 '(tidak ada atribut tanggal)' AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, 
 count(*) AS Total_Row
 FROM pen_bumn.airport_code ac 
UNION ALL
SELECT 'Angkasa Pura 1' AS nama_BUMN, 'dm_passenger_cargo_ap1' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, 
 count(*) AS Total_Row
FROM pen_bumn.dm_passenger_cargo_ap1 dpca 
UNION ALL
SELECT 'Angkasa Pura 1' AS nama_BUMN, 'dm_kelas_bandara_ap1' AS nama_tabel , 
 CASE
  WHEN max(tgl_updated) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tgl_updated) > CURDATE() THEN CONCAT('(!! tanggal di atribut tgl_updated salah) ',max(tgl_updated))
  ELSE max(tgl_updated) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tgl_updated,6,7)=1 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tgl_updated,6,7)=2 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tgl_updated,6,7)=3 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tgl_updated,6,7)=4 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tgl_updated,6,7)=5 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tgl_updated,6,7)=6 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tgl_updated,6,7)=7 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tgl_updated,6,7)=8 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tgl_updated,6,7)=9 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tgl_updated,6,7)=10 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tgl_updated,6,7)=11 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tgl_updated,6,7)=12 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Desember_2020, 
 count(*) AS Total_Row
FROM pen_bumn.dm_kelas_bandara_ap1 dkba 
UNION ALL
SELECT 'Angkasa Pura 2' AS nama_BUMN, 'dm_passenger_cargo_ap2' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, 
 count(*) AS Total_Row
FROM pen_bumn.dm_passenger_cargo_ap2
UNION ALL
SELECT 'Angkasa Pura 2' AS nama_BUMN, 'dm_kelas_bandara_ap2' AS nama_tabel , 
 CASE
  WHEN max(tgl_updated) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tgl_updated) > CURDATE() THEN CONCAT('(!! tanggal di atribut tgl_updated salah) ',max(tgl_updated))
  ELSE max(tgl_updated) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tgl_updated,6,7)=1 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tgl_updated,6,7)=2 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tgl_updated,6,7)=3 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tgl_updated,6,7)=4 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tgl_updated,6,7)=5 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tgl_updated,6,7)=6 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tgl_updated,6,7)=7 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tgl_updated,6,7)=8 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tgl_updated,6,7)=9 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tgl_updated,6,7)=10 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tgl_updated,6,7)=11 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tgl_updated,6,7)=12 AND substring(tgl_updated,1,4)=2020 then 1 else null end) AS Desember_2020, 
 count(*) AS Total_Row
FROM pen_bumn.dm_kelas_bandara_ap2 
UNION ALL
SELECT 'Pegadaian' AS nama_BUMN, 'dm_pertumbuhan_produk_pgadai' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, 
 count(*) AS Total_Row
FROM pen_bumn.dm_pertumbuhan_produk_pgadai dppp 
UNION ALL
SELECT 'Pegadaian' AS nama_BUMN, 'umkm_pegadaian' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, 
 count(*) AS Total_Row
FROM pen_bumn.umkm_pegadaian up 
UNION ALL
SELECT 'Pegadaian' AS nama_BUMN, 'umkm_pegadaian_proyeksi' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Jan' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Feb' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Mar' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='Apr' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Jun' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Jul' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Aug' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='Sep' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Okt' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='Nov' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Des' AND tahun=2020 then 1 else null end) AS Desember_2020, 
 count(*) AS Total_Row 
 FROM pen_bumn.umkm_pegadaian_proyeksi 
 WHERE tahun=(SELECT max(tahun) FROM pen_bumn.umkm_pegadaian_proyeksi)
UNION ALL
SELECT 'PNM' AS nama_BUMN, 'dm_produk_pnm' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, 
 count(*) AS Total_Row
 FROM pen_bumn.dm_produk_pnm
UNION ALL
SELECT 'PNM' AS nama_BUMN, 'umkm_pnm' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, 
 count(*) AS Total_Row
 FROM pen_bumn.umkm_pnm
UNION ALL
SELECT 'PNM' AS nama_BUMN, 'umkm_pnm_proyeksi' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Jan' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Feb' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Mar' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='Apr' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Jun' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Jul' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Aug' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='Sep' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Okt' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='Nov' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Des' AND tahun=2020 then 1 else null end) AS Desember_2020, 
 count(*) AS Total_Row 
 FROM pen_bumn.umkm_pnm_proyeksi 
 WHERE tahun=(SELECT max(tahun) FROM pen_bumn.umkm_pnm_proyeksi)
UNION ALL
SELECT 'Askrindo' AS nama_BUMN, 'dm_pen_kur_askrindo' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pen_kur_askrindo
UNION ALL
SELECT 'Askrindo' AS nama_BUMN, 'dm_produk_askrindo' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_produk_askrindo
UNION ALL
SELECT 'Jamkrindo' AS nama_BUMN, 'dm_komersil_jamkrindo' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_komersil_jamkrindo
UNION ALL
SELECT 'Jamkrindo' AS nama_BUMN, 'dm_kur_pen_jamkrindo' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_kur_pen_jamkrindo
UNION ALL
SELECT 'Jamkrindo' AS nama_BUMN, 'dm_pen_kur_jamkrindo' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pen_kur_jamkrindo
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dash_kai' AS nama_tabel ,   
 CASE
  WHEN max(bulan_tahun) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(bulan_tahun),5,8) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di bulan_tahun salah) ',max(bulan_tahun))
  WHEN SUBSTRING(max(bulan_tahun),1,3) > MONTH(CURDATE()) AND SUBSTRING(max(bulan_tahun),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di bulan_tahun salah) ',max(bulan_tahun))
  ELSE max(bulan_tahun) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when substring(bulan_tahun,1,3)='Jan' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(bulan_tahun,1,3)='Feb' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(bulan_tahun,1,3)='Mar' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(bulan_tahun,1,3)='Apr' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS April_2020,
 count(case when substring(bulan_tahun,1,3)='May' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(bulan_tahun,1,3)='Jun' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(bulan_tahun,1,3)='Jul' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(bulan_tahun,1,3)='Aug' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(bulan_tahun,1,3)='Sep' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS September_2020,
 count(case when substring(bulan_tahun,1,3)='Okt' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(bulan_tahun,1,3)='Nov' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS November_2020,
 count(case when substring(bulan_tahun,1,3)='Des' AND substring(bulan_tahun,5,8)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dash_kai
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dash_kai1' AS nama_tabel ,   
 CASE
  WHEN max(y_m) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(y_m),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di y_m salah) ',max(y_m))
  WHEN SUBSTRING(max(y_m),6,7) > MONTH(CURDATE()) AND SUBSTRING(max(y_m),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut y_m salah) ',max(y_m))
  ELSE max(y_m) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when substring(y_m,6,7)=1 AND substring(y_m,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(y_m,6,7)=2 AND substring(y_m,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(y_m,6,7)=3 AND substring(y_m,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(y_m,6,7)=4 AND substring(y_m,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(y_m,6,7)=5 AND substring(y_m,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(y_m,6,7)=6 AND substring(y_m,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(y_m,6,7)=7 AND substring(y_m,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(y_m,6,7)=8 AND substring(y_m,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(y_m,6,7)=9 AND substring(y_m,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(y_m,6,7)=10 AND substring(y_m,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(y_m,6,7)=11 AND substring(y_m,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(y_m,6,7)=12 AND substring(y_m,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dash_kai1
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dash_kai2' AS nama_tabel ,   
 CASE
  WHEN max(y_m) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(y_m),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di y_m salah) ',max(y_m))
  WHEN SUBSTRING(max(y_m),6,7) > MONTH(CURDATE()) AND SUBSTRING(max(y_m),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut y_m salah) ',max(y_m))
  ELSE max(y_m) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when substring(y_m,6,7)=1 AND substring(y_m,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(y_m,6,7)=2 AND substring(y_m,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(y_m,6,7)=3 AND substring(y_m,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(y_m,6,7)=4 AND substring(y_m,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(y_m,6,7)=5 AND substring(y_m,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(y_m,6,7)=6 AND substring(y_m,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(y_m,6,7)=7 AND substring(y_m,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(y_m,6,7)=8 AND substring(y_m,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(y_m,6,7)=9 AND substring(y_m,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(y_m,6,7)=10 AND substring(y_m,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(y_m,6,7)=11 AND substring(y_m,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(y_m,6,7)=12 AND substring(y_m,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dash_kai2
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dash_kai3' AS nama_tabel ,   
 CASE
  WHEN max(y_m) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(y_m),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di y_m salah) ',max(y_m))
  WHEN SUBSTRING(max(y_m),6,7) > MONTH(CURDATE()) AND SUBSTRING(max(y_m),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut y_m salah) ',max(y_m))
  ELSE max(y_m) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when substring(y_m,6,7)=1 AND substring(y_m,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(y_m,6,7)=2 AND substring(y_m,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(y_m,6,7)=3 AND substring(y_m,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(y_m,6,7)=4 AND substring(y_m,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(y_m,6,7)=5 AND substring(y_m,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(y_m,6,7)=6 AND substring(y_m,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(y_m,6,7)=7 AND substring(y_m,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(y_m,6,7)=8 AND substring(y_m,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(y_m,6,7)=9 AND substring(y_m,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(y_m,6,7)=10 AND substring(y_m,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(y_m,6,7)=11 AND substring(y_m,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(y_m,6,7)=12 AND substring(y_m,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dash_kai3
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dm_pengiriman_barang_kai' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pengiriman_barang_kai
UNION ALL
SELECT 'KAI' AS nama_BUMN, 'dm_penumpang_kai' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_penumpang_kai
UNION ALL
SELECT 'ASDP' AS nama_BUMN, 'dm_pergerakan_kapal_asdp' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_kapal_asdp
UNION ALL
SELECT 'PELNI' AS nama_BUMN, 'dm_pergerakan_kapal_penumpang_pelni' AS nama_tabel ,  
 CASE
  WHEN max(tanggal_origin) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal_origin) > CURDATE() THEN CONCAT('(!! tanggal di atribut tanggal_origin salah) ',max(tanggal_origin))
  ELSE max(tanggal_origin) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal_origin,6,7)=1 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal_origin,6,7)=2 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal_origin,6,7)=3 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal_origin,6,7)=4 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal_origin,6,7)=5 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal_origin,6,7)=6 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal_origin,6,7)=7 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal_origin,6,7)=8 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal_origin,6,7)=9 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal_origin,6,7)=10 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal_origin,6,7)=11 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal_origin,6,7)=12 AND substring(tanggal_origin,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_kapal_penumpang_pelni
UNION ALL
SELECT 'PELNI' AS nama_BUMN, 'dm_pergerakan_tol_laut_pelni' AS nama_tabel ,  
 CASE
  WHEN max(tanggal_berangkat) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal_berangkat) > CURDATE() THEN CONCAT('(!! tanggal di atribut tanggal_berangkat salah) ',max(tanggal_berangkat))
  ELSE max(tanggal_berangkat) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal_berangkat,6,7)=1 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal_berangkat,6,7)=2 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal_berangkat,6,7)=3 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal_berangkat,6,7)=4 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal_berangkat,6,7)=5 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal_berangkat,6,7)=6 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal_berangkat,6,7)=7 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal_berangkat,6,7)=8 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal_berangkat,6,7)=9 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal_berangkat,6,7)=10 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal_berangkat,6,7)=11 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal_berangkat,6,7)=12 AND substring(tanggal_berangkat,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_tol_laut_pelni
UNION ALL
SELECT 'Pelindo 1' AS nama_BUMN, 'dm_pergerakan_kapal_pelindo1' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_kapal_pelindo1
UNION ALL
SELECT 'Pelindo 1' AS nama_BUMN, 'dm_pergerakan_nonpetikemas_pelindo1' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_nonpetikemas_pelindo1
UNION ALL
SELECT 'Pelindo 1' AS nama_BUMN, 'dm_pergerakan_penumpanng_pelindo1' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_penumpanng_pelindo1
UNION ALL
SELECT 'Pelindo 1' AS nama_BUMN, 'dm_pergerakan_petikemas_pelindo1' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_petikemas_pelindo1
UNION ALL
SELECT 'Pelindo 2' AS nama_BUMN, 'dm_pergerakan_kapal_pelindo2' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_kapal_pelindo2
UNION ALL
SELECT 'Pelindo 2' AS nama_BUMN, 'dm_pergerakan_nonpetikemas_pelindo2' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_nonpetikemas_pelindo2
UNION ALL
SELECT 'Pelindo 2' AS nama_BUMN, 'dm_pergerakan_penumpanng_pelindo2' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_penumpanng_pelindo2
UNION ALL
SELECT 'Pelindo 2' AS nama_BUMN, 'dm_pergerakan_petikemas_pelindo2' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_petikemas_pelindo2
UNION ALL
SELECT 'Pelindo 3' AS nama_BUMN, 'dm_pergerakan_kapal_pelindo3' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_kapal_pelindo3
UNION ALL
SELECT 'Pelindo 3' AS nama_BUMN, 'dm_pergerakan_nonpetikemas_pelindo3' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_nonpetikemas_pelindo3
UNION ALL
SELECT 'Pelindo 3' AS nama_BUMN, 'dm_pergerakan_penumpanng_pelindo3' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_penumpanng_pelindo3
UNION ALL
SELECT 'Pelindo 3' AS nama_BUMN, 'dm_pergerakan_petikemas_pelindo3' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_petikemas_pelindo3
UNION ALL
SELECT 'Pelindo 3' AS nama_BUMN, 'dm_pergerakan_kapal_pelindo4' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_kapal_pelindo4
UNION ALL
SELECT 'Pelindo 4' AS nama_BUMN, 'dm_pergerakan_nonpetikemas_pelindo4' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_nonpetikemas_pelindo4
UNION ALL
SELECT 'Pelindo 4' AS nama_BUMN, 'dm_pergerakan_penumpanng_pelindo4' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_penumpanng_pelindo4
UNION ALL
SELECT 'Pelindo 4' AS nama_BUMN, 'dm_pergerakan_petikemas_pelindo4' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pergerakan_petikemas_pelindo4
UNION ALL
SELECT 'Pos Indonesia' AS nama_BUMN, 'dm_penyaluran_bansos_pos' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_penyaluran_bansos_pos
UNION ALL
SELECT 'Pos Indonesia' AS nama_BUMN, 'dm_produksi_pos' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_produksi_pos
UNION ALL
SELECT 'Pos Indonesia' AS nama_BUMN, 'dm_produksi_produk_pos' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_produksi_produk_pos
UNION ALL
SELECT 'BGR' AS nama_BUMN, 'dm_cluster_pangan_bgr' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_cluster_pangan_bgr
UNION ALL
SELECT 'BGR' AS nama_BUMN, 'dm_transaksi_mitra_bgr' AS nama_tabel ,  
 CASE
  WHEN max(tanggal_transaksi) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal_transaksi) > CURDATE() THEN CONCAT('(!! tanggal di atribut tanggal_transaksi salah) ',max(tanggal_transaksi))
  ELSE max(tanggal_transaksi) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal_transaksi,6,7)=1 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal_transaksi,6,7)=2 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal_transaksi,6,7)=3 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal_transaksi,6,7)=4 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal_transaksi,6,7)=5 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal_transaksi,6,7)=6 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal_transaksi,6,7)=7 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal_transaksi,6,7)=8 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal_transaksi,6,7)=9 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal_transaksi,6,7)=10 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal_transaksi,6,7)=11 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal_transaksi,6,7)=12 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_transaksi_mitra_bgr
UNION ALL
SELECT 'BGR' AS nama_BUMN, 'dm_warehouse_bgr' AS nama_tabel , 
 '(tidak ada atribut tanggal)' AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_warehouse_bgr 
UNION ALL
SELECT 'BGR' AS nama_BUMN, 'dm_wo_armada_bgr' AS nama_tabel ,  
 CASE
  WHEN max(tanggal_tiba) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal_tiba) > CURDATE() THEN CONCAT('(!! tanggal di atribut tanggal_tiba salah) ',max(tanggal_tiba))
  ELSE max(tanggal_tiba) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal_tiba,6,7)=1 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal_tiba,6,7)=2 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal_tiba,6,7)=3 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal_tiba,6,7)=4 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal_tiba,6,7)=5 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal_tiba,6,7)=6 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal_tiba,6,7)=7 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal_tiba,6,7)=8 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal_tiba,6,7)=9 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal_tiba,6,7)=10 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal_tiba,6,7)=11 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal_tiba,6,7)=12 AND substring(tanggal_tiba,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_wo_armada_bgr
UNION ALL
SELECT 'RNI' AS nama_BUMN, 'dm_inventory_rni' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_inventory_rni
UNION ALL
SELECT 'RNI' AS nama_BUMN, 'dm_pembelian_rni' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pembelian_rni
UNION ALL
SELECT 'RNI' AS nama_BUMN, 'dm_penjualan_rni' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_penjualan_rni
UNION ALL
SELECT 'Jasa Marga' AS nama_BUMN, 'dm_lalin_jmarga' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_lalin_jmarga
UNION ALL
SELECT 'Antara' AS nama_BUMN, 'dm_berita_antara' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > NOW() THEN CONCAT('(!! tanggal salah)',max(tanggal))
  ELSE max(tanggal)
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_berita_antara
UNION ALL
SELECT 'Antara' AS nama_BUMN, 'dm_pelanggan_antara' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pelanggan_antara
UNION ALL
SELECT 'Antara' AS nama_BUMN, 'dm_pendapatan_antara' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pendapatan_antara
UNION ALL
SELECT 'Antara' AS nama_BUMN, 'dm_pengunjung_antara' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pengunjung_antara
UNION ALL
SELECT 'Bio Farma' AS nama_BUMN, 'dm_bantuan_csr_biofarma' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_bantuan_csr_biofarma
UNION ALL
SELECT 'Bio Farma' AS nama_BUMN, 'dm_business_continuty_biofarma' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_business_continuty_biofarma
UNION ALL
SELECT 'Bio Farma' AS nama_BUMN, 'dm_inventory_biofarma' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_inventory_biofarma
UNION ALL
SELECT 'ITDC' AS nama_BUMN, 'dm_occupancy_rate_itdc' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_occupancy_rate_itdc
UNION ALL
SELECT 'ITDC' AS nama_BUMN, 'dm_pendapatan_itdc' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pendapatan_itdc
UNION ALL
SELECT 'ITDC' AS nama_BUMN, 'dm_pendapatan_itdc_copy' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pendapatan_itdc_copy
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'dm_pendapatan_Penjualan_pln' AS nama_tabel ,  
 CASE
  WHEN max(blnthn) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(blnthn),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di blnthn salah) ',max(blnthn))
  WHEN SUBSTRING(max(blnthn),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(blnthn),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di blnthn salah) ',max(blnthn))
  ELSE max(blnthn) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(blnthn,5,6)=1 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(blnthn,5,6)=2 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(blnthn,5,6)=3 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(blnthn,5,6)=4 AND substring(blnthn,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(blnthn,5,6)=5 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(blnthn,5,6)=6 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(blnthn,5,6)=7 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(blnthn,5,6)=8 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(blnthn,5,6)=9 AND substring(blnthn,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(blnthn,5,6)=10 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(blnthn,5,6)=11 AND substring(blnthn,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(blnthn,5,6)=12 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pendapatan_Penjualan_pln
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'dm_pendapatan_Penjualan_pln_copy' AS nama_tabel ,   
 CASE
  WHEN max(blnthn) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(blnthn),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di blnthn salah) ',max(blnthn))
  WHEN SUBSTRING(max(blnthn),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(blnthn),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di blnthn salah) ',max(blnthn))
  ELSE max(blnthn) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(blnthn,5,6)=1 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(blnthn,5,6)=2 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(blnthn,5,6)=3 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(blnthn,5,6)=4 AND substring(blnthn,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(blnthn,5,6)=5 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(blnthn,5,6)=6 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(blnthn,5,6)=7 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(blnthn,5,6)=8 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(blnthn,5,6)=9 AND substring(blnthn,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(blnthn,5,6)=10 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(blnthn,5,6)=11 AND substring(blnthn,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(blnthn,5,6)=12 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pendapatan_Penjualan_pln_copy
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'dm_stimulus_covid19_pln' AS nama_tabel ,   
 CASE
  WHEN max(blnthn) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(blnthn),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di blnthn salah) ',max(blnthn))
  WHEN SUBSTRING(max(blnthn),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(blnthn),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di blnthn salah) ',max(blnthn))
  ELSE max(blnthn) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(blnthn,5,6)=1 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(blnthn,5,6)=2 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(blnthn,5,6)=3 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(blnthn,5,6)=4 AND substring(blnthn,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(blnthn,5,6)=5 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(blnthn,5,6)=6 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(blnthn,5,6)=7 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(blnthn,5,6)=8 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(blnthn,5,6)=9 AND substring(blnthn,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(blnthn,5,6)=10 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(blnthn,5,6)=11 AND substring(blnthn,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(blnthn,5,6)=12 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_stimulus_covid19_pln
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'dm_stimulus_covid19_pln_copy' AS nama_tabel ,   
 CASE
  WHEN max(blnthn) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(blnthn),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di blnthn salah) ',max(blnthn))
  WHEN SUBSTRING(max(blnthn),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(blnthn),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di blnthn salah) ',max(blnthn))
  ELSE max(blnthn) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(blnthn,5,6)=1 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(blnthn,5,6)=2 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(blnthn,5,6)=3 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(blnthn,5,6)=4 AND substring(blnthn,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(blnthn,5,6)=5 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(blnthn,5,6)=6 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(blnthn,5,6)=7 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(blnthn,5,6)=8 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(blnthn,5,6)=9 AND substring(blnthn,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(blnthn,5,6)=10 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(blnthn,5,6)=11 AND substring(blnthn,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(blnthn,5,6)=12 AND substring(blnthn,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_stimulus_covid19_pln_copy
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'dm_tabel_gol_pln' AS nama_tabel, 
'(tidak ada atribut tanggal)' AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.dm_tabel_gol_pln
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'insentif_listrik_pln' AS nama_tabel ,  
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.insentif_listrik_pln WHERE tahun=(SELECT max(tahun) FROM pen_bumn.insentif_listrik_pln)
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'pelanggan_per_segment_pln' AS nama_tabel, 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.pelanggan_per_segment_pln WHERE tahun=(SELECT max(tahun) FROM pen_bumn.pelanggan_per_segment_pln)
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'pendapatan_pln' AS nama_tabel ,
  CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.pendapatan_pln WHERE tahun=(SELECT max(tahun) FROM pen_bumn.pendapatan_pln)
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'pln_1' AS nama_tabel,  
 CASE
  WHEN max(date) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(date)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.pln_1
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'pln_2' AS nama_tabel,  
 CASE
  WHEN max(date) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(date)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row  
 FROM pen_bumn.pln_2
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'data_total_lifting_pertamina' AS nama_tabel ,  
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(tahun),'-',max(bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan=1 AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan=2 AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan=3 AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan=4 AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan=5 AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan=6 AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan=7 AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan=8 AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan=9 AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan=10 AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan=11 AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan=12 AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.data_total_lifting_pertamina WHERE tahun=(SELECT max(tahun) FROM pen_bumn.data_total_lifting_pertamina)
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'data_total_produksi_pertamina' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada tanggal di atribut tanggal)'
  WHEN max(tanggal) > DAY(CURDATE()) AND max(bulan)=MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  WHEN max(bulan) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(tahun),'-',max(bulan),'-',max(tanggal)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, '' AS Total_Row 
 FROM pen_bumn.data_total_produksi_pertamina WHERE bulan=(SELECT max(bulan) FROM pen_bumn.data_total_produksi_pertamina WHERE tahun=(SELECT max(tahun) FROM pen_bumn.data_total_produksi_pertamina))
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'data_total_produksi_pertamina' AS nama_tabel ,  
 '' AS data_terupdate, '' AS tanggal_pengecekan,  
 count(case when bulan=1 AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan=2 AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan=3 AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan=4 AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan=5 AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan=6 AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan=7 AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan=8 AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan=9 AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan=10 AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan=11 AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan=12 AND tahun=2020 then 1 else null end) AS Desember_2020,count(*) AS Total_Row 
 FROM pen_bumn.data_total_produksi_pertamina WHERE tahun=(SELECT max(tahun) FROM pen_bumn.data_total_produksi_pertamina dtpp)
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'dm_total_lifting_pertamina' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_total_lifting_pertamina
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'dm_total_penjualan_pertamina' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_total_penjualan_pertamina
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'dm_total_produksi_pertamina' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_total_produksi_pertamina
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'pertamina_1' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.pertamina_1
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'pertamina_2' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.pertamina_2
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'pertamina_3' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.pertamina_3
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'pertamina_4' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.pertamina_4
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'pertamina_5' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.pertamina_5
UNION ALL
SELECT 'Pertamina' AS nama_BUMN, 'pertamina_6' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.pertamina_6
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'data_arpu_jenis_layanan_telkomsel' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(tahun),'-',max(bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan=1 AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan=2 AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan=3 AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan=4 AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan=5 AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan=6 AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan=7 AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan=8 AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan=9 AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan=10 AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan=11 AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan=12 AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.data_arpu_jenis_layanan_telkomsel WHERE tahun=(SELECT max(tahun) FROM pen_bumn.data_arpu_jenis_layanan_telkomsel)
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'data_arpu_jenis_pembayaran_telkomsel' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(tahun),'-',max(bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan=1 AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan=2 AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan=3 AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan=4 AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan=5 AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan=6 AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan=7 AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan=8 AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan=9 AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan=10 AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan=11 AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan=12 AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row 
 FROM pen_bumn.data_arpu_jenis_pembayaran_telkomsel WHERE tahun=(SELECT max(tahun) FROM pen_bumn.data_arpu_jenis_pembayaran_telkomsel)
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkom' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_arpu_telkom
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkom_bck' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_arpu_telkom_bck
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkom_test' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_arpu_telkom_test
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkomsel' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_arpu_telkomsel
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkomsel_jenis_layanan' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_arpu_telkomsel_jenis_layanan
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkomsel_jenis_pembayaran' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_arpu_telkomsel_jenis_pembayaran
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'telkom_1' AS nama_tabel ,
 CASE
  WHEN max(Date) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(Date)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.telkom_1
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'telkom_2' AS nama_tabel ,  
 CASE
  WHEN max(date) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(date)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.telkom_2
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'telkom_3' AS nama_tabel ,
 CASE
  WHEN max(date) IS NULL THEN '(tidak ada data sama sekali)'
  ELSE CONCAT('(tidak ada tahun) ',max(date)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.telkom_3
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'int_arpu' AS nama_tabel ,
CASE
  WHEN max(PERIODE) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(PERIODE),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut PERIODE salah) ',max(PERIODE))
  WHEN SUBSTRING(max(PERIODE),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(PERIODE),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut PERIODE salah) ',max(PERIODE))
  ELSE max(PERIODE) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(PERIODE,5,6)=1 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(PERIODE,5,6)=2 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(PERIODE,5,6)=3 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(PERIODE,5,6)=4 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(PERIODE,5,6)=5 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(PERIODE,5,6)=6 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(PERIODE,5,6)=7 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(PERIODE,5,6)=8 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(PERIODE,5,6)=9 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(PERIODE,5,6)=10 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(PERIODE,5,6)=11 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(PERIODE,5,6)=12 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.int_arpu
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'int_arpu_cro' AS nama_tabel ,
CASE
  WHEN max(PERIODE) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(PERIODE),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut PERIODE salah) ',max(PERIODE))
  WHEN SUBSTRING(max(PERIODE),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(PERIODE),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut PERIODE salah) ',max(PERIODE))
  ELSE max(PERIODE) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(PERIODE,5,6)=1 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(PERIODE,5,6)=2 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(PERIODE,5,6)=3 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(PERIODE,5,6)=4 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(PERIODE,5,6)=5 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(PERIODE,5,6)=6 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(PERIODE,5,6)=7 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(PERIODE,5,6)=8 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(PERIODE,5,6)=9 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(PERIODE,5,6)=10 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(PERIODE,5,6)=11 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(PERIODE,5,6)=12 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.int_arpu_cro
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'int_arpu_kota' AS nama_tabel ,
CASE
  WHEN max(PERIODE) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(PERIODE),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut PERIODE salah) ',max(PERIODE))
  WHEN SUBSTRING(max(PERIODE),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(PERIODE),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut PERIODE salah) ',max(PERIODE))
  ELSE max(PERIODE) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(PERIODE,5,6)=1 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(PERIODE,5,6)=2 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(PERIODE,5,6)=3 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(PERIODE,5,6)=4 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(PERIODE,5,6)=5 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(PERIODE,5,6)=6 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(PERIODE,5,6)=7 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(PERIODE,5,6)=8 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(PERIODE,5,6)=9 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(PERIODE,5,6)=10 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(PERIODE,5,6)=11 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(PERIODE,5,6)=12 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.int_arpu_kota
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'int_arpu_reg' AS nama_tabel ,
CASE
  WHEN max(PERIODE) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(PERIODE),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut PERIODE salah) ',max(PERIODE))
  WHEN SUBSTRING(max(PERIODE),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(PERIODE),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut PERIODE salah) ',max(PERIODE))
  ELSE max(PERIODE) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(PERIODE,5,6)=1 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(PERIODE,5,6)=2 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(PERIODE,5,6)=3 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(PERIODE,5,6)=4 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(PERIODE,5,6)=5 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(PERIODE,5,6)=6 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(PERIODE,5,6)=7 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(PERIODE,5,6)=8 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(PERIODE,5,6)=9 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(PERIODE,5,6)=10 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(PERIODE,5,6)=11 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(PERIODE,5,6)=12 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.int_arpu_reg
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpurev_nasional_telkomsel' AS nama_tabel ,
CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(tanggal),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut tanggal salah) ',max(tanggal))
  WHEN SUBSTRING(max(tanggal),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(tanggal),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,5,6)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,5,6)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,5,6)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,5,6)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,5,6)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,5,6)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,5,6)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,5,6)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,5,6)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,5,6)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,5,6)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,5,6)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_arpurev_nasional_telkomsel
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpurev_regional_telkomsel' AS nama_tabel ,
CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(tanggal),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut tanggal salah) ',max(tanggal))
  WHEN SUBSTRING(max(tanggal),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(tanggal),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,5,6)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,5,6)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,5,6)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,5,6)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,5,6)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,5,6)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,5,6)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,5,6)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,5,6)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,5,6)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,5,6)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,5,6)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_arpurev_regional_telkomsel
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'int_arpu_regional' AS nama_tabel ,
CASE
  WHEN max(PERIODE) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(PERIODE),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut PERIODE salah) ',max(PERIODE))
  WHEN SUBSTRING(max(PERIODE),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(PERIODE),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut PERIODE salah) ',max(PERIODE))
  ELSE max(PERIODE) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(PERIODE,5,6)=1 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(PERIODE,5,6)=2 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(PERIODE,5,6)=3 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(PERIODE,5,6)=4 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(PERIODE,5,6)=5 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(PERIODE,5,6)=6 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(PERIODE,5,6)=7 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(PERIODE,5,6)=8 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(PERIODE,5,6)=9 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(PERIODE,5,6)=10 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(PERIODE,5,6)=11 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(PERIODE,5,6)=12 AND substring(PERIODE,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.int_arpu_regional
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'customer_inalum' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.customer_inalum WHERE tahun=(SELECT max(tahun) FROM pen_bumn.customer_inalum)
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'data_LME_inalum' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.data_LME_inalum
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'data_komoditi_inalum' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Jan' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Feb' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Mar' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='Apr' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='May' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Jun' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Jul' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Aug' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='Sep' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oct' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='Nov' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Dec' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.data_komoditi_inalum WHERE tahun=(SELECT max(tahun) FROM pen_bumn.data_komoditi_inalum)
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'data_sales_inalum' AS nama_tabel ,  
 CASE
  WHEN max(end) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(end) > CURDATE() THEN CONCAT('(!! tanggal di atribut end salah) ',max(end))
  ELSE max(end) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(end,6,7)=1 AND substring(end,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(end,6,7)=2 AND substring(end,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(end,6,7)=3 AND substring(end,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(end,6,7)=4 AND substring(end,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(end,6,7)=5 AND substring(end,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(end,6,7)=6 AND substring(end,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(end,6,7)=7 AND substring(end,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(end,6,7)=8 AND substring(end,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(end,6,7)=9 AND substring(end,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(end,6,7)=10 AND substring(end,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(end,6,7)=11 AND substring(end,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(end,6,7)=12 AND substring(end,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.data_sales_inalum
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'dm_commodity_inalum' AS nama_tabel , 
 CASE
  WHEN max(periode) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(periode) > CURDATE() THEN CONCAT('(!! tanggal di atribut periode salah) ',max(periode))
  ELSE max(periode) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(periode,6,7)=1 AND substring(periode,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(periode,6,7)=2 AND substring(periode,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(periode,6,7)=3 AND substring(periode,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(periode,6,7)=4 AND substring(periode,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(periode,6,7)=5 AND substring(periode,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(periode,6,7)=6 AND substring(periode,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(periode,6,7)=7 AND substring(periode,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(periode,6,7)=8 AND substring(periode,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(periode,6,7)=9 AND substring(periode,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(periode,6,7)=10 AND substring(periode,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(periode,6,7)=11 AND substring(periode,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(periode,6,7)=12 AND substring(periode,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_commodity_inalum
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'dm_lme_inalum' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_lme_inalum
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'dm_sales_inalum' AS nama_tabel , 
 CASE
  WHEN max(end_date) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(end_date) > CURDATE() THEN CONCAT('(!! tanggal di atribut end_date salah) ',max(end_date))
  ELSE max(end_date) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(end_date,6,7)=1 AND substring(end_date,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(end_date,6,7)=2 AND substring(end_date,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(end_date,6,7)=3 AND substring(end_date,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(end_date,6,7)=4 AND substring(end_date,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(end_date,6,7)=5 AND substring(end_date,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(end_date,6,7)=6 AND substring(end_date,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(end_date,6,7)=7 AND substring(end_date,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(end_date,6,7)=8 AND substring(end_date,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(end_date,6,7)=9 AND substring(end_date,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(end_date,6,7)=10 AND substring(end_date,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(end_date,6,7)=11 AND substring(end_date,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(end_date,6,7)=12 AND substring(end_date,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_sales_inalum
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'penjualan_by_product_inalum' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.penjualan_by_product_inalum WHERE tahun=(SELECT max(tahun) FROM pen_bumn.penjualan_by_product_inalum)
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'penjualan_by_prov_inalum' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.penjualan_by_prov_inalum WHERE tahun=(SELECT max(tahun) FROM pen_bumn.penjualan_by_prov_inalum)
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'penjualan_inalum' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan=1 AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan=2 AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan=3 AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan=4 AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan=5 AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan=6 AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan=7 AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan=8 AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan=9 AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan=10 AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan=11 AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan=12 AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.penjualan_inalum WHERE tahun=(SELECT max(tahun) FROM pen_bumn.penjualan_inalum)
UNION ALL
SELECT 'Pupuk Indonesia' AS nama_BUMN, 'data_pupuk_pi' AS nama_tabel , 
 CASE
  WHEN max(Bulan) IS NULL THEN '(tidak ada bulan di atribut Bulan)'
  WHEN max(Bulan) > MONTH(CURDATE()) AND max(Tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(Bulan))
  WHEN max(Tahun) IS NULL THEN '(tidak ada tahun di atribut Tahun)'
  WHEN max(Tahun) > YEAR(CURDATE()) THEN CONCAT('(!! Tahun salah) ',max(Tahun))
  ELSE CONCAT(max(Tahun),'-',max(Bulan)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when Bulan=1 AND Tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when Bulan=2 AND Tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when Bulan=3 AND Tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when Bulan=4 AND Tahun=2020 then 1 else null end) AS April_2020,
 count(case when Bulan=5 AND Tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when Bulan=6 AND Tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when Bulan=7 AND Tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when Bulan=8 AND Tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when Bulan=9 AND Tahun=2020 then 1 else null end) AS September_2020,
 count(case when Bulan=10 AND Tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when Bulan=11 AND Tahun=2020 then 1 else null end) AS November_2020,
 count(case when Bulan=12 AND Tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.data_pupuk_pi WHERE Tahun=(SELECT max(Tahun) FROM pen_bumn.data_pupuk_pi)
UNION ALL
SELECT 'Pupuk Indonesia' AS nama_BUMN, 'dm_penyaluran_pupuk_subsidi_pi' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_penyaluran_pupuk_subsidi_pi
UNION ALL
SELECT 'Pupuk Indonesia' AS nama_BUMN, 'penyaluran_by_jenis_pupuk_idn' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan=1 AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan=2 AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan=3 AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan=4 AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan=5 AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan=6 AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan=7 AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan=8 AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan=9 AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan=10 AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan=11 AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan=12 AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.penyaluran_by_jenis_pupuk_idn WHERE tahun=(SELECT max(tahun) FROM pen_bumn.penyaluran_by_jenis_pupuk_idn)
UNION ALL
SELECT 'Pupuk Indonesia' AS nama_BUMN, 'penyaluran_by_prov_pupuk_idn' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan=1 AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan=2 AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan=3 AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan=4 AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan=5 AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan=6 AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan=7 AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan=8 AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan=9 AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan=10 AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan=11 AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan=12 AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.penyaluran_by_prov_pupuk_idn WHERE tahun=(SELECT max(tahun) FROM pen_bumn.penyaluran_by_prov_pupuk_idn)
UNION ALL
SELECT 'Pupuk Indonesia' AS nama_BUMN, 'penyaluran_pupuk_idn' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan=1 AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan=2 AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan=3 AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan=4 AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan=5 AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan=6 AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan=7 AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan=8 AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan=9 AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan=10 AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan=11 AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan=12 AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.penyaluran_pupuk_idn WHERE tahun=(SELECT max(tahun) FROM pen_bumn.penyaluran_pupuk_idn)
UNION ALL
SELECT 'Semen Indonesia' AS nama_BUMN, 'dm_csr_semen_indonesia' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row FROM pen_bumn.dm_csr_semen_indonesia
UNION ALL
SELECT 'Semen Indonesia' AS nama_BUMN, 'dm_sales_semen_indonesia' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_sales_semen_indonesia
UNION ALL
SELECT 'Semen Indonesia' AS nama_BUMN, 'dm_stock_semen_indonesia' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_stock_semen_indonesia
UNION ALL
SELECT 'Semen Indonesia' AS nama_BUMN, 'penjualan_semen' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.penjualan_semen WHERE tahun=(SELECT max(tahun) FROM pen_bumn.penjualan_semen)
UNION ALL
SELECT 'Semen Indonesia' AS nama_BUMN, 'penjualan_semen_per_jenis_kemas' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.penjualan_semen_per_jenis_kemas WHERE tahun=(SELECT max(tahun) FROM pen_bumn.penjualan_semen_per_jenis_kemas)
UNION ALL
SELECT 'Semen Indonesia' AS nama_BUMN, 'semen_sales' AS nama_tabel, 
 CASE
  WHEN max(tanggal_transaksi) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal_transaksi) > CURDATE() THEN CONCAT('(!! tanggal_transaksi salah) ',max(tanggal_transaksi))
  ELSE max(tanggal_transaksi) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal_transaksi,6,7)=1 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal_transaksi,6,7)=2 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal_transaksi,6,7)=3 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal_transaksi,6,7)=4 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal_transaksi,6,7)=5 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal_transaksi,6,7)=6 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal_transaksi,6,7)=7 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal_transaksi,6,7)=8 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal_transaksi,6,7)=9 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal_transaksi,6,7)=10 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal_transaksi,6,7)=11 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal_transaksi,6,7)=12 AND substring(tanggal_transaksi,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.semen_sales
UNION ALL
SELECT 'PTPN' AS nama_BUMN, 'data_pembelian_ptpn' AS nama_tabel ,
 CASE
  WHEN max(last_changed_on) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(last_changed_on) > CURDATE() THEN CONCAT('(!! tanggal di atribut last_changed_on salah) ',max(last_changed_on))
  ELSE max(last_changed_on) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(last_changed_on,6,7)=1 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(last_changed_on,6,7)=2 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(last_changed_on,6,7)=3 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(last_changed_on,6,7)=4 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(last_changed_on,6,7)=5 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(last_changed_on,6,7)=6 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(last_changed_on,6,7)=7 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(last_changed_on,6,7)=8 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(last_changed_on,6,7)=9 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(last_changed_on,6,7)=10 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(last_changed_on,6,7)=11 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(last_changed_on,6,7)=12 AND substring(last_changed_on,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.data_pembelian_ptpn
UNION ALL
SELECT 'PTPN' AS nama_BUMN, 'data_penjualan_ptpn' AS nama_tabel , 
 CASE
  WHEN max(billing_date) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(billing_date) > CURDATE() THEN CONCAT('(!! billing_date salah) ',max(billing_date))
  ELSE max(billing_date) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(billing_date,6,7)=1 AND substring(billing_date,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(billing_date,6,7)=2 AND substring(billing_date,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(billing_date,6,7)=3 AND substring(billing_date,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(billing_date,6,7)=4 AND substring(billing_date,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(billing_date,6,7)=5 AND substring(billing_date,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(billing_date,6,7)=6 AND substring(billing_date,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(billing_date,6,7)=7 AND substring(billing_date,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(billing_date,6,7)=8 AND substring(billing_date,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(billing_date,6,7)=9 AND substring(billing_date,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(billing_date,6,7)=10 AND substring(billing_date,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(billing_date,6,7)=11 AND substring(billing_date,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(billing_date,6,7)=12 AND substring(billing_date,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.data_penjualan_ptpn
UNION ALL
SELECT 'PTPN' AS nama_BUMN, 'dm_pembelian_komoditi_ptpn' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pembelian_komoditi_ptpn
UNION ALL
SELECT 'PTPN' AS nama_BUMN, 'dm_pembelian_komoditi_ptpn_copy' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pembelian_komoditi_ptpn_copy
UNION ALL
SELECT 'PTPN' AS nama_BUMN, 'dm_pembelian_komoditi_ptpn_jan20' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_pembelian_komoditi_ptpn_jan20
UNION ALL
SELECT 'PTPN' AS nama_BUMN, 'dm_penjualan_komoditi_ptpn' AS nama_tabel , 
 CASE
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_penjualan_komoditi_ptpn
UNION ALL
SELECT 'PTPN' AS nama_BUMN, 'dm_tabel_ptpn' AS nama_tabel , '(tidak ada atribut tanggal)' AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row
FROM pen_bumn.dm_tabel_ptpn
UNION ALL
SELECT 'PTPN' AS nama_BUMN, 'penjualan_by_komoditas_ptpn' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.penjualan_by_komoditas_ptpn WHERE tahun=(SELECT max(tahun) FROM pen_bumn.penjualan_by_komoditas_ptpn)
UNION ALL
SELECT 'PTPN' AS nama_BUMN, 'penjualan_v_produksi_ptpn' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.penjualan_v_produksi_ptpn WHERE tahun=(SELECT max(tahun) FROM pen_bumn.penjualan_v_produksi_ptpn)
UNION ALL
SELECT 'Garuda' AS nama_BUMN, 'data_airport_cd_garuda' AS nama_tabel , '(tidak ada atribut tanggal)' AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 '' AS Januari_2020, 
 '' AS Februari_2020,
 '' AS Maret_2020,
 '' AS April_2020,
 '' AS Mei_2020,
 '' AS Juni_2020,
 '' AS Juli_2020,
 '' AS Agustus_2020,
 '' AS September_2020,
 '' AS Oktober_2020,
 '' AS November_2020,
 '' AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.data_airport_cd_garuda
UNION ALL
SELECT 'Garuda' AS nama_BUMN, 'data_garuda' AS nama_tabel ,  
 CASE
  WHEN max(Month) IS NULL THEN '(tidak ada bulan di atribut Month)'
  WHEN max(Month) > MONTH(CURDATE()) AND max(Year)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di atribut Month salah) ',max(Month))
  WHEN max(Year) IS NULL THEN '(tidak ada tahun di atribut Year)'
  WHEN max(Year) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di atribut Year salah) ',max(Year))
  ELSE CONCAT(max(Year),'-',max(Month)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when Month=1 AND Year=2020 then 1 else null end) AS Januari_2020, 
 count(case when Month=2 AND Year=2020 then 1 else null end) AS Februari_2020,
 count(case when Month=3 AND Year=2020 then 1 else null end) AS Maret_2020,
 count(case when Month=4 AND Year=2020 then 1 else null end) AS April_2020,
 count(case when Month=5 AND Year=2020 then 1 else null end) AS Mei_2020,
 count(case when Month=6 AND Year=2020 then 1 else null end) AS Juni_2020,
 count(case when Month=7 AND Year=2020 then 1 else null end) AS Juli_2020,
 count(case when Month=8 AND Year=2020 then 1 else null end) AS Agustus_2020,
 count(case when Month=9 AND Year=2020 then 1 else null end) AS September_2020,
 count(case when Month=10 AND Year=2020 then 1 else null end) AS Oktober_2020,
 count(case when Month=11 AND Year=2020 then 1 else null end) AS November_2020,
 count(case when Month=12 AND Year=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.data_garuda WHERE Year=(SELECT max(Year) FROM pen_bumn.data_garuda)
UNION ALL
SELECT 'Garuda' AS nama_BUMN, 'dm_cargo_garuda' AS nama_tabel , 
 CASE
  WHEN max(date_insert) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(date_insert) > CURDATE() THEN CONCAT('(!! tanggal di atribut date_insert salah) ',max(date_insert))
  ELSE max(date_insert) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(date_insert,6,7)=1 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(date_insert,6,7)=2 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(date_insert,6,7)=3 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(date_insert,6,7)=4 AND substring(date_insert,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(date_insert,6,7)=5 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(date_insert,6,7)=6 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(date_insert,6,7)=7 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(date_insert,6,7)=8 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(date_insert,6,7)=9 AND substring(date_insert,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(date_insert,6,7)=10 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(date_insert,6,7)=11 AND substring(date_insert,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(date_insert,6,7)=12 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_cargo_garuda
UNION ALL
SELECT 'Garuda' AS nama_BUMN, 'dm_cargo_garuda_copy' AS nama_tabel , 
 CASE
  WHEN max(date_insert) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(date_insert) > CURDATE() THEN CONCAT('(!! tanggal di atribut date_insert salah) ',max(date_insert))
  ELSE max(date_insert) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(date_insert,6,7)=1 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(date_insert,6,7)=2 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(date_insert,6,7)=3 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(date_insert,6,7)=4 AND substring(date_insert,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(date_insert,6,7)=5 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(date_insert,6,7)=6 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(date_insert,6,7)=7 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(date_insert,6,7)=8 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(date_insert,6,7)=9 AND substring(date_insert,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(date_insert,6,7)=10 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(date_insert,6,7)=11 AND substring(date_insert,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(date_insert,6,7)=12 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_cargo_garuda_copy
UNION ALL
SELECT 'Garuda' AS nama_BUMN, 'dm_passenger_garuda' AS nama_tabel , 
 CASE
  WHEN max(date_insert) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(date_insert) > CURDATE() THEN CONCAT('(!! tanggal di atribut date_insert salah) ',max(date_insert))
  ELSE max(date_insert) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(date_insert,6,7)=1 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(date_insert,6,7)=2 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(date_insert,6,7)=3 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(date_insert,6,7)=4 AND substring(date_insert,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(date_insert,6,7)=5 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(date_insert,6,7)=6 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(date_insert,6,7)=7 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(date_insert,6,7)=8 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(date_insert,6,7)=9 AND substring(date_insert,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(date_insert,6,7)=10 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(date_insert,6,7)=11 AND substring(date_insert,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(date_insert,6,7)=12 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_passenger_garuda
UNION ALL
SELECT 'Garuda' AS nama_BUMN, 'dm_passenger_garuda_copy' AS nama_tabel , 
 CASE
  WHEN max(date_insert) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(date_insert) > CURDATE() THEN CONCAT('(!! tanggal di atribut date_insert salah) ',max(date_insert))
  ELSE max(date_insert) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(date_insert,6,7)=1 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(date_insert,6,7)=2 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(date_insert,6,7)=3 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(date_insert,6,7)=4 AND substring(date_insert,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(date_insert,6,7)=5 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(date_insert,6,7)=6 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(date_insert,6,7)=7 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(date_insert,6,7)=8 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(date_insert,6,7)=9 AND substring(date_insert,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(date_insert,6,7)=10 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(date_insert,6,7)=11 AND substring(date_insert,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(date_insert,6,7)=12 AND substring(date_insert,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_passenger_garuda_copy
UNION ALL
SELECT 'Garuda' AS nama_BUMN, 'garuda_indonesia' AS nama_tabel ,  
 CASE
  WHEN max(date) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(date) > NOW() THEN CONCAT('(!! tanggal di atribut date salah)',max(date))
  ELSE max(date)
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(date,6,7)=1 AND substring(date,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(date,6,7)=2 AND substring(date,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(date,6,7)=3 AND substring(date,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(date,6,7)=4 AND substring(date,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(date,6,7)=5 AND substring(date,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(date,6,7)=6 AND substring(date,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(date,6,7)=7 AND substring(date,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(date,6,7)=8 AND substring(date,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(date,6,7)=9 AND substring(date,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(date,6,7)=10 AND substring(date,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(date,6,7)=11 AND substring(date,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(date,6,7)=12 AND substring(date,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.garuda_indonesia
UNION ALL
SELECT 'Citilink' AS nama_BUMN, 'dm_cargo_citilink' AS nama_tabel ,  
 CASE
  WHEN max(tanggal_departure) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal_departure) > NOW() THEN CONCAT('(!! tanggal_departure salah)',max(tanggal_departure))
  ELSE max(tanggal_departure)
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal_departure,6,7)=1 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal_departure,6,7)=2 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal_departure,6,7)=3 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal_departure,6,7)=4 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal_departure,6,7)=5 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal_departure,6,7)=6 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal_departure,6,7)=7 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal_departure,6,7)=8 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal_departure,6,7)=9 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal_departure,6,7)=10 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal_departure,6,7)=11 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal_departure,6,7)=12 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_cargo_citilink
UNION ALL
SELECT 'Citilink' AS nama_BUMN, 'dm_passenger_citilink' AS nama_tabel ,  
 CASE
  WHEN max(tanggal_departure) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal_departure) > NOW() THEN CONCAT('(!! tanggal_departure salah)',max(tanggal_departure))
  ELSE max(tanggal_departure)
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal_departure,6,7)=1 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal_departure,6,7)=2 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal_departure,6,7)=3 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal_departure,6,7)=4 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal_departure,6,7)=5 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal_departure,6,7)=6 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal_departure,6,7)=7 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal_departure,6,7)=8 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal_departure,6,7)=9 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal_departure,6,7)=10 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal_departure,6,7)=11 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal_departure,6,7)=12 AND substring(tanggal_departure,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_passenger_citilink
UNION ALL
SELECT 'Bulog' AS nama_BUMN, 'data_serapan_bulog' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > NOW() THEN CONCAT('(!! tanggal salah)',max(tanggal))
  ELSE max(tanggal)
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.data_serapan_bulog
UNION ALL
SELECT 'Bulog' AS nama_BUMN, 'data_stok_bulog' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.data_stok_bulog
UNION ALL
SELECT 'Bulog' AS nama_BUMN, 'dm_bansos_covid_bulog' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_bansos_covid_bulog
UNION ALL
SELECT 'Bulog' AS nama_BUMN, 'dm_bansos_kemensos_bulog' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_bansos_kemensos_bulog
UNION ALL
SELECT 'Bulog' AS nama_BUMN, 'dm_serapan_petani_bulog' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_serapan_petani_bulog
UNION ALL
SELECT 'Bulog' AS nama_BUMN, 'dm_stok_cbp_bulog' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_stok_cbp_bulog
UNION ALL
SELECT 'Bulog' AS nama_BUMN, 'program_penyerapan_beras_bulog' AS nama_tabel , 
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.program_penyerapan_beras_bulog WHERE tahun=(SELECT max(tahun) FROM pen_bumn.program_penyerapan_beras_bulog)
UNION ALL
SELECT 'Bulog' AS nama_BUMN, 'stock_bulog' AS nama_tabel ,
 CASE
  WHEN max(bulan) IS NULL THEN '(tidak ada bulan di atribut bulan)'
  WHEN max(bulan) > MONTH(CURDATE()) AND max(tahun)=YEAR(CURDATE()) THEN CONCAT('(!! bulan salah) ',max(bulan))
  WHEN max(tahun) IS NULL THEN '(tidak ada tahun di atribut tahun)'
  WHEN max(tahun) > YEAR(CURDATE()) THEN CONCAT('(!! tahun salah) ',max(tahun))
  ELSE CONCAT(max(bulan),' ',max(tahun)) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan,  
 count(case when bulan='Januari' AND tahun=2020 then 1 else null end) AS Januari_2020, 
 count(case when bulan='Februari' AND tahun=2020 then 1 else null end) AS Februari_2020,
 count(case when bulan='Maret' AND tahun=2020 then 1 else null end) AS Maret_2020,
 count(case when bulan='April' AND tahun=2020 then 1 else null end) AS April_2020,
 count(case when bulan='Mei' AND tahun=2020 then 1 else null end) AS Mei_2020,
 count(case when bulan='Juni' AND tahun=2020 then 1 else null end) AS Juni_2020,
 count(case when bulan='Juli' AND tahun=2020 then 1 else null end) AS Juli_2020,
 count(case when bulan='Agustus' AND tahun=2020 then 1 else null end) AS Agustus_2020,
 count(case when bulan='September' AND tahun=2020 then 1 else null end) AS September_2020,
 count(case when bulan='Oktober' AND tahun=2020 then 1 else null end) AS Oktober_2020,
 count(case when bulan='November' AND tahun=2020 then 1 else null end) AS November_2020,
 count(case when bulan='Desember' AND tahun=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.stock_bulog WHERE tahun=(SELECT max(tahun) FROM pen_bumn.stock_bulog)
UNION ALL
SELECT 'Mandiri' AS nama_BUMN, 'dm_bunga_kur_nonkur_mandiri' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_bunga_kur_nonkur_mandiri
UNION ALL
SELECT 'Mandiri' AS nama_BUMN, 'dm_bunga_kur_nonkur_mandiri_copy' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_bunga_kur_nonkur_mandiri_copy
UNION ALL
SELECT 'Mandiri' AS nama_BUMN, 'dm_penempatan_dana_pmk70_mandiri' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_penempatan_dana_pmk70_mandiri
UNION ALL
SELECT 'Mandiri' AS nama_BUMN, 'dm_penempatan_dana_pmk70_mandiri_copy' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_penempatan_dana_pmk70_mandiri_copy
UNION ALL
SELECT 'Mandiri' AS nama_BUMN, 'dm_renc_realisasi_dana_pmk70_mandiri' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_renc_realisasi_dana_pmk70_mandiri
UNION ALL
SELECT 'Mandiri' AS nama_BUMN, 'dm_renc_realisasi_dana_pmk70_mandiri_copy' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_renc_realisasi_dana_pmk70_mandiri_copy
UNION ALL
SELECT 'BNI' AS nama_BUMN, 'bank_bni' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.bank_bni
UNION ALL
SELECT 'BNI' AS nama_BUMN, 'bank_bni_proyeksi' AS nama_tabel , 
 CASE
  WHEN max(timestamp) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(timestamp) > NOW() THEN CONCAT('(!! tanggal di atribut timestamp salah)',max(timestamp))
  ELSE max(timestamp)
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(timestamp,6,7)=1 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(timestamp,6,7)=2 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(timestamp,6,7)=3 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(timestamp,6,7)=4 AND substring(timestamp,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(timestamp,6,7)=5 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(timestamp,6,7)=6 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(timestamp,6,7)=7 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(timestamp,6,7)=8 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(timestamp,6,7)=9 AND substring(timestamp,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(timestamp,6,7)=10 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(timestamp,6,7)=11 AND substring(timestamp,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(timestamp,6,7)=12 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.bank_bni_proyeksi
UNION ALL
SELECT 'BNI' AS nama_BUMN, 'dm_bunga_kur_nonkur_bni' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_bunga_kur_nonkur_bni
UNION ALL
SELECT 'BNI' AS nama_BUMN, 'dm_bunga_kur_nonkur_bni_copy' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_bunga_kur_nonkur_bni_copy
UNION ALL
SELECT 'BNI' AS nama_BUMN, 'dm_penempatan_dana_pmk70_bni' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_penempatan_dana_pmk70_bni
UNION ALL
SELECT 'BNI' AS nama_BUMN, 'dm_penempatan_dana_pmk70_bni_copy' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_penempatan_dana_pmk70_bni_copy
UNION ALL
SELECT 'BNI' AS nama_BUMN, 'dm_renc_realisasi_dana_pmk70_bni' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_renc_realisasi_dana_pmk70_bni
UNION ALL
SELECT 'BNI' AS nama_BUMN, 'dm_renc_realisasi_dana_pmk70_bni_copy' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_renc_realisasi_dana_pmk70_bni_copy
UNION ALL
SELECT 'BTN' AS nama_BUMN, 'dm_bunga_kur_nonkur_btn' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_bunga_kur_nonkur_btn
UNION ALL
SELECT 'BTN' AS nama_BUMN, 'dm_penempatan_dana_pmk70_btn' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_penempatan_dana_pmk70_btn
UNION ALL
SELECT 'BTN' AS nama_BUMN, 'dm_renc_realisasi_dana_pmk70_btn' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_renc_realisasi_dana_pmk70_btn
UNION ALL
SELECT 'BTN' AS nama_BUMN, 'dm_renc_realisasi_dana_pmk70_btn_copy' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_renc_realisasi_dana_pmk70_btn_copy
UNION ALL
SELECT 'BRI' AS nama_BUMN, 'bank_bri' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.bank_bri
UNION ALL
SELECT 'BRI' AS nama_BUMN, 'bank_bri_proyeksi' AS nama_tabel , 
 CASE
  WHEN max(timestamp) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(timestamp) > NOW() THEN CONCAT('(!! tanggal di atribut timestamp salah)',max(timestamp))
  ELSE max(timestamp)
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(timestamp,6,7)=1 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(timestamp,6,7)=2 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(timestamp,6,7)=3 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(timestamp,6,7)=4 AND substring(timestamp,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(timestamp,6,7)=5 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(timestamp,6,7)=6 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(timestamp,6,7)=7 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(timestamp,6,7)=8 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(timestamp,6,7)=9 AND substring(timestamp,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(timestamp,6,7)=10 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(timestamp,6,7)=11 AND substring(timestamp,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(timestamp,6,7)=12 AND substring(timestamp,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.bank_bri_proyeksi
UNION ALL
SELECT 'BRI' AS nama_BUMN, 'dm_bunga_kur_nonkur_bri' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_bunga_kur_nonkur_bri
UNION ALL
SELECT 'BRI' AS nama_BUMN, 'dm_penempatan_dana_pmk70_bri' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_penempatan_dana_pmk70_bri
UNION ALL
SELECT 'BRI' AS nama_BUMN, 'dm_renc_realisasi_dana_pmk70_bri' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Januari_2020, 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Februari_2020,
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Maret_2020,
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=2020 then 1 else null end) AS April_2020,
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Mei_2020,
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juni_2020,
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Juli_2020,
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Agustus_2020,
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=2020 then 1 else null end) AS September_2020,
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Oktober_2020,
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=2020 then 1 else null end) AS November_2020,
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=2020 then 1 else null end) AS Desember_2020, count(*) AS Total_Row
 FROM pen_bumn.dm_renc_realisasi_dana_pmk70_bri";
if ($result = $mysqli -> query($query)) {
 echo '<div style="overflow-x:auto;">';
 echo "<table>";
 echo "<tr><th> Nama BUMN </th><th> Nama Tabel </th><th> Data Terupdate </th><th> Tanggal Pengecekan </th><th> Januari 2020 </th><th> Februari 2020 </th><th> Maret 2020 </th><th> April 2020 </th><th> Mei 2020 </th><th> Juni 2020 </th><th> Juli 2020 </th><th> Agustus 2020 </th><th> September 2020 </th><th> Oktober 2020 </th><th> November 2020 </th><th> Desember 2020 </th><th> Jumlah Row tabel Keseluruhan </th></tr>";
 while( $row = $result -> fetch_array() )
    {
      //echo $row['nama_BUMN'] . " " . $row['nama_tabel'] . " " . $row['tanggal_terupdate'] . " " . $row['jumlah_row_tabel'];
      echo "<tr><td>" . $row['nama_BUMN'] . "</td><td>" . $row['nama_tabel'] . "</td><td>" . $row['data_terupdate'] . "</td><td>" . $row['tanggal_pengecekan'] . "</td><td>" . $row['Januari_2020'] . "</td><td>" . $row['Februari_2020'] . "</td><td>" . $row['Maret_2020'] . "</td><td>" . $row['April_2020'] . "</td><td>" . $row['Mei_2020'] . "</td><td>" . $row['Juni_2020'] . "</td><td>" . $row['Juli_2020'] . "</td><td>" . $row['Agustus_2020'] . "</td><td>" . $row['September_2020'] . "</td><td>" . $row['Oktober_2020'] . "</td><td>" . $row['November_2020'] . "</td><td>" . $row['Desember_2020'] . "</td><td>" . $row['Total_Row'] . "</td></tr>";
      //echo "<br />";
    }
 echo "</table>";
 echo "</div>";
}
else {
   echo "Syntax Execution Failed";
}
$mysqli -> close();
?>
</center>
</body>
</html>
