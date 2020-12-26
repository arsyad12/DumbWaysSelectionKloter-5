<?php 
include 'koneksi.php';

$id = $_POST['id'];
$content = $_POST['content'];
$image = $_FILES['image']['name'];
$user_id = $_POST['user_id'];
$source  = $_FILES['image']['tmp_name'];
$folder  = './gambar/';

move_uploaded_file($source, $folder.$image);

mysqli_query($connection,"insert into post_tb values('$id','$content','$image','$user_id')");

header("location:home.php");

?>