<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="templates/style/styles.css"
</head>
<body>
<h1> LOGIN FORM </h1>
<form method="post">
    Username: <input type="text" name="username"/><br/>
    Password: <input type="<?= !empty($password) ? 'text' : 'password';?>" name="password"/><br/>
    <input type="submit"/>
</form>
<div id="response">
    <?= $response; ?>
</div>
</body>
</html>