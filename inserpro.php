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
	<title>insert product</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	body
	{
		background-color: #FFB6C1;
		text-align: center;
	}
	form
	{
		margin-top: 120px;
		padding: 0 40%;
	}
</style>
<body>

<div class="top text-light bg-dark p-2  ">
	<h1>insert product here</h1>
</div>

<form action="bback.php" method="post">

 
  <div class="form-group">
    <label>Image name</label>
    <input type="text" class="form-control" name="img" id="image">
  </div>

   <div class="form-group">
    <label>product description</label>
    <input type="text" name="des" class="form-control" id="desc" >
  </div>
 
  <button type="submit" class=" submit btn btn-primary" >Submit</button>
</form>
</body>
</html>