<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<form action="password.php" method="post">
    Color: <input type="password" name="pw"> <br>

    <input type="submit">
</form>

<?php

$password = $_POST["pw"];
echo "Your password is: $password <br>";

?>

</body>
</html>
