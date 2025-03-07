<?php
include "header.php";

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | EPICUREAN MOTORS</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style>
        .f1 {
            height: 400px;
            width: 500px;
            border: 2px solid #ccc;
            border-radius: 10px;
            margin: 10px;
            transition: transform 0.3s;
        }
        .f1:hover {
            transform: scale(1.05);
        }
        .gallery-container {
            text-align: center;
            margin-top: 20px;
        }
        .gallery-table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }
        .gallery-table td {
            padding: 15px;
            text-align: center;
        }
        h2 {
            color: #006600;
            text-align: center;
            font-size: 32px;
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>
<body>

<h2><b><i>Gallery</i></b></h2>

<div class="gallery-container">
    <table class="gallery-table">
        <tr>
            <?php
            $i = 0;
            $sql = "SELECT * FROM gallary";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                if ($i % 4 == 0 && $i != 0) {
                    echo "</tr><tr>";
                }
                ?>
                <td>
                    <img class="f1" src="admin/gallary/<?php echo $row['path']; ?>" alt="Gallery Image">
                </td>
                <?php
                $i++;
            }
            ?>
        </tr>
    </table>
</div>

</body>

<?php
include "footer.php";
?>
</html>
