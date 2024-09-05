<?php
include ('../Components/DataBaseConnection.php');

if (isset($_POST['Signup'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password=md5($password);

    // Check if email already exists
    $checkEmail = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        // Insert new user
        $insertQuery = "INSERT INTO user (firstName, lastName, email,password) VALUES ('$firstName', '$lastName', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
if(isset($_post['signIn'])){
    $email=$_post['email'];
    $password=$_post['password'];
    $password=md5($password);

    $sql="SELECT * From user WHERE email='$email' and password ='$password')";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $rows=$result->fetch_assoc();
        $_SESSION['email']=$rows['email'];
        header("Location: homepage.php");
        exit();

    }
    else{
        echo "Not found ,Incorrect Email or Password";
    }
}
?>

