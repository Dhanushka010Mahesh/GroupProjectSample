<?php
if (isset($_POST['submitACC'])) {
    // Validate inputs
    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['password'])) {
        header("Location: ../index.php?signup=empty");
        exit();
    }

    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $email = $_POST['email'];
    $Password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Connect to the database
    include_once("Connection.php");

    // Prepare the SQL query
    $stmt = $connect->prepare("INSERT INTO account (Fname, Lname, email, accPassword) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fName, $lName, $email, $Password);

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
} else {
    header("Location: ../index.php?signup=empty");
    exit();
}