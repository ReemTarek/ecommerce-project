<?php
include_once 'Navs1.php';
?>

<?php
 session_start();
$name = $email = $password=$phone_error="";
$name = $email = $password=$phone="";
$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');


$insertion =$db->prepare("INSERT INTO signup_admin(name,email,password,phone) VALUES (:name,:email,:password,:phone)");
  if($insertion->execute( array(":name" => $_POST['name'],":email" => $_POST['email'],":password" => $_POST['password'],":phone" => $_POST['phone'] )))
    {
      $_SESSION["email"]=$_POST['email'];
    header("Location:admin_q.php");
    }
    else
    {
      $stat="somthing wrong......";
    }






?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="sstyle.css">
<script>
	function validate()
	{
      var x= document.getElementById("name").value;
      if(x=="" || x==null)
      {
      	alert ("Name must be filled");
      	return false;
      }
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
       var x= document.getElementById("phone").value;
      if(x=="" || x==null)
      {
      	alert ("phone must be filled");
      	return false;
      }
      
      else
      	{return true;
}
	}
</script>
<style type="text/css">
  .signup{
    margin-left: 12%;
  }
  form{
    margin-top:7%; 
  }
</style>
</head>
<body>
	<div class="divsign">
<form name="myform" onsubmit="return validate()" method="post" action="">
  <div class="">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="name" placeholder="enter your name" name="name">
    </div>
  
    <div class="form-group col-md-4">
      <label for="inputPassword4">Email</label>
      <input type="text" class="form-control" id="email" placeholder="enter your email" name="email">
    </div>
  </div>

  <div class="form-group col-md-4">
    <label for="inputAddress">Password</label>
    <input type="password" class="form-control" id="password" placeholder="enter your password" name="password">
  </div>

  <div class="form-group col-md-4">
    <label for="inputAddress2">Phone</label>
    <input type="phone" class="form-control" name="phone" placeholder="enter your phone">
  </div>

  <button type="submit" class="signup btn btn-primary" name="<?php
            if(isset($_GET['action']))
            {
                echo "insert";
            }
          

            ?>">Sign up</button>
</form>
<?php
if(isset($stat))
{
    echo $stat;
}
?>
</div>
</body>
</html>