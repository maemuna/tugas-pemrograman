<?php
include 'koneksi.php';
$id = $_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM ketagori WHERE id_ketagori='$id'") or die(mysqli_error());
if($query_delete){
    header("location:tampil_kategori.php");
}else{
    echo mysqli_error();
}