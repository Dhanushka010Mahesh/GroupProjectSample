<?php
session_start();
include ('../Components/DataBaseConnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            Hello<?php
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $query = $conn->query("SELECT * FROM user WHERE email='$email'");
                while ($row = $query->fetch_assoc()) {
                    echo $row['firstName'] . ' ' . $row['lastName'];
                }
            }
            ?>
        </p>
    </div>
</body>
</html>
