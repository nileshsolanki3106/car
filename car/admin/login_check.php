<?php
session_start();

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);

$user=$_POST['username'];
$pass=$_POST['password'];


$sql="select * from admin_login_table where name='$user' and password='$pass'";
mysql_query($sql);
if(mysql_affected_rows()>0)
{
	$_SESSION['success']=$user;
	header('location:main.php');
}
else
{
	$_SESSION['err']="Please Enter Valid Username and Password";
	header('location:index.php');
}
?>