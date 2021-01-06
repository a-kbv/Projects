<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<form action="simple_calc.php" method="get">
    first number: <input type="number" name="num1">
    <br>
    second number: <input type="number" name="num2">
    <br>
    <input type="submit">
</form>

The sum is: <?php echo $_GET["num1"] + $_GET["num2"] ?>

</body>
</html>
