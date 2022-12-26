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
	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];
	$status=$_POST['status'];
	$update=mysqli_query($koneksi,"UPDATE user SET username='$username', level='$level',password=$password, status='$status' WHERE id_user='$id'");
	if($update){
		header("location:tampil_user.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
	<h2>Pemograman 3 2022</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit DATA USER</h3>
	<form method="POST">
		<table>
			<tr>			
				<td>Name</td>
				<input type="hidden" name="id" value="<?php echo $data['id_user'];?>"/>
				<td><input type="text" name="username" required value="<?php echo $data['username'];?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" required value="<?php echo $data['password'];?>"></td>
			</tr>
			<tr>
				<td>level</td>
				<td><select name="level" required>
				       <option value="">-----Pilih--------</option>
					    <option value="1">Admin</option>
				 		<option value="2">Staff</option>
						<option value="3">Spv</option>
						<option value="4">Mgr</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>status</td>
				<td><select name="status" required>
				       <option value="">-----Pilih</option>
					    <option value="4">Aktif</option>
				 		<option value="0">Tdk aktf</option>
				</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save"></td>
			</tr>		
		</table>
	</form>
<?php	}?>
</body>
</html>