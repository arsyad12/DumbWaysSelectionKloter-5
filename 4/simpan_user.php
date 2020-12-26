<?php 
include 'koneksi.php';

$id = $_POST['id'];
$names = $_POST['names'];
$foto = $_FILES['foto']['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$source  = $_FILES['foto']['tmp_name'];
$folder  = './gambar/';

move_uploaded_file($source, $folder.$foto);

mysqli_query($connection,"insert into user_tb values('$id','$names','$foto','$email','$password')");

header("location:home.php");

?>