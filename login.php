<?php
include_once 'Navs1.php';
?>
<?php
session_start();
 //print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>Login </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="lstyle.css">
<script>
	function validate()
	{
     
       var x= document.getElementById("email").value;
      if(x=="" || x==null)
      {
      	alert ("Email must be filled");
      	return false;
      }
       var x= document.getElementById("password").value;
      if(x=="" || x==null)
      {
      	alert ("password must be filled");
      	return false;
      }
     
    
      else
      	{return true;
}
	}
</script>

<style type="text/css">
  .login{
    margin-left: 13%;
  }
</style>
</head>
<body>
	<div class="divsign">
<form name="myform" onsubmit="return validate()" action="login_userBackend.php" method="post">

   
    <div class="form-group col-md-4">
      <label for="inputPassword4">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="enter your email">
    </div>
 
  <div class="form-group col-md-4">
    <label for="inputAddress">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="enter your password">
  </div>
  
  <button type="submit" class=" login btn btn-primary">login</button>

</form>
</div>
<?php
if(isset($stat))
{
    echo "<span style='font-size:26px'>$stat</span>";
}
?>
</body>
</html>