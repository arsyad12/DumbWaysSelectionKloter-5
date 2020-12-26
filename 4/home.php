<!DOCTYPE html>
<html>
<head>
	<title>WAYS GRAM</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
 


<div class="container">
<h2 class="h2">WAYS GRAM
	<a href="tambah_post.php" class="btn btn-primary button1" >+ ADD CONTENT</a>
	<a href="tambah_user.php" class="btn btn-primary button1" >+ ADD USER</a>
	<a href="index.php" class="btn btn-danger button1" >LOGOUT</a>
	<br/><br/><br/><br/>
</h2>
</div>



		
<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($connection,"select * from post_tb");
		while($d = mysqli_fetch_array($data)){
		$data2 = mysqli_query($connection,"select * from user_tb");
		while($d2 = mysqli_fetch_array($data2)){
?>

<div class="container">

<div class="row row-cols-1 col-md-2 float-sm-left">
	<img src="gambar/<?php echo $d2['foto'] ?>" class="rounded-circle" height="150px" alt="...">
</div>

<div class="row row-cols-1 col-md-2" >
<p><?php echo '&nbsp'; ?></p>
</div>

<div class="row row-cols-1 col-md-2" >
<p><?php echo '&nbsp';  ?></p>
</div>

<div class="row row-cols-1 col-md-2" >
<p><?php echo $d2['name']; ?></p>
</div>

    <div class="row row-cols-1 col-md-10 float-sm-left " >
    <div class="col mb-4">
    <div class="card">
	<img src="gambar/<?php echo $d['image'] ?>"class="card-img-top" alt="...">
    <div class="card-body">
  	<h4 class="card-title"><?php echo $d2['name']; ?></h4>
	<p class="card-text"><?php echo $d['content']; ?></p>
	<a href="edit_post.php?id=<?php echo $d['id']; ?>" class="btn btn-primary">EDIT</a>
	<a href="hapus_post.php?id=<?php echo $d['id'];?>" class="btn btn-primary">HAPUS</a> 
	</div>
  </div>
  </div>
  </div>
  </div>
  </div>
			<?php 
		
		}
	}
		?>





</body>
</html>