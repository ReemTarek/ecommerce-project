<?php

$id=$_POST["id3"];
$image=$_POST["img"];
$desc=$_POST["desc"];


$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');
$select=$db->prepare("UPDATE pro SET img=:image, des=:des WHERE id=:id");

$select->execute( array(':image' =>$image ,':des'=>$desc,':id'=>$id ));

if ($select)
{
	header("location:backend.php");
}
else
{
	echo "Not updated";

}


?>