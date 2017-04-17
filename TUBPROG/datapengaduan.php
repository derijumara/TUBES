<html>
	<head>
		<style>
			table, td, th {
					border: 1px solid black;
			}
			table {
					border-collapse: collapse;
					width: 100%;
			}

			th, td {
					text-align: left;
					padding: 8px;
			}

			tr:nth-child(even){background-color: #f2f2f2}

			th {
					background-color: #4CAF50;
					color: white;
					text-align:center;
			}
		</style>
	</head>
	<body>
		<center>
			<h1>Data Pengaduan (JSON)</h1>
			<table>
				<tr>
					<th>No.</th>
					<th>ID Peminjaman</th>
					<th>Nama Peminjaman</th>
					<th>No. Telp</th>
					<th>ID Ruangan</th>
					<th>Tanggal Peminjaman</th>
				</tr>
					<?php
						$json_url = 'datapengaduan.json';
						$json = file_get_contents($json_url);
						$links = json_decode($json);
						$no = 1;
						foreach($links->datapinjam->data as $row) {
							echo "<tr>
								<td>".$no++."</td>
								<td>".$row->idpeminjaman."</td>
								<td>".$row->namapeminjam."</td>
								<td>".$row->notelp."</td>
								<td>".$row->idruangan."</td>
								<td>".$row->tglpeminjaman."</td>
							</tr>";
						}
					?>
			</table>
		</center>
	</body>
</html>
