<?php
session_start();
session_destroy();
header("Location:hero.php");
exit();



?>