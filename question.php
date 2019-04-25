<?php
include_once 'Navs1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<style type="text/css">
	.navs{
  background-color:rgba(0,0,0,0.4);
}
.main{
  width: 40%;
  height: 30%;
  background-color: #e0b8ad;
  opacity: 0.8;
  margin: 0 auto;
  margin-top: 10%;
}
body{

  background-color:rgb(0,0,0,0.1); ;
  background-position: center;
  
  background-size: cover;

}
.button{
  width: 23%;
  height: 2%;
   margin: 0 auto;
  background-color: brown;
}
</style>

</head>
<body>
<div class="main" style="padding: 6%">
<h4 class="text-center"> you want to login as: </h4>
  <a class="btn text-light button  btn-lg btn-block" href="login.php">user</a>
<a class="btn text-light button  btn-lg btn-block" href="login_admin.php">admin</a>
</div>
</body>
</html>