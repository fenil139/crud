<?php
include 'rec_con.php';
$de_id = $_GET['d_id'];
$query = $obj->query("delete from stu_form where id='$de_id'");

if($query){
	header("location:index.php");
}
else{
	echo "error";
}
?>