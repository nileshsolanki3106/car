
<?php
include "header.php";
?>    


    <!-- ################################################################################################ -->
<!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

  </main>
</div>
<?php



// Database connection using MySQLi (Updated)
$con = mysqli_connect("localhost", "root", "", "sss");

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


		
 if(isset($_POST['submit']))
 
  {
   
   $name=$_POST['name'];
   $email_id=$_POST['email_id'];
   $age=$_POST['age'];
   $address=$_POST['address'];
    $city=$_POST['city'];
  
   $phone=$_POST['phone'];
   $email_id=$_POST['email_id'];
    $pincode=$_POST['pincode'];
  
   $password=$_POST['password'];
   $gender=$_POST['gender'];
     
   $sql ="INSERT INTO `sss`.`customer_table` (`name` ,`age` ,`address` ,`city` ,`phone` ,`email_id` ,`pincode` ,`password` ,`gender`)VALUES ('".$name."',  '".$age."',  '".$address."', '".$city."','".$phone."','".$email_id."', '".$pincode."','".$password."','".$gender."')";
     mysql_query($sql);
	 header("location:login.php");
	 exit;
   
  }
  ?>
  <html>
    <head>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
<!--
.style1 {
	color: #FFFF00;
	font-weight: bold;
}
.style2 {
	font-size: 16px;
	font-weight: bold;
}
.style5 {
	color: #FFFF00;
	font-size: 16px;
	font-weight: bold;
}
.submi
{
  margin-top:-20px;
  margin-left:91%;
  
}

  </style>
 <script type="text/javascript">

function validate(form2)
{
if(form2.name.value=="")
{
alert("Please Enter Name");
form2.name.focus();
return false;
}
if(form2.email_id.value=="")
{

alert("Please Enter Email Id");
form2.email_id.focus();
return false;
}
if(form2.password.value=="")
{

alert("Please Enter Password");
form2.password.focus();
return false;
}
if(form2.address.value=="")
{

alert("Please Enter Your Address");
form2.address.focus();
return false;
}
if(form2.city.value=="")
{

alert("Please Enter Your city");
form2.city.focus();
return false;
}
if(form2.pincode.value=="")
{

alert("Please Enter Your pincode");
form2.pincode.focus();
return false;
}


if(form2.gender.value=="")
{

alert("Please Enter gender");
form2.gender.focus();
return false;
}
if(form2.age.value=="")
{

alert("Please EnterAge");
form2.age.focus();
return false;
}
if(form2.phone.value=="")
{

alert("Please Enter Your Phone");
form2.phone.focus();
return false;
}

}

</script></head>

  <body>
<link href="style.css" rel="stylesheet" type="text/css" />



<form name="form2" action="Register.php" method="post"  onSubmit="return validate(this)">


  <h6 align="center" class="style1" style="font-size:28px"><font color="#330033">Registration</h6></font>
  
  <table align="center">
<center>
<tr>
     <td width="197" align="right" ><div align="center" class="style2"><font color="#CC3300"size="4px">Name:*</font></div></td>
	 <td width="293"><input type="text" name="name" class="textbox" /></td>
</tr>

<tr>
     <td align="right"><div align="center" class="style2"><font color="#CC3300"size="4px">Email_Id:*</font></div></td>
	 <td><input type="text" name="email_id" class="textbox"  /></td>
</tr> 

<tr>
     <td align="right"> <div align="center" class="style2"><font color="#CC3300"size="4px">Password:*</font></div></td>
	 <td><input type="password" name="password" class="textbox" /></td>
</tr>
 <tr>
     <td align="right"><div align="center" class="style2"><font color="#CC3300"size="4px"> Address:*</font></div></td>
	 <td><input type="text" name="address" class="textbox" /></td>
</tr> 
<tr>
     <td align="right"><div align="center" class="style2"><font color="#CC3300" size="4px"> city:*</font></div></td>
	 <td><input type="text" name="city" class="textbox" /></td>
</tr> 
<tr>
     <td align="right"><div align="center" class="style2"><font color="#CC3300"size="4px"> pincode:*</font></div></td>
	 <td><input type="text" name="pincode" class="textbox" /></td>
</tr> 
 
 
 <tr>
     <td align="right" ><div align="center" class="style2"><font color="#CC3300"size="4px">Gender:*</font>&nbsp;</div></td>
	 <td ><span class="style5">&nbsp;<font color="#CC3300" >Male</font>
        <input type="radio" name="gender"  value="male" checked="checked" class="textbox" />
	 &nbsp;<font color="#CC3300" >Female</span></font>
      <input type="radio" name="gender" value="female" class="textbox">	 </td>
</tr> 

<tr>
     <td align="right"><div align="center" class="style2"><font color="#CC3300 size="4px"">Age:*</font></div></td>
	 <td><input type="text" name="age" class="textbox" /></td>
</tr>

<tr>
     <td align="right"><div align="center" class="style2"><font color="#CC3300"size="4px">Contact No:*</font></div></td>
	 <td><input type="text" name="phone" class="textbox" /></td>
</tr>

   <td align="right" ><a href="order.php">
   <input type="submit" name="submit" value="Submit" class="submi" class="buttonmenu" /></a> </td>
         <td>
         <input type="reset" name="reset" value="Reset" class="buttonmenu">
     </td>
     
</table>

</form>


&nbsp;&nbsp;
</center>



<?php
include "footer.php";
?>    