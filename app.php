<?php
function foo ($a, $b) {
     echo $a + $b;
     echo "<hr>";
     echo 'num a: '.$a;
     echo "<hr>";
     echo 'num b: '.$b;
}

$func = 'foo';
$values = array(1, 2);
call_user_func_array($func, $values);
//returns 3
?>