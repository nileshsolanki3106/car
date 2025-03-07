<?php
include "header.php";
?>
<html>
  <head>
    <title></title>
    <style>
      .fo
      {
         font-size:22px;
      }
      </style>
  </head>
    <body>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<table class="fo" width="100%" border="0" cellpadding="4" cellspacing="4">
  <tr bgcolor="white">
<h1 align="center" class="style8"><font color="#FF0000"><b><i>view customer</i></b></font></h1>
    <td bordercolor="#FF00FF" bgcolor="black"><div align="center" class="style1 style4">id</div></td>
    <td bordercolor="#FF00FF" bgcolor="black"><div align="center" class="style1 style4">name</div></td>
    <td bordercolor="#FF00FF" bgcolor="black"><div align="center" class="style1 style4">age</div></td>
    <td bordercolor="#FF00FF" bgcolor="black"><div align="center" class="style1 style4">address</div></td>
    <td bordercolor="#FF00FF" bgcolor="black"><div align="center" class="style1 style4">phone</div></td>
    <td bordercolor="#FF00FF" bgcolor="black"><div align="center" class="style1 style4">email</div></td>
    <td bordercolor="#FF00FF" bgcolor="black"><div align="center" class="style1 style4">password</div></td>
    <td bordercolor="#FF00FF" bgcolor="black"><div align="center" class="style1 style4">gender</div></td>
    <td bordercolor="#FF00FF" bgcolor="black"><div align="center" class="style1 style4">delete</div></td>
    <!--<td bordercolor="#FF00FF" bgcolor="white"><div align="center" class="style1 style4">edit</div></td>-->
  </tr>
<?php



$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);

$sql="select * from customer_table";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)) {
?>
  <tr bgcolor="white">
  <td bordercolor="#FFFFCC" bgcolor="white"><span class="style4"><?php echo $row['cust_id']; ?></span></td>
    <td bordercolor="#FFFFCC" bgcolor="white"><span class="style4"><?php echo $row['name']; ?></span></td>
    <td bgcolor="white"><span class="style4"><?php echo $row['age']; ?></span></td>
    <td bgcolor="white"><span class="style4"><?php echo $row['address']; ?></span></td>
	    <td bgcolor="white"><span class="style4"><?php echo $row['phone']; ?></span></td>
    <td bgcolor="white"><span class="style4"><?php echo $row['email_id']; ?></span></td>
	    <td bgcolor="white"><span class="style4"><?php echo $row['password']; ?></span></td>
    <td bgcolor="white"><span class="style4"><?php echo $row['gender']; ?></span></td>
    <td bgcolor="white"><div align="center" class="style4"><a href="delete cust.php?id=<?php echo $row['cust_id']; ?>"><img src="images/b_drop.png" class="textbox1" /></a></div></td>
   <!-- <td bgcolor="white"><div align="center" class="style4"><a href="updatecust.php?id=<?php echo $row['cust_id']; ?>"><img src="images/b_edit.png" class="textbox1" /></a></div></td>-->
  </tr>
<?php } ?>
</table>
</body>
</html>