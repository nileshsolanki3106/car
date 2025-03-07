<?php
session_start();

// Database connection using MySQLi (Updated)
$con = mysqli_connect("localhost", "root", "", "sss");

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <title>EPICUREAN MOTORS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="css/nave.css">

    <style>
        .mySlides {display:none;}
        .heade { display: flex; }
        .stick { position: sticky; top: 0; }
        .headermain {
            display: flex;
            border: 2px solid black;
            text-align: center;
            justify-content: space-evenly;
        }
        .mwa {
            height: 5rem;
            width: 8rem;
            font-size: 17px;
        }
        .backg {
            background-image: url('3d2740887167e7edac73b8e11c3314a1.jpg');
        }
        .mar {
            background-color: aquamarine;
        }
    </style>
</head>
<body id="top">

    <!-- Header -->
    <div class="p1">
        <div class="mar" style="background-color:aquamarine;">
            <div class="col">
                <img src="https://static.wixstatic.com/media/5f32f9_cf5844e3b67a484eadfd6651c3ebe195~mv2.png/v1/fill/w_524,h_225,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Logo-site-internet.png"
                    alt="Logo-site-internet.png"
                    style="width:419px;height:180px;object-fit:cover; background-color:aquamarine;" 
                    width="419" height="180">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Navigation Bar -->
    <div class="wrapper row0" style="background-color:aliceblue;">
        <div id="topbar" class="hoc clear">
            <div class="fl_left">
                <font size="4px" color="black">
                    <ul class="nospace">
                        <li class="one_quarter fourth">
                            <a href="#"><img src="logo/download.jpg" style="border-radius:38%; margin-left:-10px;" alt=""></a>
                        </li>
                        <li><a href="register.php">Registration</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        
                        <?php if(isset($_SESSION['FirstName'])) { ?>
                            <li><a href="logout.php">LOGOUT</a></li><br><br>
                            <h3 style="color:#330000; text-align:center;">
                                Welcome &nbsp;&nbsp;<?php echo $_SESSION['FirstName']; ?>
                            </h3>
                        <?php } else { ?>
                            <li><a href="login.php">LOGIN</a></li>
                        <?php } ?>
                    </ul>
                </font>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <h1><a href="index.php"><font color="#330099"></font></a></h1>
                <div class="heade">
                    <nav id="mainav" class="fl_right">
                        <ul class="clear">
                            <font color="#000000">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a class="drop" href="#">View Products</a>
                                    <ul>
                                        <li><a href="product.php?cate_name=BMW">BMW</a></li>
                                        <li><a href="product.php?cate_name=MERCEDES-MAYBACH">MERCEDES-MAYBACH</a></li>
                                        <li><a href="product.php?cate_name=ROLLS-ROYCE">ROLLS-ROYCE</a></li>
                                        <li><a href="product.php?cate_name=BENTLY">BENTLY</a></li>
                                    </ul>
                                </li>
                                <li><a href="viewproduct.php">Products</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="admin/index.php">Admin</a></li>
                            </font>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>

</body>
</html>
