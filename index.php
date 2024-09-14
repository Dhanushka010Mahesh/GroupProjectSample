<?php

    session_start();

    $_SESSION['userName']="DM";
    $_SESSION['password']="1234";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/Tailwind_css.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Dark Devils</title>
    <script src="js/index.js" defer></script>
</head>
<body>
    <?php include_once("Components/nav.php"); ?>

    <main id="main-content">
        <!-- Dynamic content will be loaded here -->
    </main>

    <?php include_once("Components/foot.php"); ?>
    
    
</body>
</html>