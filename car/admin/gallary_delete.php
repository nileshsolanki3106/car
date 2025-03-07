<?php
session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);

$id=$_GET['id'];

list($image)=mysql_fetch_array(mysql_query("select path from gallary where id='$id'"));
$delpath="gallary/".$image;
unlink($delpath);
$sql="delete from gallary where id='$id'";
mysql_query($sql);
header('location:photo_gallary.php');
?>