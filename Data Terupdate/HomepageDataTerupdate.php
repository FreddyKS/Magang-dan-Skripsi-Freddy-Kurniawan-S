<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Homepage by Laravel, Website Icon by https://www.favicon-generator.org/ -->
    <head>
<!--        <link rel="apple-touch-icon" sizes="57x57" href="IconWebsite/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="IconWebsite/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="IconWebsite/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="IconWebsite/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="IconWebsite/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="IconWebsite/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="IconWebsite/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="IconWebsite/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="IconWebsite/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="IconWebsite/android-icon-192x192.png">
<link rel="shortcut icon" type="image/png" sizes="192x192"  href="IconWebsite/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="IconWebsite/favicon-32x32.png">
<link rel="shortcut icon" type="image/png" sizes="32x32"  href="IconWebsite/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="IconWebsite/favicon-96x96.png">
<link rel="shortcut icon" type="image/png" sizes="96x96" href="IconWebsite/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="IconWebsite/favicon-16x16.png">
<link rel="shortcut icon" type="image/png" sizes="16x16" href="IconWebsite/favicon-16x16.png">
<link rel="manifest" href="IconWebsite/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="IconWebsite/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff"> -->
<link href="/IconWebsite/favicon.ico" rel="icon">
<link href="/IconWebsite/favicon.ico" rel="shortcut icon" >

	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menu Utama Data Terupdate</title>

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
                font-size: 42px;
            }

            .links a{
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
	    .keepbold{
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
	    }
            .m-b-md {
                margin-bottom: 30px;
            }
	    .labelforDatabase{
		font-size: 13px;
		font-weight: bold;
		color: #636b6f;
		margin-left: 50px;
	    }
	    .CSSyear{
		font-family: 'Nunito', sans-serif;
		font-size: 48px;
		border :0;
		color: #636b6f;
	    }
	    .inputforDatabase{
	    	font-size: 13px;
		color: #636b6f;
	    }
	    input[type=select]::-webkit-inner-spin-button {
 		 opacity:0.2;
	    }
	    input.middle:focus {
  	  	border :0;
	    }
	    input[type=number]::-webkit-inner-spin-button {
 		 opacity:0.2;
	    }
	    .Logo{
		transition: transform .5s ease;
	    }
	    .Logo:hover{
		transform: scale(1.1);
	    }
	    ul{
		list-style:none;
	    }
        </style>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                </div>
            <div class="content">
		<div class="title m-b-md">
                   <a href=""> <img class="Logo" src="TelkomIndonesia.jpg" style="height:200px;width:310px"> </a> <br>Data Terupdate semua BUMN
		<div id="writeYear"></div>
		<script type="text/javascript">
			function writeInputYear(){
				var today = new Date();
				var yyyy = today.getFullYear();
				document.getElementById("writeYear").innerHTML = "<label for=\"year\">Tahun</label> <input class=\"CSSyear\" id=\"year\" type=\"number\" min=\"1882\" max=\"2999\" value="+yyyy+" onchange=\"writeSource()\" onfocus=\"writeSource()\" onblur=\"writeSource()\" size=\"4\">";
			}
			writeInputYear();
		</script>   
               </div>
		<center>
			<table>
			<tr>
				<td>	
				<label for="host" class="labelforDatabase" >Host </label>
				</td><td>
				<input name="host" id="host" class="inputforDatabase" value="pen-dev.udata.id" onchange="writeSource()" onfocus="writeSource()" onblur="writeSource()">
				</td>
			</tr>
			<tr>
				<td>
				<label for="port" class="labelforDatabase" >Port </label>
				</td><td>
				<input name="port" id="port" class="inputforDatabase" value="14113" onchange="writeSource()" onfocus="writeSource()" onblur="writeSource()">
				</td>
			</tr>
			<tr>
				<td>
				<label for="user" class="labelforDatabase" >User </label>
				</td><td>
				<input name="user" id="user" class="inputforDatabase" value="u_web" onchange="writeSource()" onfocus="writeSource()" onblur="writeSource()">
				</td>
			</tr>
			<tr>
				<td>
				<label for="password" class="labelforDatabase" >Password </label>
				</td><td>
				<input type="password" name="password" id="password" value="" class="inputforDatabase" onchange="writeSource()" onfocus="writeSource()" onblur="writeSource()">
				</td>
			</tr>
			<tr>
				<td>
				<label for="database" class="labelforDatabase" >Database </label>
				</td><td>
				<input name="database" id="database" class="inputforDatabase" value="web" onchange="writeSource()" onfocus="writeSource()" onblur="writeSource()">
			</tr>
		</table>
		</center>
                
		<div class="links">
		<div id="DataTerupdate"></div>
		<div id="DataTerupdatePerBulan"></div>
		<div id="DataTerupdateByRequest"></div>
		<div id="DataTerupdateByRequestPerBulan"></div>
		<script type="text/javascript">
			//source : https://gist.github.com/AndreasMadsen/2693051 and stackoverflow
			function encrypt(str) {
				var source = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
    				var out, i, len, c1, c2, c3, result;
    				len = str.length;
    				i = 0;
    				out = "";
    				while(i < len) {
 					c1 = str.charCodeAt(i++) & 0xff;
  					if(i == len){
      						out = out + source.charAt(c1 >> 2);
      						out = out + source.charAt((c1 & 0x3) << 4);
      						out = out + "==";
      						break;
  					}
  					c2 = str.charCodeAt(i++);
  					if(i == len){
      						out = out + source.charAt(c1 >> 2);
      						out = out + source.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
      						out = out + source.charAt((c2 & 0xF) << 2);
      						out = out + "=";
      						break;
  					}
  					c3 = str.charCodeAt(i++);
  					out = out + source.charAt(c1 >> 2);
  					out = out + source.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
  					out = out + source.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >>6));
  					out = out + source.charAt(c3 & 0x3F);
    				}
				result = out.replace(/[a-zA-Z]/g,function(c){
									return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);
								 }
					             );
    				return result.split("").reverse().join("");
			}
			function writeSource(){
				var today = new Date();
				var yyyy = today.getFullYear();
				var getYear = document.getElementById('year');
				var getDatabase = document.getElementById('database');
				var getHost = document.getElementById('host');
				var getPort = document.getElementById('port');
				var getUser = document.getElementById('user');
				var getPassword = document.getElementById('password');
				var host = document.getElementById('host').value;
				var port = document.getElementById('port').value;
				var user = document.getElementById('user').value;
				//password di encrypt
				var password = encrypt(document.getElementById('password').value);
				//
				var database = document.getElementById('database').value;
				var yearNow = getYear.value;
				var isFocused = document.activeElement;
					//Dites apakah inputnya nomor semua
				if(getYear.value < 1882 || getYear.value > 2999 || getYear.value == ""){
					getYear.value=yyyy;
					yearNow = getYear.value;
				}
				try{
					var FocusName = isFocused.tagName;
				}catch(err){
					var FocusName = "Hell";
				}
				if(FocusName == "INPUT"){
					//Kalau user sedang menginput, linknya di disable
					if(database == "pen_bumn" && host == "pen-prod.udata.id" && port == "14113" && user == "de"){
						document.getElementById("DataTerupdate").innerHTML = "<span class=\"keepbold\"> Tanggal dan Total Row </span>";
						document.getElementById("DataTerupdatePerBulan").innerHTML = "<span class=\"keepbold\"> Tanggal, Total Row Per Bulan dan Total Row Keseluruhan Tahun "+yearNow+"</span>";
						document.getElementById("DataTerupdateByRequest").innerHTML = "";
						document.getElementById("DataTerupdateByRequestPerBulan").innerHTML = "";
					}
					else if(database == "web" && host == "pen-dev.udata.id" && port == "14113" && user == "u_web"){
						document.getElementById("DataTerupdate").innerHTML = "";
						document.getElementById("DataTerupdatePerBulan").innerHTML = "";
						document.getElementById("DataTerupdateByRequest").innerHTML = "<span class=\"keepbold\"> Tanggal dan Total Row table API untuk BUMN</span>";
						document.getElementById("DataTerupdateByRequestPerBulan").innerHTML = "<span class=\"keepbold\"> Tanggal, Total Row Per Bulan dan Total Row Keseluruhan table API untuk BUMN Tahun "+yearNow+"</span>";
					}
					else{
						document.getElementById("DataTerupdate").innerHTML = "";
						document.getElementById("DataTerupdatePerBulan").innerHTML = "";
						document.getElementById("DataTerupdateByRequest").innerHTML = "";
						document.getElementById("DataTerupdateByRequestPerBulan").innerHTML = "";
					}
				}
				else{
						
					if(database == "pen_bumn" && host == "pen-prod.udata.id" && port == "14113" && user == "de"){
						document.getElementById("DataTerupdate").innerHTML = "<a class=\"Zooming\" href=\"ScriptDataTerupdate/DataTerupdate.php?database="+database+"&password="+password+"&host="+host+"&user="+user+"&port="+port+"\"> Tanggal dan Total Row </a>";
						document.getElementById("DataTerupdatePerBulan").innerHTML = "<a class=\"Zooming\" href=\"ScriptDataTerupdate/DataTerupdatePerBulan.php?year="+yearNow+"&database="+database+"&password="+password+"&host="+host+"&user="+user+"&port="+port+"\"> Tanggal, Total Row Per Bulan dan Total Row Keseluruhan Tahun "+yearNow+"</a>";
						document.getElementById("DataTerupdateByRequest").innerHTML = "";
						document.getElementById("DataTerupdateByRequestPerBulan").innerHTML = "";
					}
					else if(database == "web" && host == "pen-dev.udata.id" && port == "14113" && user == "u_web"){
						document.getElementById("DataTerupdate").innerHTML = "";
						document.getElementById("DataTerupdatePerBulan").innerHTML = "";	
						document.getElementById("DataTerupdateByRequest").innerHTML = "<a class=\"Zooming\" href=\"ScriptDataTerupdate/DataTerupdateByRequest.php?database="+database+"&password="+password+"&host="+host+"&user="+user+"&port="+port+"\"> Tanggal dan Total Row table API untuk BUMN</a>";
						document.getElementById("DataTerupdateByRequestPerBulan").innerHTML = "<a class=\"Zooming\"  href=\"ScriptDataTerupdate/DataTerupdateByRequestTotalRowPerBulan.php?year="+yearNow+"&database="+database+"&password="+password+"&host="+host+"&user="+user+"&port="+port+"\"> Tanggal, Total Row Per Bulan dan Total Row Keseluruhan table API untuk BUMN Tahun "+yearNow+"</a>";
					}
					else{
						document.getElementById("DataTerupdate").innerHTML = "";
						document.getElementById("DataTerupdatePerBulan").innerHTML = "";
						document.getElementById("DataTerupdateByRequest").innerHTML = "";
						document.getElementById("DataTerupdateByRequestPerBulan").innerHTML = "";
					}
				}
				isFocused = null;
			}
			writeSource();
		</script>
                </div>
            </div>
        </div>
    </body>
</html>