<?php 
include 'koneksi.php';

$id = $_GET['id'];
 
mysqli_query($connection,"delete from user_tb where id='$id'");
 
header("location:home.php");
 
?>