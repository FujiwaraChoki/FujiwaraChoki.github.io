<?php
    $usernameInput = $_POST['usernameInput'];
    $passwordInput = $_POST['passwordInput'];
    
    $con = new mysqli('localhost', 'root', '', 'account');
    if($con->connect_error) {
        die('Failed to connect : '.$con->connect_error);
    } else {
        $stmt = $con->prepare("insert into user(username, password) values(?, ?)");
        $stmt->bind_param("ss", $usernameInput, $passwordInput);
        $stmt->execute();
        echo "Successfully registered!";
        $stmt->close();
        $con->close();
    }
?>