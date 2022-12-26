<! DOCTYPE html>
<html>
<html>
<title>najwa.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$id_barang=$_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];
$qty = $_POST['qty'];
$kategori_id = $_POST['kategori_id'];

$a=mysqli_query($koneksi,"insert into barang values('$id_barang','$nama_barang','$kode_barang','$qty','$kategori_id')");
if ($a)
{
header("location:tampil_barang.php");
}
else
{
	echo mysqli_error($koneksi);
	
}
}
$querybarang = "SELECT * FROM barang";
$resultbarang = mysqli_query($koneksi,$querybarang);

?>
<body>
<h2>najwa.com<h/2>
<br/>
<a href="tampilbarang.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA Barang</h3>
<form method="POST">
	<table>
	<tr>
	<td>nama barang</td>
	<td><input type="text" Name="nama_barang"></td>
	</tr>
	<tr>
	<td>kode barang</td>
	<td><input type="text" Name="kode_barang"></td>
	</tr>
	<tr>
	<td>qty</td>
	<td><input type="number" Name="qty"></td>
	</tr>
	<tr>
	<td>kategori id</td>
	<td><select name="kategori_id">
	<option value="">-----Pilih</option>
	<option value="">Elektronik</option>
	<option value="">non elektronik</option>
	
	
	</select>
	</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="save"></td>
		</tr>
	</table>
	</form>
	</body>
	</html>