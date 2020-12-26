<?php 


include 'koneksi.php';

$id = $_POST['id'];
$content = $_POST['content'];
$image = $_FILES['image']['name'];
$user_id = $_POST['user_id'];


if($image != "") {
    $ekstensi_diperbolehkan = array("gif", "jpg", "jpeg", "png");
    $x = explode('.', $image);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['image']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$image; 
    
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  
        move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
    
        mysqli_query($connection,"update post_tb set  content='$content', image='$nama_gambar_baru', user_id='$user_id' where id='$id'");
        
        echo "<script>alert('Data berhasil diubah.');window.location='home.php';</script>";
    }
    } else {
    
        mysqli_query($connection,"update post_tb set  content='$content',  user_id='$user_id' where id='$id'");
       
        echo "<script>alert('Data berhasil diubah.');window.location='home.php';</script>";
    
    }
