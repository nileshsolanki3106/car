<?php
session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);


$name=$_POST['product_name'];
$price=$_POST['product_rate'];
$des=$_POST['accessories'];
$category=$_POST['category'];

$name_img=$_FILES['file']['name'];

$newpath="product/".$name_img;

move_uploaded_file($_FILES['file']['tmp_name'],$newpath);


$sql="insert into supplier_product_table(`product_name`,`product_rate`,`accessories`,`category`,`file`) values('$name','$price','$des','$category','$name_img') ";
mysql_query($sql);
header('location:Add_product.php');
?>