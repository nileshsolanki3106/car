<?php
 
include "header.php";
?>    
   <script language="javaScript" type="text/javascript" src="calendar.js"></script>
   <link href="calendar.css" rel="stylesheet" type="text/css">


<?php


if(!isset($_SESSION['id']))
{
	header("location:login.php?id=".$id.""); 
	exit;
}
if(isset($_GET['p_id']))
{

$tid = $_GET['p_id'];
$query = "select * from supplier_product_table where supplier_product_id = ".$tid."";
$row = mysql_query($query);
$result = mysql_fetch_array($row);
}
?>



<?php 
if(isset($_POST['submit']))
 {
 session_start();
 $cust_id=	$_SESSION['id'];
  $date=$_POST['date'];
  $p_id=$_POST['order_date'];
  $supplier_product_id = $_POST['supplier_product_id'];
 

  
  
 $sql="INSERT INTO `order_table` (`customer_id`,`order_date` ,`supplier_product_id` , `quantity` ,`status` )VALUES ('".$cust_id."',  '".$date."',  '".$supplier_product_id."','1', '1')"; 
  mysql_query($sql);
  header("location:confirmorder.php?msg=".'s');
  exit; 
  }
?>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">

.style1 {color: #FFFFFF}

</style>
<center>
<form action="order.php" name="frm" method="post">
<table width="308">
<tr>
<td>
<h3 align="center" class="style1" style="font-size:24px" "font-style:normal"  "text-decoration:underline"><font color="#000000"><b>Book Your Order</b></font> </h3>
<?php if(isset($_GET['msg'])) 
{
echo "Your order is suceessfully placed";
}
?>
<table><tr><td style="vertical-align:top" ><img src="admin/product/<?php echo $result['file']; ?>" width="239" height="344" class="textbox6" /></td>
<td>
<table  align="center" style="border: 1px #333366 groove" ><tr><td width="486" >  
<table align="center" border="0"   width="484" height="275" style="background-color:#FFFFFF" class="login">
<tr>

  <td width="158" align="right" ><strong>Customer :*</strong></td>
   <td width="302"><input type="text" name="customer id" value="<?php echo $_SESSION['FirstName'];?>" disabled="disabled" class="textbox"/>  </td>

</tr> 
<tr>

  <td align="right" ><strong>Product Name:*</strong></td>
   <td><input type="text" name="productid" value="<?php echo $result['product_name'];?>" disabled="disabled" class="textbox" />  </td>

</tr> 

<tr>

  <td align="right" ><strong>Price:*</strong></td>
   <td><input type="text" name="amount" value="<?php echo $result['product_rate'];?>" disabled="disabled" class="textbox"/>  </td>

</tr> 
<tr>

  <td align="right" ><strong>Date:*</strong></td>
   <td> 
   <input type="text" name="date" class="textbox"><a href="#" onClick="setYears(1947, 2030);
       showCalender(this, 'date');">
      <img src="b_calendar.png"></a>

    <table id="calenderTable">
        <tbody id="calenderTableHead">
          <tr>
            <td colspan="4" align="center">
	          <select onChange="showCalenderBody(createCalender(document.getElementById('selectYear').value,
	           this.selectedIndex, false));" id="selectMonth">
	              <option value="0">Jan</option>
	              <option value="1">Feb</option>
	              <option value="2">Mar</option>
	              <option value="3">Apr</option>
	              <option value="4">May</option>
	              <option value="5">Jun</option>
	              <option value="6">Jul</option>
	              <option value="7">Aug</option>
	              <option value="8">Sep</option>
	              <option value="9">Oct</option>
	              <option value="10">Nov</option>
	              <option value="11">Dec</option>
	          </select>
            </td>
            <td colspan="2" align="center">
			    <select onChange="showCalenderBody(createCalender(this.value, 
				document.getElementById('selectMonth').selectedIndex, false));" id="selectYear">
				</select>
			</td>
            <td align="center">
			    <a href="#" onClick="closeCalender();"><font color="#003333" size="+1">X</font></a>
			</td>
		  </tr>
       </tbody>
       <tbody id="calenderTableDays">
         <tr style="">
           <td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td>
         </tr>
       </tbody>
       <tbody id="calender"></tbody>
    </table>
 </td>

</tr> 
 
<input type="hidden" name="supplier_product_id" value="<?php echo $result['supplier_product_id'];?>" />

<tr>
        
<td colspan="2" align="center">
  <input type="submit" name="submit" value="Give Order" class="buttonmenu" onclick="alert('epiuren motors  agent contect  you in 24our for confrmation you order and process for delevery&payment')" />&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="reset" name="button" value="Reset" class="buttonmenu"/>
 
 </td></tr>
 </td></tr></table>
 </table>
 </td></tr></table>
</table>
</form>
</td></tr></table>                

<?php
include "footer.php";
?>    