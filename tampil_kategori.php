</html>
	<head>
	<title>Najwa.com</title>
	</head>
	<body>
	<h2>Najwa.com</h2>
	<br/>
	<a href="input_kategori.php">+ TAMBAH KATEGORI</a>
	<br/>
	<table border="1">
	<tr>
	<th>No</th>
		<th>Nama Kategori</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from ketagori");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_ketagori']; ?></td>
			<td>
				<a href="edit_ketagori.php?id=<?php echo $d['id_ketagori']; ?>">EDIT</a>
				<a href="hapus_ketagori.php?id=<?php echo $d['id_ketagori']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>