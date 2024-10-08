<?php
session_start();
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
    } else {
        $accountData["firstname"] = $_POST['fname'];
        $accountData["lastname"] = $_POST['lname'];
        $toMail = $_POST['email'];
        $accountData["email"] = $toMail;
        $accountData["password"] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $newOtp = rand(0000, 9999);
        $accountData["otp"] = $newOtp;


        //$mail->Host = 'smtp.gmail.com';
        //$mail->Username = 'litefashion256@gmail.com'; 
        //$mail->Password = 'dark567@DDz'; // Use an app password if 2FA is enabled// passkey
        //$mail->Port = 587;


        try {/*_DIR_ used for find currecnt location         require __DIR__ . '/vendor/autoload.php';*/
            require '..\\LibarayExternal\\vendor\\autoload.php'; //autoload.php parth search

            $dotenv = Dotenv\Dotenv::createImmutable('..\\LibarayExternal'); //env file path search
            /*
                //use Dotenv\Dotenv; //type up to php file
                $dotenv = Dotenv::createImmutable('..\\LibarayExternal');
                
                //use Resend\Resend;
            */

            $dotenv->load();
        } catch (Exception $e) {
            echo "Error loading .env file: " . $e->getMessage();
        }
        
        $apiKey = $_ENV['EMAIL_API_ADDRESS_KEY'];
        $resend = Resend::client($apiKey);

        $resend->emails->send([
            
            'from' => 'litefashion@dhanushka.software',
            'to' => $toMail,
            'subject' => "Your Verify code",
            'html' => '<p><b>User Name : </b> ' . $toMail . '</p> <br> <h2>Your Verify Code : ' . $newOtp . ' <br></h2>',
        ]);
        $_SESSION['showDiv']=false;
        echo "send mail";
       
    }
} else {
    header("Location: ../index.php?signup=empty");
    exit();
}
if (isset($_POST['SubmitOTP'])) {

    $otp = $_POST['otpCode'];
    if ($otp != $accountData["otp"]) {
        echo  "<script>alert('Invalid OTP code');</script>";
    } else {
        // Connect to the database
        include_once("Connection.php");

        // Prepare the SQL query
        $stmt = $connect->prepare("INSERT INTO account (Fname, Lname, email, accPassword) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $accountData["firstname"], $accountData["lastname"], $accountData["email"], $accountData["password"]);

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
