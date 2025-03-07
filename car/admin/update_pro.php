 <?php
session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);

$id=$_GET['id'];

$sql="select * from supplier_product_table where supplier_product_id=$id";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

if(isset($_POST['update']))
{
echo "Hello Done ";
$name=$_POST['product_name'];
$rate=$_POST['product_rate'];
$accessories=$_POST['accessories'];
$name_img=$_FILES['file']['name'];
$category=$_POST['category'];

$id=$_GET['id'];


//<!--CHECK THAT RUN OR NOT-->
//$newpath="product/".$name_img;

//move_uploaded_file($_FILES['file']['tmp_name'],$newpath);

$sql12="update supplier_product_table set `product_name`='$name',`product_rate`='$rate',`accessories`='$accessories',`category`='$category',`file`='$name_img'  where supplier_product_id='$id'";
mysql_query($sql12);
header('location:Add_product.php');
}

?>
<form action="update_pro.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data" name="form1" id="form1">
  <table width="643" height="200" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td>Product Names </td>
      <td><input name="product_name" type="text" id="product_name" value="<?php echo $row['product_name']; ?>" /></td>
    </tr>
    <tr>
      <td>Product Price </td>
      <td><input name="product_rate" type="text" id="product_rate" value="<?php echo $row['product_rate']; ?>" /></td>
    </tr>
    <tr>
      <td><!--Accessories-->Details</td>
      <td><textarea name="accessories" id="accessories"><?php echo $row['accessories'];?></textarea></td>
    </tr>
    <tr>   
       <tr>
      <td>category</td>
      <td><textarea name="category" id="category"><?php echo $row['category'];?></textarea></td>
    </tr>
    <tr>
      <td>Product Image </td>
      <td><input type="file" name="file" id="file" required /><img src="product/<?php echo $row['file']; ?>" width="100px" height="80" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="update" value="Update" /></td>
    </tr>
  </table>
</form>