<?php
 include "header.php";
 ?>
<?php


// Database connection using MySQLi (Updated)
$con = mysqli_connect("localhost", "root", "", "sss");

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


  
    <!-- ################################################################################################ -->
    

      
   
    <!-- ################################################################################################ -->
 
    <div class="clear"></div>
  </main>
</div>



<link href="style.css" rel="stylesheet" type="text/css" />

<div id="content">

<div id="leftPan">

<div id="welcome">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<form id="form1" name="form1" method="post" action="">
<center>
	<div style="width:50%;float:center" >
		<div><center><br />
		<br />
			<font face="Times New Roman, Times, serif" color="#660000" size=4px><b>we would like your feedback to inprove our service<br>your opinion is important for us<br>give your feedback </b></font>
		</center>
	
			<br/>
	
  <table width="424" border="0" cellpadding="5" cellspacing="5" align="center" class="shedos">
    <tr>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td width="162"><div align="right" ><strong><font color="#CC3300">Name</font></strong></div></td>
      <td width="16"><strong>:</strong></td>
      <td width="301"><input name="name" type="text" id="name" class="textbox" /><label style="color:#FF0000" required>*</label></td>
    </tr>
    <tr>
      <td><div align="right"><strong><font color="#CC3300">Email</font></strong></div></td>
      <td><strong>:</strong></td>
      <td><input name="email" type="text" id="email" class="textbox"/><label style="color:#FFFFFF" required>*</label></td>
    </tr>
    <tr>
      <td><div align="right"><strong><font color="#CC3300">Mobile</font></strong></div></td>
      <td><strong>:</strong></td>
      <td><input name="mobile" type="text" id="mobile" class="textbox"/><label style="color:#FF0000" required>*</label></td>
    </tr>
    <tr>
      <td><div align="right"><strong><font color="#CC3300">Subject</font></strong></div></td>
      <td><strong>:</strong></td>
      <td><input name="subject" type="text" id="subject" class="textbox"/><label style="color:#FF0000" required></label></td>
    </tr>
    <tr>
      <td><div align="right"><strong><font color="#CC3300">Message</font></strong></div></td>
      <td><strong>:</strong></td>
      <td><textarea name="message" id="message" class="textbox"></textarea><label style="color:#FF0000">*</label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" class="buttonmenu" onclick() /></td>
    </tr>
  </table>
</div>
</div>
</center>
</form>


</div>
</div>

</div>

<div class="clear"></div>

</div>
<!-- Footer Background Image Wrapper -->
<div> 
  <!-- ################################################################################################ -->
    </footer>
  </div>
  <?php
 include "footer.php";
 ?>