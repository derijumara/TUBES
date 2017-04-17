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
					  <li role="presentation"><a href="home.php">Home</a></li>
					  <li role="presentation"class="active"><a href="pengaduan.php">Pengaduan</a></li>
					  <li role="presentation"><a href="logout.php">Logout</a></li>
					</ul>
            </div>
	<div align="center">
		<div id="list-data" class="well">
		<h2><u>MASUKAN PENGADUAN </u></h2><br />
		<table width="621" height="355" border="0">
		<form id="form1" method="post" action="insert_pengaduan.php">
		<tr>
        <td>Kode Laporan </td>
        <td>:</td>
        <td><input name="kode_laporan" type="text"  size="35" class="form-control"/></td>
		</tr>
		<tr>
        <td>Nama Pelapor </td>
        <td>:</td>
        <td><input name="nama_pelapor" type="text"  size="35" class="form-control"/></td>
		</tr>
		<tr>
        <td>Tanggal Melapor </td>
        <td>:</td>
        <td><input type="date" class="form-control" id="tgl_melapor" name="tgl_melapor" required/>
		</tr>
		<tr>
        <td>Divisi </td>
        <td>:</td>
        <td><select name="divisi" class="form-control">
            <option selected="selected">===Pilih===</option>
            <option>Kesehatan</option>
            <option>Pertamanan</option>
			</select>
		</td>
		</tr>
		<tr>
        <td>Judul Laporan </td>
        <td>:</td>
        <td><input name="judul_laporan" type="text"  size="15" class="form-control"/></td>
		</tr>
		<tr>
        <td>Tuliskan Laporan Anda </td>
        <td>:</td>
        <td><input type="text" name="laporan" class="form-control"/></td>
		</tr> 
		<tr>
        <td colspan="3"><div align="center">
            <input name="submit" type="submit" value="Input Data" class="btn btn-success btn-small" />
            <input type="reset" name="reset" value="Reset" class="btn btn-warning btn-small"/>
			
			</div></td>
		</tr>
            </div>
		
        </div>	
    </body>  
</html>