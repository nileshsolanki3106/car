<?php
include "header.php";
?>    
<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sss",$con);

if(isset($_POST['Submit']))
{
$flag=0;
$name=$_POST['name'];
$email=$_POST['email'];
$mob=$_POST['mobile'];
$sub=$_POST['subject'];
$msg=$_POST['message'];



if($flag==1)
{
	header('Location:feedback.php');
	exit;
}
else
{
	$sql="insert into feedback_table(name,email,mobile,subject,feedback) values('$name','$email','$mob','$sub','$msg')";
	mysql_query($sql);
	if(mysql_affected_rows()>0)
	{
		$_SESSION['feedback']="<font color='#0000FF'>Feedback Sent Successfully.</font>";
	}
	else
	{
		$_SESSION['feedback']="<font color='#FF0000'>Feedback Sent Problems!.</font>";
	}
	header('Location:feedback.php');
}
?>
<?php }?>
<?php
include "footer.php";
?>    