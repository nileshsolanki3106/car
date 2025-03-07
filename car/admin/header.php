<?php
session_start();
	if($_SESSION['success']!=true)
		header('location:index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EPICUREN MOTORS ADDMIN</title>

<style>
.td
{
	color:#FFFFFF;
	font-weight:bold;
	font-family:Arial, Helvetica, sans-serif;
}
a
{
	color:#FFFFFF;
	text-decoration:none;
}
</style>
<link href="../style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {font-size: 14px; font-weight: bold; }
.style2:hover, .style2:focus
{

}
.style3 {color: #0000FF}
.style4 {font-size: 22px; font-weight: bold; color: #0000FF; }
.conter
{height: 4rem;
  width: 100%;
display:flex;



}
.hmw
{
  height: 3rem;
  width: 15rem;
  border:2px solid white;
  text-align:center;
  justify-content:center;
  align-aitem:center;
  color:white;
}
a{
  color:white;
  font-size:25px;

}
</style>
</head>


<body background="product\a8d2b1bede422b14558366b67b4defa0.jpg">
<div class="conter">
  <div class="hmw"><a href="main.php">home</a>
</div>
<div class="hmw">
<a href="Add_product.php">
  product</a>
</div> 
 <div class="hmw">
 <a href="viewFeeback.php">
  view Feedback</a>
</div>
  <div class="hmw"><a href="viewOrder.php">
    view order</a>
</div>
  <div class="hmw">
    <a href="customer.php">
    view customer</a>
  </div>
  <div class="hmw"><a href="photo_gallary.php">Gallary </a></div>
    <div class="hmw"><a href="index.php" >
      log-out</a>
    </div>
    <div class="hmw"><a href="change_pass.php">change password</a></div>
    <div class="hmw"><a href="index.php" >
      log-out</a>
    </div>
</div>

<!--<table width="100%" border="0">
  <tr>
    <td><table width="100%" border="0">
      <tr align="center" bgcolor="#33FF99" height="50px;" class="shedos">
        <td width="10%" height="58" bgcolor="#000000"><a href="main.php" class="style2">Home</a></td>
        <td width="12%" bgcolor="#000000"><a href="Add_product.php" class="style2">Product</a></td>
        <td width="12%" bgcolor="#000000"><a href="viewFeeback.php" class="style2">View Feedback</a></td>
	<td width="15%" bgcolor="#000000"><a href="viewOrder.php" class="style2">View Order</a></td>
	    <td width="12%" bgcolor="#000000"><a href="customer.php"class="style2">view customer</a></td>
		<!-- <td width="14%" bgcolor="#000000"><a href="photo_gallary.php" class="style2">Photo Gallary</a></td>-->
        <!--<td width="16%" bgcolor="#000000"><a href="change_pass.php" class="style2">Change Password </a></td>
        <td width="16%" bgcolor="#000000"><a href="index.php" class="style2">Logout</a></td>
       <!-- <td width="16%" bgcolor="#000000"><a href="bmwa.php" class="style2">bmw</a></td>
        <td width="16%" bgcolor="#000000"><a href="mAdd_product.php" class="style2">mar</a></td>-->
      </tr>
	  </td>
	  </table>
    </table>

  </body>
  </html>
  