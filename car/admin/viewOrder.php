<?php
include "header.php";
?>
<style type="text/css">
<!--
.style4 {font-size: 24px; font-weight: bold; }
.style7 {font-size: 18px; font-weight: bold; }
.style8 {color: #FF3399}

</style>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<h1 align="center" class="style8"><font color="#FF0000"><b><i>View Order</i></b></font></h1>

<table width="100%" border="0" cellpadding="4">
    <tr style="color:#FFFFFF" bgcolor="#0000FF">
      <td width="8%" bgcolor="white"><div align="center" class="style4">Order id</div></td>
	  <td width="10%" bgcolor="white"><div align="center" class="style4">Order Date</div></td>
      <td width="10%" bgcolor="white"><div align="center" class="style4">Customer id</div></td>
      
      <td width="8%" bgcolor="white"><div align="center" class="style4">Product id</div></td>
	        <td width="10%" bgcolor="white"><div align="center" class="style4">Quanitity</div></td>
			      <td width="20%" bgcolor="white"s><div align="center" class="style4">Status</div></td>
          <!--  <td width="20%" bgcolor="white"s><div align="center" class="style4">cust name</div></td>-->
            
    </tr>
<?php


$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);


$sql="select * from order_table";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)) {
?>
  <tr bgcolor="#FFCCCC">
    <td bgcolor="white"><span class="style7"><?php echo $row['0']; ?></span></td>
    <td bgcolor="white"><span class="style7"><?php echo $row['1']; ?></span></td>
	<td bgcolor="white"><span class="style7"><?php echo $row['2']; ?></span></td>
	<td bgcolor="white"><span class="style7"><?php echo $row['3']; ?></span></td>
    <td bgcolor="white"><span class="style7"><?php echo $row['4']; ?></span></td>
    <td bgcolor="white"><span class="style7"><?php echo $row['5']; ?></span></td>
    <!--<td><span class="style7"><?php echo $row['']; ?></span></td>-->

  </tr>
<?php } ?>
</table>
</form>
