<?php
include_once 'Navs.php';
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
</style>
</head>
<body>

<?php

$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');
$select=$db->prepare("SELECT * FROM pro ");
$select->execute();


echo "<table style='margin-top:10%;' width=100% border=2 class='table table-striped table-dark'>";
echo "<tr><th>id</th><th>img name</th><th>description</th><th>view</th><th>update</th><th>delete</th></tr>"; 
$counter=1;
foreach ($select as $row)
{
	$id=$row["id"];
	echo "<tr>";
	echo "<td>".$counter."</td>";
	echo "<td>".$row["img"]."</td>";
	echo "<td>".$row["des"]."</td>";
	echo "<td><a href='p1.php?id2=$id'>View</a></td>";
	echo "<td><a href='update.php?id2=$id'>Update</a></td>";
	echo "<td><a href='delete.php?id2=$id'>Delete</a></td>";
	echo "</tr>";
	$counter++;
}

echo "</table>";

echo "<button style='margin-left:42%;'><a class href='inserpro.php' style='color:#922B21  ; text-decoration:none; padding: 8px ; display:inherit;text-align:center; '><h4>Insert New Product</h4></a><br></button>";
?>

</body>
</html>
