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
	
	<h3>ADD USER</h3>

	<form method="POST" action="simpan_user.php" enctype="multipart/form-data" >


				<div class="form-group">
				<label for="exampleFormControlInput1">ID USER</label>
    			<input type="number" class="form-control" name="id">
  				</div>
            
		
			   
				<div class="form-group">
    			<label for="exampleFormControlInput1">NAMA USER</label>
    			<input type="text" class="form-control" name="names">
  				</div>
		
				<div class="custom-file">
				<input type="file" class="custom-file-input" name="foto">
				<label class="custom-file-label" for="customFile">ADD IMAGE</label>
				</div>

          
				<div class="form-group">
    			<label for="exampleFormControlInput1">EMAIL</label>
    			<input type="text" class="form-control" name="email">
  				</div>

				  <div class="form-group">
    			<label for="exampleFormControlInput1">Password</label>
    			<input type="password" class="form-control" name="password">
  				</div>
         
			
				  <button type="submit" class="btn btn-success">ADD BLOG</button>
				  <a href="home.php" class="btn btn-warning">KEMBALI</a>
			
	
	</form>
</div>

	
</body>
</html>