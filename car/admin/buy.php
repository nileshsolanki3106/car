
<script>
function selprice(id)
{
	var myid=id.split('|');
	//alert(myid[1]);
	document.getElementById('price').value=myid[1];
}
function cal()
{
	var price=document.getElementById('price').value;
	var qty=document.getElementById('qty').value;
	
	var total=parseInt(price)*parseInt(qty);
	
	document.getElementById('total').value=total;
}
</script>
<fieldset>
<legend>Admin Panel</legend>
<div align="center">
  <form name="form1" method="post" action="buy_exe.php">
    <table width="459" height="185" border="0" cellpadding="5" cellspacing="5">
      <tr>
        <td width="144">&nbsp;</td>
        <td width="8">&nbsp;</td>
        <td width="285">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right"><strong>Select Product </strong></div></td>
        <td>&nbsp;</td>
        <td><select name="product" onChange="selprice(this.value)">
		<option value="">Select Product</option>
<?php
session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);

$sql="select * from product_table";
$res=mysql_query($sql);
while($ro=mysql_fetch_array($res)) {
?>
<option value="<?php echo $ro['p_id'].'|'.$ro['pprice']; ?>"><?php echo $ro['pname']; ?></option>
<?php } 

?>
        </select>        </td>
      </tr>
      <tr>
        <td><div align="right"><strong>Product Qty </strong></div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="qty" id="qty" onBlur="cal()"></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Product Price </strong></div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="price" id="price" onBlur="cal()"></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Total</strong></div></td>
        <td>&nbsp;</td>
        <td><input name="total" type="text" id="total"></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Product Description </strong></div></td>
        <td>&nbsp;</td>
        <td><textarea name="des"></textarea></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Product Date </strong></div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="date"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Submit"></td>
      </tr>
    </table>
  </form>
  
 
  <table width="100%" border="0">
    <tr style="color:#FFFFFF" bgcolor="#0000FF">
      <td width="16%"><div align="center"><strong>Product</strong></div></td>
      <td width="7%"><div align="center"><strong>Qty</strong></div></td>
      <td width="10%"><div align="center"><strong>Price</strong></div></td>
      <td width="10%"><div align="center"><strong>Total</strong></div></td>
      <td width="38%"><div align="center"><strong>Description</strong></div></td>
      <td width="10%"><div align="center"><strong>Date</strong></div></td>
      <td width="4%"><div align="center"><strong>Delete</strong></div></td>
      <td width="5%"><div align="center"><strong>Update</strong></div></td>
    </tr>
<?php
$sql="select * from buy b,product p where b.p_id=p.p_id";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)) {
?>
    <tr bgcolor="#5458FC" align="center">
      <td><?php echo $row['pname']; ?></td>
      <td><?php echo $row['qty']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['total']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo date('d-m-Y',strtotime($row['date'])); ?></td>
      <td><a href="del_buy.php?pid=<?php echo $row['b_id']; ?>"><img src="images/b_drop.png" width="16" height="16" /></a></td>
      <td><img src="images/b_edit.png" width="16" height="16" /></td>
    </tr>
<?php } ?>
  </table>
</div>

</fieldset>

