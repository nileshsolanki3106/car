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
    <title>Contact Us | EPICUREAN MOTORS</title>
    <style>
        body {
            background-color: white;
            font-family: "Times New Roman", Times, serif;
        }
        .contact-container {
            width: 50%;
            margin: auto;
            text-align: center;
        }
        .contact-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .contact-table td {
            padding: 10px;
            font-size: 18px;
            color: #003333;
        }
        .contact-table b {
            color: #660000;
        }
        .contact-table i {
            color: #660000;
        }
        h2 {
            color: #660000;
            text-decoration: underline;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <center>
        <h2>CONTACT US</h2>
    </center>

    <div class="contact-container">
        <table class="contact-table">
            <tr>
                <td><b><i>Email</i></b></td>
                <td>:</td>
                <td><b>hardik@gmail.com<br>jignesh@gmail.com</td>
            </tr>
            <tr>
                <td><b><i>Address</i></b></td>
                <td>:</td>
                <td>
                    <b>EPICUREAN Motors<br>
                    Sub-branch: Deesa,<br>
                    Main branch: Ahmedabad,<br>
                    Gujarat, India</b>
                </td>
            </tr>
            <tr>
                <td><b><i>Phone</i></b></td>
                <td>:</td>
                <td><i>+91 9988776542</i></td>
            </tr>
            <tr>
                <td><b><i>Talk to us</i></b></td>
                <td>:</td>
                <td><i>+91 9988776541</i></td>
            </tr>
            <tr>
                <td><b><i>WhatsApp us at</i></b></td>
                <td>:</td>
                <td><i>+91 9988776540</i></td>
            </tr>
        </table>
    </div>

</body>
</html>

<?php
include "footer.php";
?>
