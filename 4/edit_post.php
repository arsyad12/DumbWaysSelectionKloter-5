<!DOCTYPE html>
<html>
<head>
	<title>Ways Gram</title>
</head>
<body>
	<br/>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    
    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($connection,"select * from post_tb where id ='$id'");
	while($d = mysqli_fetch_array($data)){
	?>
	
	<div class="container">
	
	<h3>EDIT POST</h3>

	<form method="POST" action="update_post.php" enctype="multipart/form-data" >


				<div class="form-group">
    			<input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
  				</div>
            
		
				
				            
           
				<div class="form-group">
    			<label for="exampleFormControlInput1">CONTENT</label>
    			<input type="text" class="form-control" name="content" value="<?php echo $d['content']; ?>">
  				</div>
		
            

				<img src="gambar/<?php echo $d['image'];?>" style="width: 120px;float: left;margin-bottom: 5px;">
				<div class="custom-file">
				<input type="file" class="custom-file-input" name="image">
				<label class="custom-file-label" for="customFile">Choose file</label>
				</div>



            
          
				<div class="form-group">
    			<label for="exampleFormControlInput1">USER ID</label>
    			<input type="number" class="form-control" name="user_id" value="<?php echo $d['user_id']; ?>">
  				</div>
         
			
				  <button type="submit" class="btn btn-success">SAVE CHANGE</button>
				  <a href="index.php" class="btn btn-warning">KEMBALI</a>
			
	
	</form>
</div>
	<?php 
	}
	?>
</body>
</html>



