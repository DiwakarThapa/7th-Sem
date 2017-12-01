<?php
$firstname=$_GET['firstname'];
	$lastname=$_GET['lastname'];
	$email=$_GET['email'];
	$password=$_GET['password'];
require_once('class.php');
$df=new DataFetch();
$db=new PdoConnection();
$df->getdata($firstname,$lastname,$email,$password);
//echo $df->display();
$db->PdoDbConnection();
$db->insert($df);
?>