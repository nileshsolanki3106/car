<?php
session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);

$name=$_FILES['image']['name'];

$newpath="gallary/".$name;
move_uploaded_file($_FILES['image']['tmp_name'],$newpath);

$sql="insert into gallary(path) values('$name')";
mysql_query($sql);
header('location:photo_gallary.php');
?>