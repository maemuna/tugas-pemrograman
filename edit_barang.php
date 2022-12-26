<!DOCTYPE html>
<html>
<head>
	<title>Najwa.com</title>
</head>
<?php 
// koneksi database
include 'koneksi.php';
if(isset($_POST['save'])){
	$id=$_POST['id'];
$nama_barang = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];
$qty = $_POST['qty'];
$ketagori_id = $_POST['ketagori_id'];
$update=mysqli_query($koneksi," UPDATE barang SET nama_barang='$nama_barang',kode_barang='$kode_barang',qty='$qty',ketagori_id='$ketagori_id' WHERE id_barang='$id'");
	if ($update){		
	header("location:tampil_barang.php");
 }else{
	echo mysqli_error($koneksi);
    }
  }
  
  $queryketagori ="SELECT * FROM ketagori";
  $resultketagori =mysqli_query($koneksi,$queryketagori);

$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM barang LEFT JOIN ketagori on barang.ketagori_id=ketagori.id_ketagori WHERE barang.id_barang='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
    <h2>tabel barang</h2>
	<br/>
	<a href="tampil_barang.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA BARANG</h3>
	<form method="POST">
	    <table>
		    <tr>
			   <td>nama barang</td>
			   <input type="hidden" name="id" value="<?php echo $data['id_barang'];?>"/>
			   <td><input type="text" name="nama_barang"required value="<?php echo $data['nama_barang'];?>"></td>
			</tr>
			<tr>
			<td>kode barang</td>
			<td><input type="text" name="kode_barang"></td>
		</tr>
		<tr>
		   <td>qty</td>
		   <td><input type="number" name="qty"></td>
		          
		</tr>
		<tr>
	      <td>kategori barang</td>
		  <td><select name="ketagori_id">
		  <option value="">-----pilih</option>
			   
			   <?php
			   while ($dataketagori=mysqli_fetch_array($resultketagori))
			   {
				   echo "<option value=$dataketagori[id_ketagori]>$dataketagori[nama_ketagori]</option>";
			   }
			   ?>
		</select>
		</td>
	</tr>
	<tr>
	     <td></td>
		 <td><input type="submit" name="save"></td>
	 </tr>
    </table>
   </form>
   <?php  }?>
</body>
</html>