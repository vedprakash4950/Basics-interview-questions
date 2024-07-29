<?php
 $arr = [1,2,3,3,1,4,6,6,7,8,8];
 $len = count($arr);
 $output = [];
 for($i = 0; $i< $len;$i++){
    if(!isset($output[$arr[$i]])){
        $output[$arr[$i]] = $arr[$i];
    }
 }
echo "<pre>";print_r($output);die;
?>