<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db_name = "login";

    $conn = new mysqli($host, $user, $pass, $db_name);
    
    if($conn->connect_error){
        die("Connection failed");
    }

    $sql = "SELECT password from login_info where username ='$username';";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    if($row['password'] == $password){
        echo "Welcome";
    }
    else{
        echo "Wrong username or password";
    }

    

?>