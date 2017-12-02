<?php
require_once('Class/class.php');
if(isset($_GET['id'])){
$id=$_GET['id'];
$db=new PdoConnection();
if($db->delete($id)===1){
	echo "<script>window.location.href='http://localhost/7th-sem/haatbazar/wp-admin/showproduct.php'</script>";
	}
}
?>