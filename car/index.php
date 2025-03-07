 <?php
include "header.php";

// Database connection using MySQLi (Updated)
$con = mysqli_connect("localhost", "root", "", "sss");

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<html>
  <head>
    <link rel="stylesheet" href="newp.css">
    <style>
      .contener1
{
  background-color:white;
	/*border: green 2px solid;*/
    display: flex;
    width:95rem;
    margin-left: -10rem;
    height: 45rem;
    padding-top:3rem;
    justify-content:space-evenly;  
}

      </style>
  </head>
    <body >
<div>

  <center>

<div class="w3-content w3-section" style="max-width:1500px">
   <p ><img class="mySlides"  src="img\67d4dd5bacf5d7209605ac3f18fc42c5.jpg" style="width:1350px;height:600px;">
     <img class="mySlides" src="img\67d4dd5bacf5d7209605ac3f18fc42c5.jpg" style="width:1350px;height:600px;">
     <img class="mySlides" src="img\34bd442ff1709d6c14d2f15a0a9e8a95.jpg" style="width:1350px;height:600px;">
     <img class="mySlides" src="img\d47aaf46f7f479108720a5d3b2879d2d.jpg" style="width:1350px;height:600px;">
     <img class="mySlides" src="img\26ed1dac9b7033b2b830c2f47b756952.jpg" style="width:1350px;height:600px;">
     <img class="mySlides" src="img\6961f489166af909e11bb87e9a27024f.jpg" style="width:1350px;height:600px;">
         
</p>
</div>
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


<center>
    <article>
      <p>&nbsp;</p><!--  color="#660000" -->
 <h5><font color="#660000" size=15px><b>with epicurene motors<br />find the right car for you</b></font></h5>
      
    </article>
<center>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<div class="wrapper row3"></div>
  <figure class="hoc container clear clients"> 
    <!-- ################################################################################################ -->
    <figcaption class="sectiontitle">
      <!--<h6 class="heading"><font color="#000000"><b><i>We Are Provide verious model</i></b></font></h6>-->
      
    </figcaption>

    <!--<ul class="nospace group">
<li class="one_quarter second"><img src="img/img1.jpg" alt=""></li>
      <li class="one_quarter third" class="margi"><img src="img/img1.jpg" alt=""></li>
      <li class="one_quarter fourth"><img src="img/img1.jpg" alt=""></li>
	  <li class="one_quarter fourth"><img src="img/img1.jpg" alt=""></li>
   <li class="one_quarter fourth"><img src="img/img1.jpg" alt=""></li>
  <li class="one_quarter fourth"><img src="img/img1.jpg" alt=""></li>
   
    </ul>-->
    
    <!--my test ing-->

    <div class="contener1">
      
<div class="card" style="width: 20rem;">
  <img src="product\m8.jpg"  style="width:25rem; height:25rem;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">AED</h5>
    <p class="card-text">Bentley continental GT bentley  GT model 2013 GCC space full opration</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

  <!--second card-->
  <div class="card" style="width: 20rem;">
  <img src="product\photo-1624804269473-828dcc30a210.jpeg"  style="width:25rem; height:25rem;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Arturovalvarez</h5>
    <p class="card-text">2021 Rollls Royce Ghost-6.75 LV=12 twin-tubochaged </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>
<!--therd card-->
<div class="card" style="width: 25rem;">
  <img src="product\058624711b303382f5f737d8d13db43e.jpg" style="width:25rem; height:25rem;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CL-GE-31 </h5>
    <p class="card-text">CL-GE-31  gloss electro metallic memba green vehical<p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>


  </div>
	
	
	
    <!-- ################################################################################################ -->
  </figure>
</div>


    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
  
  
  
   <!-- ################################################################################################ -->
  </article>
</div>
<div style="background-color:black";>
 <!-- ##################### <article class="hoc cta clear"><font color="white" size="+2"><b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<marquee>ATUL AUTO ONLINE</marquee></i></b></font>
   
   
  </article>########################################################################### -->
</div>

<div class="wrapper row3">
  <figure class="hoc container clear clients"> 
    <!-- ################################################################################################ -->
   
    <center>
    <article>
      <p>&nbsp;</p><!--  color="#660000" -->
 <h5><font color="#660000" size=15px><b>click here for specific brand</b></font></h5>
      
    </article>
<center>
    <ul class="nospace group">
    <li class="one_quarter first"><a href="product.php?cate_name=BENTLY"><img src="logo\750d6abfc923b65dceefc4fe6d4823ea.jpg" alt=""><font color="black"size=1px>click me for more</font><br><font size=4px><b>BENTLY</b></font></a></li>
    <li class="one_quarter second"><a href="product.php?cate_name=BMW"><img src="logo\384c89de3e784a46b2a9c5cfee1a0b3b.jpg" alt=""><font color="black"size=1px>click me for more</font><br><font size=4px><b>BMW</b></font></a></li>
      <li class="one_quarter third"><a href="product.php?cate_name=MERCEDES-MAYBACH"><img src="logo\ef07a79d2c5cc9a7cb8105e144eb5552.jpg"  alt=""><font color="black"size=1px>click me for more</font><br><font size=4px><b>MERCEDES-MAYBACH</b></font></a></li>
      <li class="one_quarter fourth"><a href="product.php?cate_name=ROLLS-ROYCE"><img src="logo\5f859535a5ffb6452fcd561845b82eb5.jpg"  alt=""><font color="black"size=1px>click me for more</font><br><font size=4px><b>ROLLS-ROYCE</b></font></a></li>

      <!-- <li class="one_quarter first"><a href="astonmartin.php"><img src="logo\aston-martin-1835243_1280.jpg" alt=""><font color="black"size=1px>click me for more</font><br><font size=4px><b>aston-martin</b></font></a></li>
      <li class="one_quarter second"><a href="bmw1.php"><img src="logo\bmw-866709_1280.jpg" alt=""><font color="black"size=1px>click me for more</font><br><font size=4px><b>BMW</b></font></a></li>
      <li class="one_quarter third"><a href="mar.php"><img src="logo\mercedes-564949_1280.jpg"  alt=""><font color="black"size=1px>click me for more</font><br><font size=4px><b>marsadi</b></font></a></li>
      <li class="one_quarter fourth"><a href="rr.php"><img src="logo\rolls-royce-1789994_1280.jpg"  alt=""><font color="black"size=1px>click me for more</font><br><font size=4px><b>ROLLS-ROYCE</b></font></a></li> -->
    </ul>
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->

    
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<br /><br />

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Footer Background Image Wrapper -->
<?php include "footer.php";
?>
</body>

</html>