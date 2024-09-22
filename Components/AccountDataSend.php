<?php

$accountData = array(
    "firstname" => "",
    "lastname" => "",
    "email" => "",
    "password" => "",
    "otp" => "",
);

if (isset($_POST['submitACC'])) {
    // Validate inputs
    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['password'])) {
        header("Location: ../index.php?signup=empty");
        exit();
    }else{

        $accountData["firstname"] = $_POST['fname'];
        $accountData["lastname"] = $_POST['lname'];
        $mailEmail=$_POST['email'];
        $accountData["email"] = $mailEmail;
        $accountData["password"] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $newOtp=rand(0000,9999);
        $accountData["otp"] = $newOtp;

        require('Mail/PHPMailerAutoload.php');
        $mailServer1=new PHPMailer;


        $mailServer1->Host='smtp.gmail.com';
        $mailServer1->Port=587;
        $mailServer1->SMTPAuth=true;
        $mailServer1->SMTPSecure='tls';

        $myMailAddress='';
        $mailServer1->Username=$myMailAddress;
        $mailServer1->Password='';

        $mailServer1->setFrom($myMailAddress,'dhanushka');
        $mailServer1->addAddress($mailEmail);
        

        $mailServer1->isHTML(true);
        $mailServer1->Subject="Your Verify code";
        $mailServer1->Body="<p><b>User Name : </b> $mailEmail </p> <br> <h2>Your Verify Code : $newOtp <br></h2> ";

        if($mailServer1->send()){
            ?>

                <script>
                    alert('Invalid Email Address');
                </script>

            <?php
        }else{
            echo  "<script>alert('OTP code has been sending email $mailEmail');</script>";
        }

    }

   

    
} else {
    header("Location: ../index.php?signup=empty");
    exit();
}

if (isset($_POST['SubmitOTP'])) {
    
    $otp = $_POST['otpCode'];
    if($otp != $accountData["otp"]){
        echo  "<script>alert('Invalid OTP code');</script>";
    }else{
        // Connect to the database
    include_once("Connection.php");

    // Prepare the SQL query
    $stmt = $connect->prepare("INSERT INTO account (Fname, Lname, email, accPassword) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $accountData["firstname"] , $accountData["lastname"] , $accountData["email"] , $accountData["password"] );

    // Execute the query
    if ($stmt->execute()) {
        // Optionally, set session variables or redirect
        header("Location: ../index.php?signup=success");
        
    } else {
        header("Location: ../index.php?signup=error");
    }

    // Close the statement and connection
    $stmt->close();
    $connect->close();
    }

}