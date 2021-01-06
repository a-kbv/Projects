<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<?php
// working with strings
$phrase = "Giraffe Academy";
echo $phrase;
echo "<br>";

echo strtolower($phrase);
echo "<br>";

echo strlen($phrase);
echo "<br>";

echo $phrase[0];
echo "<br>";

$phrase[0] = "B";
echo $phrase;
echo "<br>";
$phrase[0] = "G";

echo str_replace("Giraffe", "Panda", $phrase);
echo "<br>";

echo substr($phrase, 0, 7);
echo "<br>";
echo substr($phrase, 8);
echo "<br>";

// Working with numbers
echo 40;
echo "<br>";
echo -59.835;
echo "<br>";
echo 10 % 3;
echo "<br>";



?>

</body>
</html>