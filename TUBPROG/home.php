<!DOCTYPE HTML>
<html>
    <head>
        <title>SILAPAR</title>
        <script src="files/js/jquery.min.js"></script>
        <script src="files/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="files/bootstrap/css/bootstrap.min.css">
    </head>
    <body onload="muatDaftarData();">
        <div class="col-md-8 col-md-offset-2" ng-controller="listContactCtrl">
            <div class="page-header">
                <h1>SILAPAR</h1>
					<ul class="nav nav-pills">  
					  <li role="presentation" class="active"><a href="home.php">Home</a></li>
					  <li role="presentation"><a href="pengaduan.php">Pengaduan</a></li>
					  <li role="presentation"><a href="logout.php">Logout</a></li>
					</ul>
            </div>
			<div id="list-data" class="well"/>
				.....
				<div id="list-data" class="well"/>
				<?php 
if (isset ($_POST ['submit'])){
	$nama = $_POST ['txtnama'];
	$nim = $_POST ['txtnim'];
	$string = $_POST ['txt'];
	$b = substr ($nim , 0,6);
	
	switch ($b){
		case '670612' : $angkatan = "2012" ;
		break;
		case '670613' : $angkatan = "2013" ;
		break;
		case '670614' : $angkatan = "2014" ;
		break;
		case '670615' : $angkatan = "2015" ;
		break;
		case '670616' : $angkatan = "2016" ;
		break;
		default :
		$angkatan = "anda bukan anak telkom";
	}
	echo"<table border=1>";
	echo"<tr><td>Nama : </td><td> $nama </td></tr>";
	echo"<tr><td>NIM : </td><td> $nim </td></tr>";
	echo"<tr><td>Angkatan : </td><td> $angkatan </td></tr>";
	echo"<tr><td>Tanggal : </td><td> ". date ("d F Y")." </td></tr>" ;
	echo"<tr><td>String Asli : </td><td> $string </td></tr>";
	echo"<tr><td>Panjang String : </td><td> ". Strlen ($string). "</td></tr>";
	echo"<tr><td>String Dibalik : </td><td> ". Strrev ($string). "</td></tr>";
	echo"<tr><td>Uppercase : </td><td> ".Strtoupper ($string). "</td></tr>";
	echo"<tr><td>Bold , Underline , Italic : </td>
	<td><b><u><i>". $string. " </b></u></i></td></tr>";
	
}
?>
            </div>
            </div>
    </body>
</html>
