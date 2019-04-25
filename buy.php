<?php
include_once 'Navs.php';
session_start();
if(isset($_SESSION["email"])){ }
else{
  header("Location:nobuy.php ");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	.main{
		    background-color: rgba(0,0,0,0.3);
    text-align: center;
    color: white;
        margin: 127px 180px;
    padding: 134px;

	}
	body{
		background-color: #FFF0F5;
	}
</style>
</head>

<body>
<div class="main">
<h1>added to your cart and we will contact you soon </h1>
</div>

</body>
</html>