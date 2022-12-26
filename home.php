<?php 
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['level'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}
?>
<?php if($_SESSION['level']=='1'){
echo "<center><b>Welcome Admin</b></center><br>";
?>
<center><a href="tampil_user.php">Menu User</a></center>
<center><a href="tampil_barang.php">Menu admin</a></center>
<center><a href="tampil_member.php">Menu member</a></center>
<center><a href="tampil_transaksi.php">Menu Transaksi</a></center>
<center><a href="logout.php">log out</a></center>
<?php }else{
echo "<center><b>Welcome User</b></center><br>";
?>
<center><a href="tampil_transaksi1.php">Menu Transaksi</a></center>
<center><a href="logout.php">log out</a></center>
<?php } ?>