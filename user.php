
<! DOCTYPE html>
<html>
<html>
<title>najwa.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$id_user=$_POST['id_user'];
	$nama = $_POST['nama'];
	$password = $_POST['password'];
$level = $_POST['level'];
$status = $_POST['status'];
$a=mysqli_query($koneksi,"insert into user values('$id_user','$nama','$password','$level','$status')");
if ($a){
header("location:tampil_user.php");
}else{
	echo mysqli_error();
}
}
$queryuser = "SELECT * FROM user";
$resultuser = mysqli_query($koneksi,$queryuser);
?>
<body>
<h2>najwa.com<h/2>
<br/>
<a href="tampiluser.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA USER</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama</td>
	<td><input type="text" Name="nama"></td>
	</tr>
	<tr>
	<td>Password</td>
	<td><input type="Password" Name="password"></td>
	</tr>
	<tr>
	<td>level</td>
	<td><select name="level">
	<option value="">-----Pilih</option>
	<option value="1">Admin</option>
	<option value="2">Staf</option>
	<option value="3">Spv</option>
	<option value="4">mgr</option>
	</select>
	<td>
	</tr>
	<tr>
	<td>status</td>
	<td><select name="status">
	<option value ="">-----Pilih</option>
	<option value="1">Aktif</option>
	<option value ="0">Tdk aktf</option>
	</select>
	</td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>
	
	
