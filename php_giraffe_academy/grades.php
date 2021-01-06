<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<form action="grades.php" method="post">
    <input type="text" name="student">
    <input type="submit">
</form>

<?php
$student = $_POST['student'];
$grades = [
        "John" => 6,
        "George" => 5,
        "Ani" => 4,
];
echo $grades[$student]

?>

</body>
</html>
