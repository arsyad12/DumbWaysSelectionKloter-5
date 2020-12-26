<!DOCTYPE html>
<html>
<head>
	<title>IMAGE BLOG</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br/>

<div class="container">
	
	<h3>ADD POST</h3>

	<form method="POST" action="simpan_post.php" enctype="multipart/form-data" >


				<div class="form-group">
				<label for="exampleFormControlInput1">ID POST</label>
    			<input type="number" class="form-control" name="id">
  				</div>
            
		
			   
				<div class="form-group">
    			<label for="exampleFormControlInput1">CONTENT</label>
    			<input type="text" class="form-control" name="content">
  				</div>
		
				<div class="custom-file">
				<input type="file" class="custom-file-input" name="image">
				<label class="custom-file-label" for="customFile">ADD IMAGE</label>
				</div>

          
				<div class="form-group"> 			
				<label>USER ID</label>
				<select class="form-control" name="user_id" id="exampleFormControlSelect1">
				<option disabled selected> Pilih ID User </option>
				<?php 
					include 'koneksi.php';
					$data = mysqli_query($connection,"select * from user_tb");
					while($d = mysqli_fetch_array($data)){
				?>
				<option value="<?=$d['id']?>"><?=$d['id']?></option>
				<?php
				}
				?>
			</select>
			</div> 
         
			
				  <button type="submit" class="btn btn-success">ADD BLOG</button>
				  <a href="home.php" class="btn btn-warning">KEMBALI</a>
			
	
	</form>
</div>

	
</body>
</html>