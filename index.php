<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/Tailwind_css.css">
    <title>Document</title>
</head>
<body>
    <?php

        include_once("Components/nav.php");

    ?>
    
    <p>this sampale group project</p>

    <?php
    include_once("ObjectClass/Product.php");
    $r=new Product();
    echo $r->printArr();

?>

    <?php

        include_once("Components/foot.php");

    ?>
</body>
</html>