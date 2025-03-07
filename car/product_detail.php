<?php 
include "header.php";

// Database connection using MySQLi (Updated)
$con = mysqli_connect("localhost", "root", "", "sss");

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$p_id = $_GET['p_id'];
echo $p_id;
$sql = mysql_query("select * from supplier_product_table where supplier_product_id =$p_id ");

while($res = mysql_fetch_assoc($sql)){
    echo "
    <div class='card'>
    <table align='center' border='0' cellpadding='4' cellspacing='4'><tr align='center'>
    <td align='center'><img class='img1' src='admin/product/$res[file]' width='28rem' height='28rem'style='height:50rem; width:85%';  class='k' />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div style='margin-right:100px'><a  style='color:#000033; font-size:16px; font-weight:700' href='detail.php?id= $res[supplier_product_id] $res[product_name]; </a></div>&nbsp;
   
    <div style='color:#000033;margin-right:100px'>$res[product_name]</div>
   
    <div style='color:#000033;margin-right:100px'>Price: $res[product_rate]</div>
    <div style='color:#000033;margin-right:100px'>Detailes:&nbsp;   $res[accessories]
    <p><a href='order.php?p_id=$res[supplier_product_id]'>Order Now</a>
    </p>
    </div></td>
    </div>
    </table>
    </div>
    ";
}
?>
<!--test> last day-->
<!--form top next form order now<a href='product_detail.php?p_id=$res[supplier_product_id]' class='btn btn-primary' style='margin-left:20px;' ><font size='1px'>click for information</font></a>-->

<!--test end-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php include "footer.php";
?>
</html>