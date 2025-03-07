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


<div>
<center>
<h2><br />

<font face="Times New Roman, Times, serif" size="+3"color="#330033"><b><i><u><span>ABOUT</span></u></i></b></font>
</h2>
</center>
</div>
<font color="#660000"><i><b>
<p>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <article><center> EPCUIREN  has emerged as the only player with complete range of 4Wheeler products across the fuel range- Diesel, Petrol.</center><br /><center> Trailblazing for over 30 years</center><br /><center>Sometimes all it takes is a dream. A dream that is fuelled by innovation, a dream that creates change. A dream that turns possibilities into realities; and realities into defining moments. Defining moments that redefine an Era!</center>
<br /><center>No matter how tough the load or how tough the terrain ATUL is tougher ATUL is a Trailblazer!</center><BR />
<center>
Our vehicles are amongst the sturdies, most reliable.   EPCUIREN vehicles are redefining the FORE wheeler industry. Over more than 1 million  EPCUIREN vehicles ply on Global , since the first rolled out in 1970s.
We are amongst the fastest growing FORE Wheeler Company in India.</center>

<br />

<div>
<center>
<h2><br />
<pre>

</pre>
<font face="Times New Roman, Times, serif" size="+3"color="#330033"><b><i><u><span>Mission</span></u></i></b></font>
</h2>
</center>
</div>

  <br /><center>
  To devote ourselves to cater to the  transportation needs by introducing environment-friendly vehicles which are empowered by latest technological advances.</center>
  
  <br /><center>
  
<font face="Times New Roman, Times, serif" size="+3"color="#330033"><b><i><u><span></span>VISION</u></i></b></font>
</h2>
</center>
</div>

  <br /><center>
  To contribute in eradication of poverty by making the common people self-dependent with our state of the art technology, products and services.
  </center>
  
  <br />
  <br />
  <br />
  <br />
  <hr color="black" size="5px">
</hr>
<br /></p></b>
</i></font>
<center>

</center>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>    <!-- ################################################################################################ -->

  
  
</div>    
       
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>    
	
      
<?php
include "footer.php";
?>