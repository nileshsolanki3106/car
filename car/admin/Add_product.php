<?php
include "header.php";
?>
<html>
  <head>
    <title></title>
  <style>
    .fom1
    {
      color:white;
      font-size:25px;
    }
    .fo{
      font-size:19px;

    }
    </style>
  
  </head>
    <body>
<fieldset>
<legend>Add Product</legend>
<div align="center">
<form action="product_validate.php" method="post" enctype="multipart/form-data" name="form1" class="fom1">
  <table width="643" height="200" border="0" cellpadding="5" cellspacing="5" class="fontcolo">
    <tr>
      <td><span class="style11">Product Name </span></td>
      <td><input name="product_name" type="text" class="textbox" id="product_name" required/></td>
    </tr>
    <tr>
      <td><span class="style11">Product Rate </span></td>
      <td><input name="product_rate" type="text" class="textbox" id="product_rate" required/></td>
    </tr>
    <tr>
      <td><span class="style11">Ditalis </span></td>
      <td><textarea name="accessories" class="textbox" id="accessories" required></textarea></td>
    </tr>
    <tr>
      <td><span class="style11">category </span></td>
      <td><textarea name="category" class="textbox" id="category" required></textarea></td>
    </tr>
    
    <tr>
      <td><span class="style11">Product Image </span></td>
      <td><input type="file" name="file" required /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" class="buttonmenu" value="Submit" /></td>
    </tr>
  </table>
</form>

<table width="100%" border="0" style="background:balck" class="fo">
  <tr bgcolor="#CCCCCC">
    <td><div align="center" class="style4">Product Name </div></td>
    <td><div align="center" class="style4">Product Rate</div></td>
    <td><div align="center" class="style4">Details</div></td>
	
	
    <td><div align="center" class="style4">Image</div></td>
    <td><div align="center" class="style4">category</div></td>
    <td><div align="center" class="style4">Delete</div></td>
    <td><div align="center" class="style4">Update</div></td>
  </tr>
<?php



$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);


$sql="select * from supplier_product_table";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)) {
?>
  <tr bgcolor="#CCFF33">
    <td bordercolor="#FFFFCC" bgcolor="white"><?php echo $row['product_name']; ?></td>
    <td bgcolor="white"><?php echo $row['product_rate']; ?></td>
    <td bgcolor="white"><?php echo $row['accessories']; ?></td>

	
    <td bgcolor="white"><img src="product/<?php echo $row['file']; ?>" width="70" height="70" class="textbox1" /></td>
    <td bgcolor="white"><?php echo $row['category']; ?></td>
    <td bgcolor="white"><div align="center"><a href="del_product.php?id=<?php echo $row['supplier_product_id']; ?>"><img src="images/b_drop.png" class="textbox1" /></a></div></td>
    <td bgcolor="white"><div align="center"><a href="update_pro.php?id=<?php echo $row['supplier_product_id']; ?>"><img src="images/b_edit.png" class="textbox1" /></a></div></td>
  </tr>
<?php } ?>
</table>


</div>

</fieldset>
</body>
</html>

<?php include "footer.php"; ?>