<?php
session_start();
 //print_r($_SESSION);
$email =$_POST["email"];
$stat="";
//echo $email;
$password=$_POST["password"];

$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');

$sl=$db->prepare("SELECT * FROM signup");
$sl->execute();
$x=0;

foreach ($sl as $val) {
  if($val['email']==$email&&$val['password']==$password)
    {
      $_SESSION["email"]=$val;
    $x=1;

  //echo "found";
    $stat="successfull login";
  header("location:afterin.php");
    
  
   
    }
}

if($x==0)
{
//echo "not found";
header("location:login.php");
}

  ?>