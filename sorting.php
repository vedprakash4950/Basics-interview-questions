<?php
//array sort
$arr = [1,3,1,4,9,3,5,6,8,3,5,2];
// $n = count($arr);
// for ($i = 0; $i < $n - 1; $i++) {
//     for ($j = 0; $j < $n - $i - 1; $j++) {
//         if ($arr[$j] > $arr[$j + 1]) {
//             // Swap arr[j] and arr[j+1]
//             $temp = $arr[$j];
//             $arr[$j] = $arr[$j + 1];
//             $arr[$j + 1] = $temp;
//         }
//     }
// }
for($i=0;$i<count($arr);$i++){
    for($j=$i+1;$j<count($arr);$j++){
        if($arr[$i]<$arr[$j]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}


echo "<pre>";print_r($arr);die();