<?php
if(isset($_SESSION['session'])){
unset($_SESSION['session']);
header('location:http://localhost/7th-sem/haatbazar/wp-admin/');
exit();
}

?>