<?php



if(isset($_POST['submitACC'])){
    echo "<script>alert('helo')</script>";
    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $email = $_POST['email'];
    $Password = $_POST['password'];

    // Connect to the database
    $connect = mysqli_connect("localhost", "root", "", "cloth_database");

    // Check connection
    if($connect === false){
        die("Connection Error: " . mysqli_connect_error());
    }

    // Prepare the SQL query with parameterized inputs to prevent SQL injection
    $stmt = $connect->prepare("INSERT INTO account (Fname, Lname, email, accPassword) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fName, $lName, $email, $Password);

    // Execute the query
    if($stmt->execute()){
        echo "<script>alert('Successfully registered')</script>";
    } else {
        echo "<script>alert('Error occurred: " . $stmt->error . "')</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $connect->close();
} else {
    header("Location: ../index.php?signup=empty");
    exit();
}


?>