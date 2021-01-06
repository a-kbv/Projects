<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<form action="madlibs.php" method="get">
    Color: <input type="text" name="color"> <br>
    Plural Noun: <input type="text" name="plnoun"> <br>
    Celebrity: <input type="text" name="celeb"> <br>

    <input type="submit">
</form>

<?php
$color = $_GET["color"];
$plnoun = $_GET["plnoun"];
$celeb = $_GET["celeb"];

echo "Roses are $color <br>";
echo "$plnoun are blue <br>";
echo "I love $celeb <br>";

?>

</body>
</html>
