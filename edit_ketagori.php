<!DOCTYPE>
<html>
<head>
      <title>Najwa.com</title>
</head>
<?php
//koneksi database
include 'koneksi.php';
if(isset($_POST['save'])){
        $id=$_POST['id'];
		$nama_ketagori =$_POST['nama_ketagori '];
$update=mysqli_query($koneksi,"UPDATE ketagori SET nama_ketagori='$nama_ketagori'WHERE id_ketagori='$id'");
if($update){
	header("location:tampil_kategori.php");
	}else{
		echo mysqli_error();
	}
}

$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM ketagori WHERE id_ketagori='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
	<h2>tabel ketagori</h2>
	<br/>
	<a href="tampil_kategori.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit DATA ketagori</h3>
	<form method="POST">
		<table>
			<tr>			
				<td>nama ketagori</td>
				<input type="hidden" name="id" value="<?php echo $data['id_ketagori'];?>"/>
				<td><input type="text" name="nama_ketagori" required value="<?php echo $data['nama_ketagori'];?>"></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" name="save"></td>
</tr>			
			</table>
			</form>
	<?php }?>
	</body>
	</html>