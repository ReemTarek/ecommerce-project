<?php

require 'database.php';
$message = '' ;
if(!empty($_POST['email']) && !empty($_POST['password'])):
    
    //Enter the new user in the database
    $sql = "INSERT INTO users (email,password) VALUES (email,password)";
    $stmt = $conn->prepare($sql);
    $stmt -> bindparam(':email', $_POST['email']);
    $stmt -> bindparam(':password', password_hash($_POST['password'],PASSWORD_BCRYPT));

    if( $stmt->excute() ):
        $message = 'successfully created new user';
    else:
        $message = 'failed to create new user';
    endif;    

endif;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Below</title>
	<link rel="stylesheet" type="text/css" href="asses/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=cofortaa' rel='stylesheet' type= 'text/css'>
</head>
<body>
	
    <div class="header">
	    <a href="/">Your App Name</a>
    </div>

    <?php if(!empety($message)): ?>
       <p><?= message ?></p>
    <?php endif; ?>

	<h1>Register</h1>
	<span>or <a href="login.php">login here </a></span>
	
	<form action="register.php" method="POST">
	
		<input type="text" placeholder="Enter your email" name="email">
		<input type="passwodr" placeholder="and password" name="passwodr">
		<input type="passwodr" placeholder="confirm passwodr" name="confirm_passwodr">
		
		<input type="submit">
		

</body>
</html>