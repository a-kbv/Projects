<?php

require_once("config.php");

function chech_login($db, $email, $password){
    $query = $db->prepare("
        SELECT * FROM users WHERE email=? AND password=?
    ");
    $query->bindParam(1, $email);
    $query->bindParam(2, $password);

    $query->execute();
    // check how many rows are returned
    if ($query->rowCount() == 1){
        return true;
    }else{
        return false;
    }
}

if (isset($_POST['login'])){
    $db = config::connect();

    $email = $_POST['emailPHP'];
    $password = $_POST['passwordPHP'];
    
    if (chech_login($db, $email, $password)){
        echo '<h1>' . 'Welcome ' .$email.'!'.'<h1>';
    }else{
        echo "<h1>The email or password is incorrect!</h1>";
    }
    
}
