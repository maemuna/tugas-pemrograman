<! DOCTYPE html>
<html>
<html>
<title>Najwa.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$nama_ketagori= $_POST['nama_ketagori'];
$a=mysqli_query($koneksi,"insert into ketagori values('','$nama_ketagori')");
if ($a){
header("location:tampil_kategori.php");
}else{
	echo mysqli_error();
}
}

?>
<body>
<h2>Najwa.com<h/2>
<br/>
<a href="tampil_kategori.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA KATEGORI</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama Kategori</td>
	<td><input type="text" Name="nama_ketagori"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>