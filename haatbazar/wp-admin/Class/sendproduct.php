<?php
require_once('class.php');
/*if(!isset($_SESSION['session'])){
header('location:'."http://localhost/7th-sem/haatbazar/wp-admin/");
}*/
if(isset($_FILES['picture'])){
$productname=$_POST['productname'];
$price=$_POST['price'];
$cprice=$_POST['cprice'];
$details=$_POST['details'];
$category=$_POST['category'];
/***************************************************/
//file code
$filename=$_FILES['picture']['name'];
$filesize=$_FILES['picture']['size'];
$temp=$_FILES['picture']['tmp_name'];
$file_type=$_FILES['picture']['type'];
$extension=array("jpeg","jpg","png");
$file_ex=explode('.',$filename);
$file_ext=end($file_ex);
if(!in_array($file_ext,$extension)){
	$error="<script>alert('file extension should be jpeg,jpg,png ')</script>";
}
if($filesize>2097152){
$error="<script>alert('file must be less than 2.9mb ')</script>";
}if(empty($error)==true){
	switch ($category){
	
		case 'cloths':
			move_uploaded_file($temp, "../images/cloths/".$filename);

			break;
		case 'bags':
			move_uploaded_file($temp, "../images/bags/".$filename);
			# code...
			break;
		case 'shoes':
			move_uploaded_file($temp, "../images/shoes/".$filename);
			# code...
			break;
		case 'household':
			move_uploaded_file($temp, "../images/household/".$filename);
			# code...
			break;
		case 'technology':
			move_uploaded_file($temp, "../images/technology/".$filename);
			# code...
			break;
			default:
			echo "worg";
	
	}
}else{
	echo $error;
}
/*************************************************/

$objproduct=new PdoConnection();
$objproduct->insertproduct($productname,$price,$cprice,$details,$category,$filename);
}else{
	//direst
header('location:'."http://localhost/7th-sem/haatbazar/wp-admin/addproduct.php");

}

?>