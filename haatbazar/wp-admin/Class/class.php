<?php
$firstname=$_GET['firstname'];
	$lastname=$_GET['lastname'];
	$email=$_GET['email'];
	$password=$_GET['password'];
class DataFetch{
public $firstname;
public $lastname;
public $email;
public $password;
function getdata($firstname,$lastname,$email,$password){
	$this->firstname=$firstname;
	$this->lastname=$lastname;
	$this->email=$email;
	$this->password=$password;
}
function display(){
	return  $this->firstname."lastname".$this->lastname.$this->password.$this->email;
}
}
$df=new DataFetch();
$df->getdata($firstname,$lastname,$email,$password);
echo $df->display();

?>