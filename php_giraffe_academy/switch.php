<form action="" method="post">
    What is your grade?
    <input type="number" name="grade">
    <input type="submit">
</form>

<?php

$grade = $_POST["grade"];
switch ($grade){
    case 6:
        echo "Excellent";
        break;
    case 5:
        echo "Very Good";
        break;
    case 4:
        echo "Poor";
        break;
    case 3:
        echo "Very Bad";
        break;
    case 2:
        echo "FAIL";
        break;
    default:
        echo "Invalid Grade";
}


?>