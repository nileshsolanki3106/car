<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css"/>
<script rel="stylesheet" src="js/main.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	font-weight: bold;
  color:white;
}
.body
{

}

</style>
</head>

<body class="nore" background="product\a8d2b1bede422b14558366b67b4defa0.jpg">
<div style=" width:500px; margin-left:400px; margin-top:180px; border:double">
<form id="form1" name="form1" method="post" action="login_check.php">
<center><font color="white"><h1>Admin Login</h1></font></center><hr align="center" width="200" size="2"  color="#00FF00"/>
  <table width="680" border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td width="129" rowspan="4"><!--<img src="product\78b9986ca8339d93225168a61b3c625b.jpg"  width="150" height="180"/>--></td>
      <td colspan="3" style="color:#FF0000"></td>
      </tr>
    <tr>
      <td width="146"><div align="right" class="style1"><b><font size="4px">Enter Username</font></b> </div></td>
      <td width="25">&nbsp;</td>
      <td width="531"><input name="username" type="text" id="username" class="textbox" /></td>
    </tr>
    <tr>
      <td><div align="right" class="style1"><b><font size="5px">Enter Password</font></b> </div></td>
      <td>&nbsp;</td>
      <td><input name="password" type="password" id="password"  class="textbox"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login" class="buttonmenu" /></td>
    </tr>
<tr><td><a href="..\index.php" class="style2"><font color="white" size=10px>Home</font> </a></td></tr>
  </table>
</form>
</div>
</body>
</html>
