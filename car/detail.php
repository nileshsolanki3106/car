<?php
include "header.php";
?>    
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="calendar.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
&nbsp; &nbsp;&nbsp;
<table align="center">
  
<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);

$sql="select * from supplier_product_table where supplier_product_id = ".$_GET['supplier_product_id']."";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
  <tr>
    <td bgcolor="#FFFFFF"><a href="detail.php?id=<?php echo $row['supplier_product_id']?>"></a> <div align="center"><img src="admin/product/<?php echo $row['supplier_product_id']; ?>" width="224" height="293" class="k" /><br />&nbsp; &nbsp;&nbsp;
      <div align="center" class="style1"><?php echo $row['supplier_product_id']; ?>
          <br /> 
          <?php echo $row['product_rate']; ?>
          <br />
          <?php echo $row['accessories']; ?></div>
    </div>
     
 
<h2 align="center" style="vertical-align:text-bottom">	
	<?php if(isset($_SESSION['FirstName'])){?>
 <a href="order.php?pid=<?php echo $row['supplier_product_id'];?>">Click Here TO Order Now</a>
 <?php } else{?>
 <a href="Register.php">Buy Now</a>
<?php }?>
</h2>	
   </td>
  </tr>
</table>
 
<?php
include "footer.php";
?>    