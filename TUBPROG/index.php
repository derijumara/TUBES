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
                
                <div >
				<h1>SILAPAR</h1>
				</div>
				<div align="right">
				<form  align="right" class = "form-horizontal" method="post" align="center" action="cek_login.php">
				<table>
					<tr>
					<td><input type="text" name="username" placeholder="Masukan username" class="form-control"><br></td>
					</tr>
					<tr>
					<td><input type="text" name="password" placeholder="Masukan password" class="form-control"><br></td>
					</tr>
					<tr><td>
					<input type="submit" name="submit" value="Log in" class="btn btn-success btn-small">
					</td></tr>
					<tr><td>
					<a href="buatuser.php">Belum Daftar?</a>
					</td></tr>
					</table>
				 </form>
				</div>
            </div>
           
            
            <div id="list-data" class="well">
                Tidak ada data...
            </div>
        </div>   
    </body>
</html>