<?php
session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);


$product_name=$_POST['product_name '];
$product_rate=$_POST['product_rate'];
$accessories=$_POST['accessories'];

$id=$_GET['id'];

//$name_img=$_FILES['file']['name'];

//$newpath="product/".$name_img;

//move_uploaded_file($_FILES['file']['tmp_name'],$newpath);

$sql="update product set `product_name`='$name',`product_rate`='$product_rate',`accessories`='$accessories' where supplier_product_id='$supplier_product_id'";
mysql_query($sql);
header('location:Add_product.php');
?>