<?php
require_once 'db/db_connection.php';
$response = '';
$suername = "";
$password = "";

if (isset($_POST['username'], $_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'db/user_queries.php';

    $userId = verifyCredentials($db, $username, $password);
    if ($userId != -1){
        $authString = issueAuthenticationString($db, $userId);
        var_dump($authString);
    }

}
require_once 'templates/login_form.php';