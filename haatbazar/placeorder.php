<?php
require_once('wp-admin/Class/class.php');

if(isset($_POST['submit'])){
$name=$_POST['name'];
$contactno=$_POST['contactno'];
$email=$_POST['email'];
$address=$_POST['address'];
$place=$_POST['place'];
$details=$_POST['details'];
function orderregis($name,$contactno,$address,$email,$place,$details){
$db=new PdoConnection();
	foreach ($_SESSION['shopcart'] as $key => $value) {
		$db->insertOrder($name,$contactno,$address,$email,$place,$value['itemname'],$value['itemquantity'],$value['itemprice'],$details);
	}
	return 1;
}

$tue=orderregis($name,$contactno,$address,$email,$place,$details);
if($tue===1){
unset($_SESSION['shopcart']);
echo "<script>window.location.href='http://localhost/7th-sem/haatbazar'</script>";

}

}


?>