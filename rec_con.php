<?php
$obj = new mysqli('localhost','root','','student1');

if($obj->connect_errno != 0){
	echo $obj->connect_error;
	exit;
}
?>