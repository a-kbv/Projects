<?php

function get_max($num1, $num2){
    if($num1 > $num2){
        return $num1;
    }else{
        return $num2;
    }
}

echo get_max(3, 5)

?>