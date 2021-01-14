<?php
function issueAuthenticationString(PDO $db, int $userId): string
{
    $query = "SELECT auth_string FROM authetications WHERE user_id = ?";

    $stmt = $db->prepare($query);
    $stmt->execute($userId);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($data && $data['auth_string']) {
       return $data['auth_string'];
    }

    $authString = uniqid();
    $query = "INSERT INTO authetications (auth_string,user_id) VALUES(?,?)";

    $stmt = $db->prepare($query);
    $stmt->execute([$authString, $userId]);

    return $authString;
}//------------------------------END OF SESSION STRING FUNCTION------------------------------------------

function verifyCredentials(PDO $db, $username, $password): int
{
    $query = " SELECT id,password FROM users WHERE username = ?";

    $stmt = $db->prepare($query);
    if(!$stmt->execute([$username])){
        return -1;
    }
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $passwordHash = $user['password'];

    $result = password_verify($password, $passwordHash);
    if ($result){
        return (int)$user['id'];
    }
    return -1;
}//----------------------END OF VERIFY CREDENTIALS QUERY FUNCTION--------------------------------------

function register(PDO $db, string $username, string $password): bool
{
    $query = "INSERT INTOusers(username,password) VALUES (?,?)";
    //send QUERY
    $statement = $db->prepare($query);
    $result = $statement->execute([
        $username,
        password_hash($password, PASSWORD_ARGON2I)
    ]);
    return $result;
}//----------------------END OF REGISTER QUERY FUNCTION