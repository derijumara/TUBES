<?php
include("koneksi.php");

$username = $_POST['username'];
$pass = md5($_POST['password']);
$login=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$pass'");
$ketemu = mysqli_num_rows($login);
$r=mysqli_fetch_array($login);
if ($ketemu > 0){
	session_start();
	$_SESSION[namauser]= $r[username];
	$_SESSION[passuser]= $r[password];
	header('location:home.php');
}
else{
	echo "<center><br><br><br><h3> LOGIN GAGAL<br> Username atau Password anda tidak benar<br></center>";
	echo "<center>[ <a href=index.php><b>LOGIN ULANG</b></a> ] </center>";
}

if (isset($_POST['link'])){
		header('location:buatuser.php');
}
	
?>