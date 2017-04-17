<!DOCTYPE html>
<html>
<head>
	<title>SILAPAR</title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="col-md-8 col-md-offset-2" ng-controller="listContactCtrl">
		<div id="content" >
			<div id="list-data" class="well">
				<form class = "form-horizontal" method="post" align="center">
				<table>
				<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" class="form-control" /></td>
				</tr>
				<tr>
				<td>Password (1)</td>
				<td>:</td>
				<td><input type="text" name="pass1" class="form-control" /></td>
				</tr>
				<td>Password (2)</td>
				<td>:</td>
				<td><input type="text" name="pass2" class="form-control" /></td>
				</tr>
				<tr>
				<td colspan="3"><div align="center">
					<input name="Submit" type="submit" value="Buat User" class="btn btn-success btn-small" />
					<input type="reset" name="reset" value="Reset" class="btn btn-warning btn-small"/>
			
					</div></td>
				</tr>
				</table>
				</form>
			</div>
		</div> 
	</div> 
</body>
</html>

<?php 
	include("koneksi.php");
	if (isset($_POST['submit'])){
		$user=$_POST['username'];
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
		$pass=md5($_POST['pass1']);
		$query="insert into user values('$user','$pass')";
		$sql=mysqli_query($koneksi,$query);
		if($pass1 != $pass2){
			echo "<script type='text/javascript'> alert('Password 1 dan Password 2 Berbeda !');</script>";
			
		}else{
			if($sql==true){
				header('location:index.php');
				echo "<script type='text/javascript'> alert('Data Berhasil Ditambahkan !');</script>";
				
			}
		}
	}
?>
