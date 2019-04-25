<?php
session_start();
$name = $email = $password=$phone_error="";
$name = $email = $password=$phone="";
$db=new PDO('mysql:host=localhost;dbname=fdb;charset=utf8','root','123456');


$insertion =$db->prepare("INSERT INTO signup(name,email,password,phone) VALUES (:name,:email,:password,:phone)");
  if($insertion->execute( array(":name" => $_POST['name'],":email" => $_POST['email'],":password" => $_POST['password'],":phone" => $_POST['phone'])))
    {
      $_SESSION["email"]=$_POST['email'];
      header("Location:login.php");
    }
    else
    {
      header("Location:signup.php");
    }


?>