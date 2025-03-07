<?php
include "header.php";
?>
<link href="../style.css" rel="stylesheet" type="text/css" />
<style type="text/css">

.style3 {font-size: 22px; font-weight: bold; color:white }

</style>

<fieldset>
<legend>Change Password</legend>
<div align="center">
<form id="form1" name="form1" method="post" action="password.php" >
  <table width="726" height="148" border="0">
    <tr>
      <td colspan="3" align="center"></td>
      </tr>
    <tr>
      <td width="172"><span class="style3"><font color="white"><b>Old Password</b></font> </span></td>
      <td width="21">&nbsp;</td>
      <td width="511"><input name="old" type="password" class="textbox" id="old" />
      <label style="color:#FF0000"></label></td>
    </tr>
    <tr>
      <td><span class="style3"><font color="white"><b>New Password</b></font> </span></td>
      <td>&nbsp;</td>
      <td><input name="new" type="password" class="textbox" id="new" />
      <label style="color:#FF0000"></label></td>
    </tr>
    <tr>
      <td><span class="style3"><font color="white"><b>Confirm Password</b></font> </span></td>
      <td>&nbsp;</td>
      <td><input name="confirm" type="password" id="confirm" class="textbox" />
      <label style="color:#FF0000"></label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Change Password"  class="buttonmenu" onclick="suresh"/></td>
    </tr>
  </table>
</form>
</div>

</fieldset>

<?php include "footer.php";
 ?>