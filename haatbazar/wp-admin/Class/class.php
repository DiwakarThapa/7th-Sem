<?php
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

function showorderproduct(){
    try{

    $this->PdoDbConnection();
    $sql="SELECT * FROM tbl_order";
     $query=$this->handler->prepare($sql);
        $query->execute();
        return $query;
        
        //return $row;
   }catch(PDOException $e){
    echo $e->getMessage();
   } 
        
}



function delete($i){
try{

	$this->PdoDbConnection();
	$sql="delete  FROM tbl_product where pid=?";
     $query=$this->handler->prepare($sql);
    	$query->execute(array($i));
    	return 1;
    	//return $row;
   }catch(PDOException $e){
   	echo $e->getMessage();
   } 
    	
}
function showproduct(){
try{

	$this->PdoDbConnection();
	$sql="SELECT * FROM tbl_product";
     $query=$this->handler->prepare($sql);
    	$query->execute();
    	return $query;
    	
    	//return $row;
   }catch(PDOException $e){
   	echo $e->getMessage();
   } 
    	
}

function verifyLogin($email,$password){
try{
	session_start();

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

function insertproduct($productname,$price,$cprice,$details,$category,$filename){
try{
	$this->PdoDbConnection(); 
$sql="INSERT INTO tbl_product(productname,price,cprice,details,category,filename) VALUES(?,?,?,?,?,?)";
$st=$this->handler->prepare($sql);
$givedata=array($productname,$price,$cprice,$details,$category,$filename);
$st->execute($givedata);
echo "<script>window.location.href='http://localhost/7th-sem/haatbazar/wp-admin/addproduct.php'</script>";
}catch(PDOException $e){
	echo $e->getMessage();

}

}

function insertOrder($cname,$ccontact,$caddress,$cemail,$cplace,$productname,$productquantity,$productprice,$details){
	try{
	$this->PdoDbConnection(); 
$sql="INSERT INTO tbl_order(cname,ccontact,caddress,cemail,cplace,productname,productquantity,productprice,details) VALUES(?,?,?,?,?,?,?,?,?)";
$st=$this->handler->prepare($sql);
$givedata=array($cname,$ccontact,$caddress,$cemail,$cplace,$productname,$productquantity,$productprice,$details);
$st->execute($givedata);
return 1;
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