<?php
$is_female = true;
$is_tall = true;
$is_beautifull = true;

if ($is_female){
    echo "You are female. <br>";
}else{
    echo "You are not female.";
}
if ($is_female && $is_tall && $is_beautifull){
    echo "Also tall and beautifull.";
}elseif ($is_female && $is_tall){
    echo "Also tall one";
}elseif ($is_female && $is_beautifull){
    echo "Also beautifull one";
}else{
    echo "Neither beautifill or tall";
}

?>
