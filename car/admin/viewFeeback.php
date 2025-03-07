<?php
include "header.php";
?>
<style type="text/css">
<!--
.style4 {font-size: 24px; font-weight: bold; }
.style7 {font-size: 22px; font-weight: bold;  }

.style8 {color: #FF3399; }
-->
</style>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<h1 align="center" class="style8"><font color="#FF0000"><b><i>view feedback</i></b></font></h1>

<table width="100%" border="0" cellpadding="4">
    <tr style="color:#FFFFFF" bgcolor="white">
      <td width="8%" bgcolor="white"><div align="center" class="style4">id</div></td>
	  <td width="10%" bgcolor="white"><div align="center" class="style4">name</div></td>
      <td width="10%" bgcolor="white"><div align="center" class="style4">email</div></td>
      <td width="8%" bgcolor="white"><div align="center" class="style4">Mobile</div></td>
	        <td width="10%" bgcolor="white"><div align="center" class="style4">Subject</div></td>
			      <td width="20%" bgcolor="white"s><div align="center" class="style4">Feedback</div></td>
    </tr>
<?php


$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);


$sql="select * from feedback_table";
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
  </tr>
<?php } ?>
</table>
</form>
