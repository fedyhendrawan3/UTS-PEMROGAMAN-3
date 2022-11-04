<html>
	<head>
		<title>CRUD - SEDERHANA</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
		<h2>MODULE LEVEL</h2>
		<br/>
		<a href="tambah_level.php" class="btn btn-outline-primary" tabindex="-1" role="button">TAMBAH LEVEL</a>
		<br/>
		<br/>
		<table border="1" class="table">
			<tr>
				<th>No</th>
				<th>Nama Level</th>
                <th>Nama Tipe</th>
				<th>OPSI</th>
			</tr>
			<?php
				include 'koneksi.php';
				$no = 1;
				$query = mysqli_query($koneksi,"SELECT * FROM level
                                                LEFT JOIN tipe on level.id_tipe = tipe.id_tipe
                                    ");
				while($data = mysqli_fetch_array($query))
				{
			?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $data['nama_level']; ?></td>
                <td><?php echo $data['nama_tipe']; ?></td>
				<td>
					<a href="edit_kategori.php?id=<?php echo $data['id']; ?>">EDIT</a>
					<a href="hapus_kategori.php?id=<?php echo $data['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>