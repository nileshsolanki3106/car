<?php
include "header.php";
?>    

<html>
  <head>
    <title></title>
<!--<link href="style.css" rel="stylesheet" type="text/css" />-->
<style>
        .st1
        {
            display:flex;
            border:20px solid white;
           /* height: 20rem;*/
            width:100%;
            Background-color:white;
            color:black;
            justify-content:center; 
            

        }

.pra{
    border:2rem solid white;
}
.pra1
{
    margin-left:-80px;
    margin-right:20px;
}
.img1
{
height: 22rem;
width: 25rem;
}
    </style>
</head>
<body>
&nbsp;&nbsp;&nbsp;&nbsp;

<?php


$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);
$i=0;
$sql="select * from supplier_product_table where category='astm'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)) {
if($i%3==0) {
?>
<div class="imghw">
<table align="center" border="0" cellpadding="4" cellspacing="4"><tr align="center"><?php } ?>
<td align="center"><img class="img1" src="admin/product/<?php echo $row['file']; ?>" width="25rem" height="22rem"  class="k" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <div style="margin-right:100px"><a  style="color:#000033; font-size:16px; font-weight:700" href="detail.php?id=<?php echo $row['supplier_product_id']?>"><?php echo $row['product_name']; ?></a></div>&nbsp;
    <div style="color:#000033;margin-right:100px">Price: <?php echo $row['product_rate']; ?></div>
    <div style="color:#000033;margin-right:100px"><?php echo $row['accessories']; ?>
      <p><a href="order.php?p_id=<?php echo $row['supplier_product_id']; ?>">Order Now</a><a href="#" class="btn btn-primary" style="margin-left:20px;" ><font size="1px">click for information</font></a></p>
    </div></td><?php if($i==3 && $i==0) {?>
  </tr><?php } $i++; } ?>
  
</table>
    </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!--pratik-->
<!--<?php
while($row=mysql_fetch_array($result)) {
if($i%3==0) {
?>
<div class="st1">
<div class="pra">
    <div class="card" style="width: 30rem;">
  <img style="width:30rem;height: 20rem;" class="mhw"  src="admin/product/<?php echo $row['file'];} ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <div style="margin-right:100px"><a  style="color:#000033; font-size:16px; font-weight:700" href="detail.php?id=<?php echo $row['supplier_product_id']?>"><?php echo $row['product_name']; ?></a></div>&nbsp;
    <div style="color:#000033;margin-right:100px">Price: <?php echo $row['product_rate']; ?></div>
    <div style="color:#000033;margin-right:100px"><?php echo $row['accessories']; ?>
      <p><a href="order.php?p_id=<?php echo $row['supplier_product_id']; ?>">Order Now</a></p>
    </div><?php
     if($i==3 && $i==0)
     {
        ?><?php } $i++;} ?>
   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    pratik end-->
    </table>
    </body>
    </html>
<?php
include "footer.php";
?>    
