<?php
$arr = [1,2,0,5,0,2,4,3,3,3];
for($i = 0; $i<count($arr);$i++){
    if($arr[$i] == 2 || $arr[$i] == 4){
        $arr[$i] = 0;
    }
    
}
for($j = count($arr)-1; $j>=0;$j--){
    if($arr[$j] == 3){
        $arr[$j] = 0;
        break;
    }
}
echo "<pre>";print_r($arr);die;


?>