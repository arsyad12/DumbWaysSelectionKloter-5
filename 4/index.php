<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>

	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">


<div class="container col-md-3">

<div class="card" style="width: 20rem;">
  <div class="card-body">
	<h5 class="card-title text-center">LOGIN FORM</h5>
  
				<div class="form-group">
    			<label for="exampleFormControlInput1">ID</label>
    			<input type="text" class="form-control" name="username" placeholder="Masukkan username">
				  </div>

				<div class="form-group">
    			<label for="exampleFormControlInput1">PASSWORD</label>
    			<input type="password" class="form-control"  name="password" placeholder="Masukkan password">
				  </div>
				  
				  <input class="btn btn-primary" type="submit" value="LOGIN">
  </div>
</div>
</div>	
	</form>
</body>
</html>