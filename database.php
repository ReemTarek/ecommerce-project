<?php

$server='locahost';
$username='root';
$password='root';
$database='project';

try{
	$conn = new PDO ("mysql:host=$server;dbname=$database;", $username, $password);
	} catch(PDOEXception $e){
     die("Connection failed:" . $e->getMessage());
}

?>