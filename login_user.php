
<?php
$email =$_POST["email"];
echo $email;
$password=$_POST["password"];

$db=new PDO('mysql:host=localhost;dbname=fdb;charset=utf8','root','123456');

$sl=$db->prepare("SELECT * FROM signup");
$sl->execute();
$x=0;

foreach ($sl as $val) {
  if($val['email']==$email&&$val['password']==$password)
    {
    
    $x=1;

  echo "found";
  
   
    }
}

if($x==0)
{//header("location:login_user.php");
echo "not found";
}

  ?>
