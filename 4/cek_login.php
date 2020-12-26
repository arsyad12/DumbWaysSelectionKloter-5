<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$result = mysqli_query($connection,"select * from user_tb where name='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($result);

if($cek > 0){
	$_SESSION['name'] = $username;
    $_SESSION['status'] = "login";
	echo "<script>alert('Sukses Login.');window.location='home.php';</script>";
}else{
    echo "LOGIN Gagal! : ". mysqli_connect_error();
}
?>