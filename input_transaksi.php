<! DOCTYPE html>
<html>
<html>
<title>najwa.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$tgl_transaksi= $_POST['tgl_transaksi'];
	$no_transaksi= $_POST['no_transaksi'];
	$jenis_transaksi= $_POST['jenis_transaksi'];
	$barang_id= $_POST['barang_id'];
	$jumlah_transaksi= $_POST['jumlah_transaksi'];
	$user_id= $_POST['user_id'];
$a=mysqli_query($koneksi,"insert into transaksi values('$id_transaksi','$tgl_transaksi','$no_transaksi','$jenis_transaksi','$barang_id','$jumlah_transaksi','$user_id')");
if ($a){
header("location:tampil_transaksi.php");
}else{
	echo mysqli_error();
}
}

?>
<body>
<h2>najwa.com<h/2>
<br/>
<a href="tampil_transaksi.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA TRANSAKSI</h3>
<form method="POST">
	<table>
	
	<tr>
	<td>Tanggal Transaksi</td>
	<td><input type="date" Name="tgl_transaksi"></td>
	</tr>
	<tr>
	<td>No Transaksi</td>
	<td><input type="text" Name="no_transaksi"></td>
	</tr>
	<tr>
	<td>Jenis Transaksi</td>
	<td><input type="text" Name="jenis_transaksi"></td>
	</tr>
	<tr>
	<td>Barang Id</td>
	<td><input type="text" Name="barang_id"></td>
	</tr>
	<tr>
	<td>Jumlah Transaksi</td>
	<td><input type="text" Name="jumlah_transaksi"></td>
	</tr>
	<tr>
	<td>User Id</td>
	<td><input type="text" Name="user_id"></td>
	</tr>
	
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>
	
	