<?php
include "header.php";
?>
<link href="../style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 16px}
-->
</style>

<fieldset>
<legend>Product Photo Gallary</legend>
<div align="center">
  <form action="gallary.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="474" border="0" cellpadding="5" cellspacing="5">
      <tr>
        <td width="150"><span class="style1"></span></td>
        <td width="18">&nbsp;</td>
        <td width="284">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1"><strong>Select Photo </strong></div></td>
        <td>&nbsp;</td>
        <td><input name="image" type="file" class="buttonmenu" id="image" required /></td>
      </tr>
      <tr>
        <td><span class="style1"></span></td>
        <td>&nbsp;</td>
        <td><input name="Submit" type="submit" class="buttonmenu" value="Submit" /></td>
      </tr>
    </table>
  </form>
  
  
  <table width="481" height="169" border="0" cellpadding="3" cellspacing="3">
    <tr style="color: #FFFFFF; background-color:#000000;">
      <td width="300" height="30"><div align="center"><strong>Image</strong></div></td>
      <td width="160"><div align="center"><strong>Delete</strong></div></td>
  
    </tr>
<?php


$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);
$sql="select * from gallary";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)) {
?>
    <tr align="center" >
      <td><img src="gallary/<?php echo $row['path']; ?>" width="107" height="117" class="textbox1" /></td>
      <td><a href="gallary_delete.php?id=<?php echo $row['id']; ?>"><img src="images/b_drop.png" class="textbox1" /></a></td>
 
    </tr>
<?php } ?>
  </table>
</div>
</fieldset>

