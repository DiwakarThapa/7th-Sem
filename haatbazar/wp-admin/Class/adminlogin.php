<?php
$eml=$_POST['email'];
$pw=$_POST['pw'];

require_once('class.php');
if(!isset($eml) && !isset($pw)){
	echo "empty error";
}else{
$db=new PdoConnection();
$db->PdoDbConnection();
echo $db->verifyLogin($eml,$pw);


}


?>