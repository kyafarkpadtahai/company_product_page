<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $host = "localhost";
    $dbUsername = "root";
    $dbPassord = "root";
    $dbname = "login";

    $conn = new mysqli($host, $dbUsername, $dbPassord, $dbname);

    if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
    }
    
    $sql = "INSERT INTO login_info (username, email, password) VALUES ('$username', '$email', '$password');";

    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Error: ".$sql . "<br>" .$conn->error;
    }

    $conn->close();
?>