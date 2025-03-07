<?php
session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);


if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$query = "delete from `customer_table` where cust_id='".$id."' ";
		mysql_query($query);
		header("Location:customer.php");
		exit;
	}
?>