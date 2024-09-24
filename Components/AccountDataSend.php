<?php
require '/System/Xampp/htdocs/GroupProjectSample/Components/vendor/autoload.php';

// Use the PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$accountData = array(
    "firstname" => "",
    "lastname" => "",
    "email" => "",
    "password" => "",
    "otp" => "9999",
);

if (isset($_POST['submitACC'])) {
    // Validate inputs
    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['password'])) {
        header("Location: ../index.php?signup=empty");
        exit();
    }else{
        $accountData["firstname"] = $_POST['fname'];
        $accountData["lastname"] = $_POST['lname'];
        $toMail=$_POST['email'];
        $accountData["email"] = $toMail;
        $accountData["password"] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $newOtp=rand(0000,9999);
        $accountData["otp"] = $newOtp;

        // $email = $toMail; // Get the user's email from your form
        // $subject = "Your OTP Code";
        // $message = "Your OTP code is: $newOtp";
        // $headers = "From: litefashion256@gmail.com";

        // if (mail($email, $subject, $message, $headers)) {
        //     echo "OTP sent successfully!";
        // } else {
        //     echo "Failed to send OTP.";
        // }

            

            require '/System/Xampp/htdocs/GroupProjectSample/Components/vendor/phpmailer/phpmailer/src/Exception.php';
            require '/System/Xampp/htdocs/GroupProjectSample/Components/vendor/phpmailer/phpmailer/src/PHPMailer.php';
            require '/System/Xampp/htdocs/GroupProjectSample/Components/vendor/phpmailer/phpmailer/src/SMTP.php';

            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'litefashion256@gmail.com'; 
                $mail->Password = 'dark567@DDz'; // Use an app password if 2FA is enabled
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
                $mail->Port = 587;

                // Recipients
                $mail->setFrom('litefashion256@gmail.com', 'Your Name');
                $mail->addAddress($toMail); 

                // Content
                $mail->isHTML(true);
                $mail->Subject = "Your Verify code";
                $mail->Body    = "<p><b>User Name : </b> $toMail </p> <br> <h2>Your Verify Code : $newOtp <br></h2> ";

                $mail->send();
                echo "OTP sent successfully!";
} catch (Exception $e) {
    echo "Failed to send OTP. Mailer Error: {$mail->ErrorInfo}";
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