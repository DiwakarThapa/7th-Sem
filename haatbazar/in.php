<?php 
session_start();
if(isset($_POST['add_to_cart'])){
	if (isset($_SESSION['shopcart'])) {
		$item_array_id=array_column($_SESSION['shopcart'],"iditem");
		if(!in_array($_GET['id'],$item_array_id)){
			$count=count($_SESSION['shopcart']);
			echo $count;
			$itemlist=array('iditem'=>$_GET['id'],'itemname'=>$_POST['hidden_name'],'itemprice'>=$_POST['hidden_price'],'itemquantity'=>$_POST['quantity']);
	
			$_SESSION['shopcart'][$count]=$itemlist;
			print_r($_SESSION['shopcart'][$count]);
												
	

		}else{
			echo '<script>alert("item already added")</script>';
			echo '<script>window.location="http://localhost/7th-sem/haatbazar/"<script>';
		}

	} else {
		$itemlist=array('iditem'=>$_GET['id'],'itemname'=>$_POST['hidden_name'],'itemprice'=>$_POST['hidden_price'],'itemquantity'=>$_POST['quantity']);
		$_SESSION['shopcart'][0]=$itemlist;
		}
		
}
	

?>
