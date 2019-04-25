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
			margin-top: 5%;
			padding: 0 35%;
			text-align: left;
			margin-left: 2%;
		}
		.submit{
			margin-left: 39%;
		}
	</style>
</head>
<body>
<?php

$id=$_GET["id2"];
$name="";
$email="";
$password="";
$phone="";
$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');
$select=$db->prepare("SELECT * FROM signup_admin WHERE id=:id ");
$select->execute(array(':id' =>$id ));


foreach ($select as $row) {
	$name=$row["name"];
	$email=$row["email"];
	$password=$row["password"];
	$phone=$row["phone"];
	}

?>

<h1>Update admin Information</h1>



<form name="myform" method="post" action="updateofadmin.php">
  <div class="form-group">
  	<input type="hidden" class="form-control" name="id3" value="<?php echo $id;?>" >
  </div>
    <div class="form-group ">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="name"  name="name" value="<?php echo $name?>">

    </div>
  
    <div class="form-group ">
      <label for="inputPassword4">Email</label>
      <input type="text" class="form-control" id="email" name="email"value="<?php echo $email?>">
    </div>
  </div>

  <div class="form-group ">
    <label for="inputAddress">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="<?php echo $password?>">
  </div>

  <div class="form-group ">
    <label for="inputAddress2">Phone</label>
    <input type="phone" class="form-control" name="phone"value="<?php echo $phone?>">
  </div>

   <button type="submit" class=" submit btn btn-primary"  value="update">Submit</button>
          

           
</form>

</body>
</html>