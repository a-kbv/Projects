<form action="four_func_calc.php" method="post">
    first_num<input type="number" name = n1><br>
    OP <input type="textbox" name = op><br>
    sec_num<input type="number" name = n2><br>

    <input type="submit">
</form>

<?php
function calc($num1, $op, $num2){
    if ($op == "+"){
        return $num2 + $num1;
    }elseif ($op == "-"){
        return $num2 - $num1;
    }elseif ($op == "*"){
        return $num2 * $num1;
    }elseif ($op == "/"){
        return $num2 / $num1;
    }
}
$n1 = $_POST["n1"];
$op = $_POST["op"];
$n2 = $_POST["n2"];

echo calc($n1, $op, $n2);
?>