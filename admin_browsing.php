<?php
include_once 'Navs1.php';
?>
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
	<title>BackEnd</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<style type="text/css">
	body
	{
		background: #FFB6C1;
	}
	.div{
		margin-top: 10%;
	}
	.button{
  width: 30%;
  height: 2%;
   margin: 0 auto;
  background-color: brown;
  margin-top: 7%;
}
</style>
</head>
<body>
	
	<?php
$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');
$select=$db->prepare("SELECT * FROM signup_admin ");
$select->execute();
echo "<table style='margin-top:10%;' width=100% border=2 class='table table-striped table-dark'>";
echo "<tr><th>id</th><th>Name</th><th>Email</th><th>password</th><th>phone</th><th>update</th><th>delete</th></tr>";
$counter=1;
foreach ($select as $row)
{
	$id=$row["id"];
	echo "<tr>";
	echo "<td>".$counter."</td>";
	echo "<td>".$row["name"]."</td>";
	echo "<td>".$row["email"]."</td>";
	echo "<td>".$row["password"]."</td>";
	echo "<td>".$row["phone"]."</td>";
	echo "<td><a href='update_admin.php?id2=$id'>Update</a></td>";
	echo "<td><a href='delete_admin.php?id2=$id'>Delete</a></td>";
	echo "</tr>";
	$counter++;
}

echo "</table>";


?>
<a class="btn text-light button  btn-lg btn-block" href="backend.php">edit on products database</a>
</body>
</html>