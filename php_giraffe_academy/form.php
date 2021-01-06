<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<form action="form.php" method="get">
    Name: <input type="text" name="name">
    <br>
    Age: <input type="number" name="age">
    <br>
    <input type="submit">
</form>

Your name is <?php echo $_GET["name"] ?> and you are
<?php echo $_GET["age"] ?> years old.

</body>
</html>
