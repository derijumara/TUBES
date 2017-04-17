<?php
	include('koneksi.php');

	if (isset($_POST['submit'])){
		$kode_laporan=$_POST['kode_laporan'];
		$nama_pelapor=$_POST['nama_pelapor'];
		$tgl_melapor=$_POST['tgl_melapor'];
		$divisi=$_POST['divisi'];
		$judul_laporan=$_POST['judul_laporan'];
		$laporan=$_POST['laporan'];
		
		$insertan = "INSERT INTO `pengaduan`(`nama_pelapor`, `tanggal_melapor`, `divisi`, `laporan`, `judul_laporan`, `kode_laporan`) VALUES ('$nama_pelapor','$tgl_melapor','$divisi','$laporan','$judul_laporan','$kode_laporan')";
		
		$query = mysqli_query($koneksi,$insertan);
		if($query){
			echo "
			<script>
				alert('Peminjaman ruangan ".$kode_laporan." pada ".$tgl_melapor." berhasil disimpan. Peminjaman dilakukan oleh saudara/i atas nama: ".$nama_pelapor.".');
				window.location.href='home.php';
			</script>";
		}else{
			echo "
			<script>
				alert('Peminjaman ruangan ".$kode_laporan." pada ".$tgl_melapor." gagal disimpan. Peminjaman dilakukan oleh saudara/i atas nama: ".$nama_pelapor.".');
				window.location.href='home.php';
			</script>";
		}
	}

?>
