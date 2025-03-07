<?php
session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("vallume",$con);

$product=$_POST['product'];
$qty=$_POST['qty'];
$price=$_POST['price'];
$total=$_POST['total'];
$des=$_POST['des'];

$date=date('Y-m-d',strtotime($_POST['date']));


$sql="insert into `buy`(`p_id`,`qty`,`price`,`total`,`description`,`date`) values('$product','$qty','$price','$total','$des','$date')";
mysql_query($sql);
header('location:buy.php');
?>