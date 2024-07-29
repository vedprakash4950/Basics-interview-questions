<?php
//frbonici
$a= 0;
$b= 1;
function printSeries($a,$b){
    echo $a."</br>";
    if($a > 20){
        exit;
    }
    $nextval = $a + $b;
    printSeries($b,$nextval);
}
printSeries($a,$b)


?>