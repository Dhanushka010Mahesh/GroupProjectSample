<div class="text-green-300 bg-gray-800">
    <div class="text-center p-10">
        <p>&copy; Group Project</p>
        <p class="text-sm">Contact - 0766640384</p>
    </div>
</div>
<?php


    if((!isset($_SESSION['userName'])) || (!isset($_SESSION['password'])) ){
        echo "you not have account";
    }else{
        echo "login";
        echo $_SESSION['userName'] ." ". $_SESSION['password'];
    }

    session_unset();

    echo $_SESSION['userName'] ." ". $_SESSION['password'];
?>