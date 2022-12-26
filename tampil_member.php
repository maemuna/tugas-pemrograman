</html>
	<head>
	<title>Najwa.com</title>
	</head>
	<body>
	<h2>Najwa.com</h2>
	<br/>
	<a href="input_member.php">+ TAMBAH MEMBER</a>
	<br/>
	<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>level</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from member");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['level']; ?></td>
			<td>
				<a href="edit_member.php?id=<?php echo $d['id_member']; ?>">EDIT</a>
				<a href="hapus_member.php?id=<?php echo $d['id_member']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>