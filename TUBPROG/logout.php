<?php	
	session_start();
	session_destroy();
	header('location:index.php');
	echo "<script type='text/javascript'> alert('Logout Berhasil');</script>";
	
	
?>
