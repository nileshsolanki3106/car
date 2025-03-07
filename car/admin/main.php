<?php
include "header.php";
?>
<link href="../style.css" rel="stylesheet" type="text/css" />


<style type="text/css">

.style1 {color: white}
.style3 {color: white}

</style>
<fieldset>
<legend><span class="style3"> Admin Panel</span></span></legend>
<div align="center">

<h1 class="style1"font color="red">Hello  <?php echo $_SESSION['success'];?></font></h1>


</div>

</fieldset>

<?php include "footer.php"; ?>