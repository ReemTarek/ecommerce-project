
<?php
include_once 'Navs1.php';
?>

<?php


$db=new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','Egypt2016');

    
$insertion =$db->prepare("INSERT INTO contactus(email,phone,comment) VALUES (:email,:phone,:comment)");
	if($insertion->execute( array(":email" => $_POST['email'],":phone" => $_POST['phone'],":comment" => $_POST['comment'] )))
		{
			$stat="successful insertion";
		}
		else
		{
			$stat="somthing wrong......";
		}





?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<style type="text/css">
	body{
		background-color: #FBEEE6;
	}
	form{
		margin-top:10%;
		padding: 0% 35%; 
		/*background-color: rgba(0,0,0,0.3);*/

	}
	.sub{
		margin-left: 34%;

	}
</style>
</head>
<body>

<form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email" name="email" >
  </div>
 
  <div class="form-group">
    <label for="exampleInputphone1">phone</label>
    <input type="phone" class="form-control" id="phone" placeholder="enter your phone" name="phone">
  </div>

  <label for="comment">Comment:</label>
  <textarea class="form-control bg-light" rows="5" cols="2" id="comment" name="comment" placeholder="please enter your comment"></textarea>
     <button type="submit" class="btn btn-primary botton mt-3" style="margin-left: 37%" name="<?php
            if(isset($_GET['action']))
            {
                echo "insert";
            }
            
            ?>">Send message</button>

</form>


</body>
</html>