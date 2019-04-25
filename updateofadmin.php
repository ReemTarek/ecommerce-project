<?php

$id=$_POST["id3"];
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];


$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');
$select=$db->prepare("UPDATE signup_admin SET name=:name, email=:email , password=:password,phone=:phone WHERE id=:id");

$select->execute( array(':name' =>$name ,':email' =>$email,':password' =>$password,':phone'=>$phone,':id'=>$id ));

if ($select)
{

	
	header("location:admin_browsing.php");
}
else
{
	echo "Not updated";

}


?>