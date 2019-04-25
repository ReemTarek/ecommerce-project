
<?php
session_start();
 print_r($_SESSION);
$email =$_POST["email"];

$password=$_POST["password"];

$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');

$sl=$db->prepare("SELECT * FROM signup_admin");
$sl->execute();
$x=0;

foreach ($sl as $val) {
  if($val['email']==$email&&$val['password']==$password)
    {
    
    $x=1;
  $_SESSION["email"]=$val;
  //echo "found";
  header("location:admin_q.php");
   
    }
}

if($x==0)
{
echo "not found";
header("location:login_admin.php");
}

  ?>