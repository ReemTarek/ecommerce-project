<?php

session_start();

$id=$_GET['id'];

$img="";
$desc="";
$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');
$select=$db->prepare("SELECT * FROM pro WHERE id=:id ");
$select->execute(array(':id'=>$id));
foreach ($select as $row) {
	$img= $row["img"];
	$desc= $row["des"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>product 1</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="productstyle.css">
</head>
<body>
	<div class="container mx-auto">
		<div class="row justify-content-md-center">
			<div class="col-5">
<img src="<?php echo $img?>" class="rounded-circle" alt="...">
<h5 class="">"<?php echo $desc?>"</h5>
    
    <a href="buy.php" class="btn btn-dark m-3">Buy</a>
</div>
</div>
</div>
</body>
</html>