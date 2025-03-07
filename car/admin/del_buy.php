<?php
session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);

$pid=$_GET['pid'];

$sql="delete from buy where b_id='$pid'";
mysql_query($sql);
header('location:buy.php');
?>