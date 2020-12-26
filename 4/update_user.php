<?php 


include 'koneksi.php';

$id = $_POST['id'];
$names = $_POST['names'];
$foto = $_FILES['foto']['name'];
$email = $_POST['email'];
$password = $_POST['password'];


if($foto != "") {
    $ekstensi_diperbolehkan = array("gif", "jpg", "jpeg", "png");
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$foto; 
    
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  
        move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
    
        mysqli_query($connection,"update user_tb set  name='$names', foto='$nama_gambar_baru', email='$email', password='$password' where id='$id'");
        
        echo "<script>alert('Data berhasil diubah.');window.location='home.php';</script>";
    }
    } else {
       
        mysqli_query($connection,"update user_tb set  name='$names', email='$email', password='$password' where id='$id'");
        
        echo "<script>alert('Data berhasil diubah.');window.location='home.php';</script>";
    
    }
