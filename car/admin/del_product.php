<?php
session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);



$id=$_GET['id'];


$qry="select pimage from supplier_product_table where supplier_product_id=$id";
$result=mysql_query($qry);
$row=mysql_fetch_array($result);

$del_path="supplier_product_table/".$row['file'];
unlink($del_path);


$sql="delete from supplier_product_table where supplier_product_id=$id";
mysql_query($sql);
header('location:Add_product.php');
?>


