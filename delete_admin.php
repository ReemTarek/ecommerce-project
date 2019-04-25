<?php

session_start();
if(isset($_SESSION["email"])){ }
else{
  header("Location:login_admin.php ");
}

$id=$_GET["id2"];

$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');
$select=$db->prepare("DELETE FROM signup_admin WHERE id=:id");
$select->execute(array(':id' =>$id ));
if ($select)
{
	header("location:admin_browsing.php");
}
else
{
	echo "Not Deleted";

}



?>