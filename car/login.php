
<?php
include "header.php";
?>

<?php
if(isset($_POST['login']))
{
$email = $_POST['email_id'];
$pass =  $_POST['password'];
$que = "SELECT * FROM `customer_table` WHERE `email_id` LIKE ('".$email."') AND `password` LIKE('".$pass."')";		
$rec =mysql_query($que);
$res = mysql_fetch_array($rec);
if($res['cust_id'] != NULL){
$_SESSION['id'] = $res['cust_id'];
$_SESSION['email'] = $res['email_id'];
$_SESSION['FirstName'] = $res['name'];
header("location:index.php");
}
else
header("location:login.php");
}	
?>
<link href="calendar.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style1 {color: #FF3333}
.style5 {
	color: #000000;
	font-size: 16px;
	font-weight: bold;
}
.cente
{
 bordercolor:red;
}
/*-->*/
</style>
<h3 align="center" class="style1" style="font-size:50px" "font-style:normal"  "text-decoration:underline"><font color="#330033">Login</font>

</h3>
<!--<center>
<table align="center" width="500px" cellpadding="0" cellspacing="0" border="0">
  <tr>-->
   <!-- <td width="28px" height="28px" align="center" >&nbsp;</td>
   <td>&nbsp;</td>
    <td >&nbsp;</td>-->
  <!--</tr>-->
    <!-- <tr>
   <td colspan="2"><table align="center" cellpadding="1" cellspacing="1" width="50%" border="0"></td></tr>
      <tr>
    <!--<td width="20%">
  &nbsp;-->
<!--<center><img src="auto img/110.jpg" width="200" height="150" class="textbox1" /></center>-->
<!--############################# Information putted here ################			

  </td>-->		
     <!-- <td width="62%" align="center"></td>-->
     
     <form name="frm" action="login.php" method="post" >
      
    
	<table align="center" height="1234px"width="40%" cellpadding="5" cellspacing="0" class="login" bordercolor="blue">
                                              

						  <tr height="5px" border-color="black">
                            <td align="center"><font color="#CC3300"><b> Login with your <br>
                              </b><b>  Account</font> </b></td>
                          </tr>
                       <tr>
                            <td align="center"><table width="20px" align="center" cellpadding="5" style="border:#003300">
</tr>  <tr>
                                  <td align="right" colspan="2"><b>
								  
			 </b></td>
                                </tr> 
								<tr>
                                  <td width="146" align="right"><font color="#CC3300"> <b>Email :</font> </b></td>
                                  <td width="194"><input type="text" name="email_id" id="Email"  class="textbox" required></td>
                                </tr>
                                <tr>
                                  <td align="right"><font color="#CC3300"><b>Password :</font> </b></td>
                                  <td><input type="password" name="password" id="password" class="textbox" required ></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><input type="checkbox">
                                    &nbsp;
                                    <font color="#CC3300">Stay signed in.</font> </td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><input type="submit" name="login" value="Login" class="buttonmenu"></a></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td></td>
							    </tr>
								  <tr>
								  <td>&nbsp;</td>
								  <td align="center">
                    <a href="Register.php"><font color="#330033" size="3px"><b><u>Registration</u></b>
                  <br>if you have not Account please registration after fill up login page</font></a></td>
                                </tr>
                      </table></form>
                    </td>
                    </tr>
                        </table>
              <br>              </tr>
                  </table></td>
        
  </tr>
</table>
<!--pratik

<label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control"  name="email_id">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    
    
  </div>
  <div class="sb1">
  <button  type="submit" class="btn btn-primary" class="sb" name="submit" >Submit</button></div>-->

</body>
</html>
<!-- Footer Background Image Wrapper -->
<!--<div> 
   ################################################################################################ 
    </footer>
  </div>-->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php
 include "footer.php";
 ?>

  