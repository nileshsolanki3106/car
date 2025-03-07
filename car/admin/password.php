<?php
session_start();
include "../connect.php";

$flag=0;
$old=$_POST['old'];
$new=$_POST['new'];
$con=$_POST['confirm'];

if($old=="")
{
	$_SESSION['err_old']="Please Enter Old Password";
	$flag=1;
}
if($new=="")
{
	$_SESSION['err_new']="Please Enter New Password";
	$flag=1;
}

if($con=="")
{
	$_SESSION['err_con']="Please Enter Confirm Password";
	$flag=1;
}
else if($con!=$new)
{
	$_SESSION['err_con']="Confirm Password and New Password Doesn't Match";
	$flag=1;
}



if($flag==1)
{
	header('location:change_pass.php');
	exit;
}
else
{
	$sql="update admin_login_table set password='$new' where password='$old' and name='$_SESSION[success]'";
	mysql_query($sql);
	if(mysql_affected_rows()>0)
	{
		$_SESSION['password']="<font color='#0000FF'>Password Change Successfully.</font>";
	}
	else
	{
		$_SESSION['password']="<font color='#FF0000'>Password Change Problems. Try Again!.</font>";
	}
	header('location:change_pass.php');
}
?>