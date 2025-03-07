<?php
include "header.php";
?>    
   <script language="javaScript" type="text/javascript" src="calendar.js"></script>
   <link href="calendar.css" rel="stylesheet" type="text/css">


<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<link href="style.css" rel="stylesheet" type="text/css" />
&nbsp;&nbsp;&nbsp;&nbsp;
<table width="100%">
<tr>
<td>
<h1 align="center" style="color:#000000"> Confirm Message</h1>
<table  align="center" style="border: 1px #333366 groove" ><tr><td width="100%" height="52" bgcolor="#FFFFFF" >  
<table class="tbl" align="center" width="100%" border="0" cellpadding="4" cellspacing="4"  class="k">
  <tr>
    <td align="center"><span class="style1">&nbsp;Customer Name</span></td>
    <td align="center"><span class="style1">&nbsp;Product</span></td>
    <td align="center"><span class="style1">&nbsp;Booking Date</span></td>
    <td align="center"><span class="style1">&nbsp;Payment Amount</span></td>
	<td align="center"><span class="style1">&nbsp;Confirmation Number</span></td>
  
  </tr>
<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);

$sid = $_SESSION['id'];
$cname = $_SESSION['FirstName'];

$query = "select * from order_table where customer_id = '".$sid."'";
$row = mysql_query($query);
while($result = mysql_fetch_array($row))
	{	
		
$query1 = "select product_name,product_rate from supplier_product_table where supplier_product_id = '".$result['supplier_product_id']."'";
$row1 = mysql_query($query1);
$result1 = mysql_fetch_array($row1);
		echo "<tr><td align='center'>".$cname."</td><td align='center'>".$result1['product_name']."</td><td align='center'>".$result['order_date']."</td><td align='center'>".$result1['product_rate']."</td><td align='center'>".$result['order_id']."</td></tr>";
	}
?>
</table>

</td></tr></table> <font color="red" size=5px> Note:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp  if  any query contect us in this no(+91 1110001110) <center>
  <img src="auto img/109.jpg" width="558" height="244" />
</center>   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
include "footer.php";
?>    