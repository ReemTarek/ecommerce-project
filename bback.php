<?php

session_start();
if(isset($_SESSION["email"])){ }
else{
  header("Location:login_admin.php ");
}

$img=$_POST["img"];
$des=$_POST["des"];
echo $img;
echo $des;
echo "<br>";
$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');
 $insertion =$db->prepare("INSERT INTO pro(img,des) VALUES (:imag,:descr)");
$insertion->execute( array(":imag" => $img, ":descr" => $des ));
		// {
 	// 		$stat="successful insertion";
 	// 	}
 	// 	else
 	// 	{
 	// 		$stat="somthing wrong......";
 	// 	}
if ($insertion)
{
	header("location:backend.php");
}

// echo $stat;



?>