<?php
session_start();
if(isset($_SESSION["email"])){ }
else{
  header("Location:login_admin.php ");
}
?>
<!DOCTYPE html>
<html>
<head>

	<title>Update</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<style type="text/css">
		body
		{
			text-align: center;
			background-color: #FFB6C1;
		}
		form
		{
			margin-top: 200px;
			padding: 0 40%;
			text-align: left;
		}
		.submit{
			margin-left: 30%;
		}
	</style>
</head>
<body>
<?php

$id=$_GET["id2"];
$img="";
$des="";
$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');
$select=$db->prepare("SELECT * FROM pro WHERE id=:id ");
$select->execute(array(':id' =>$id ));


foreach ($select as $row) {
	$img=$row["img"];
	$des=$row["des"];
	}

?>

<h1>Update Product Information</h1>




<form action="updateof.php" method="post">
  <div class="form-group">
  	<input type="hidden" class="form-control" name="id3" value="<?php echo $id;?>" >
  </div>
 
  <div class="form-group">
    <label>Image name</label>
    <input type="text" class="form-control" name="img" id="image" value="<?php echo $img?>">
  </div>

   <div class="form-group">
    <label>product description</label>
    <input type="text" name="desc" class="form-control" id="desc" value="<?php echo $des ?>">
  </div>
 
  <button type="submit" class=" submit btn btn-primary"  value="update">Submit</button>
</form>


</body>
</html>
