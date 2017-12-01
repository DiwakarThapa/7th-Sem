<?php
session_start();
class PdoConnection{
private $session;
public $handler;
function PdoDbConnection(){
	try{
	
		$this->handler=new PDO('mysql:host=127.0.0.1;dbname=haatbazar','root','');
		$this->handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			die("Something go wrong with connection!!!");
//$e->getMessage();
}}

function verifyLogin($email,$password){
try{

	$sql="SELECT * FROM tbl_user where email=? and password=?";
    $query=$this->handler->prepare($sql);
    $query->execute(array($email,$password));
    if($query->rowCount()==1){
    	while($row=$query->fetch()){
    		if($row['email']==$email && $row['password']==$password){
    			$session=$row['email'].date('Y-m-d H:i:s');
    			$_SESSION['session']=$session;
    			return 1;
    		}
    	}
    }else{
    			return 0;
    		}
}catch(PDOException $e){
echo $e->getMessage();
}

}





function insert($df){
try{
	$status=0;
	$sql="INSERT INTO tbl_user(firstname,lastname,password,email,status,remark) VALUES(?,?,?,?,?,NOW())";
		$stm=$this->handler->prepare($sql);
		$stm->execute($df->givedata());
	echo "inserted successfully";
}catch(PDOException $e){
echo $e->getMessage();
}
}

}

class DataFetch{
public $firstname;
public $lastname;
public $email;
public $password;
public $status=1;
public $data;

function getdata($firstname,$lastname,$email,$password){
	$this->firstname=$firstname;
	$this->lastname=$lastname;
	$this->email=$email;
	$this->password=$password;
}
function givedata(){
	$this->data=array($this->firstname,$this->lastname,$this->password,$this->email,$this->status);
	return $this->data; 
}
function display(){
	return  $this->firstname."lastname".$this->lastname.$this->password.$this->email;
}}




?>