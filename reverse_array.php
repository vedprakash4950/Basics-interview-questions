<?php
//array reverse
$arr = [2,8,5,3,1];
$n = count($arr)-1;
$output = [];
 for($i=$n;$n>=0;$i--){
    $output[] = $arr[$i];
    $n--;
 }

echo "<pre>";print_r($output);die();