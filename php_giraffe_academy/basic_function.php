
<?php


function say_Hi($name, $age){
    echo "Hello $name you are $age years old.<br>";
}

function cube($number){
    return $number * $number * $number;
}

say_Hi("Tom", 30);
say_Hi("Dave", 25);
say_Hi("Oscar", 10);
$cube_result = cube(4);
echo $cube_result;

?>
