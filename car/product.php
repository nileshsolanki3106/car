<?php 
include "header.php";

// Database connection using MySQLi (Updated)
$con = mysqli_connect("localhost", "root", "", "sss");

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get category name safely
$cate_name = isset($_GET['cate_name']) ? mysqli_real_escape_string($con, $_GET['cate_name']) : '';

if (!$cate_name) {
    die("Invalid category name.");
}

// Fetch products
$sql = "SELECT * FROM supplier_product_table WHERE category = ?";
mysqli_stmt_bind_param($stmt, "s", $cate_name);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Gallery</title>
    <style>
        .container {
            width: 100%;
            flex-wrap: wrap;
            display: flex;
            justify-content: space-evenly;
        }
        .card {
            width: 30%;
            padding: 10px;
            border: 1px solid #ddd;
            margin: 10px;
            text-align: center;
        }
        .img1 {
            height: 22rem;
            width: 25rem;
            object-fit: cover;
        }
        .btn {
            text-decoration: none;
            padding: 8px 12px;
            background: #007BFF;
            color: white;
            border-radius: 5px;
            margin-top: 10px;
            display: inline-block;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 
        while ($res = mysqli_fetch_assoc($result)) {
            echo "
            <div class='card'>
                <img class='img1' src='admin/product/{$res['file']}' alt='{$res['product_name']}' />
                <h3>{$res['product_name']}</h3>
                <p><strong>Price:</strong> {$res['product_rate']}</p>
                <p>
                    <a href='order.php?p_id={$res['supplier_product_id']}' class='btn'>Order Now</a>
                    <a href='product_detail.php?p_id={$res['supplier_product_id']}' class='btn'>View Details</a>
                </p>
            </div>";
        }
        ?>
    </div>

<?php include "footer.php"; ?>
</body>
</html>
