<?php

$arr = [1, 5, 2, 9, 8, 3, 7,10]; // Example array

// Initialize with the lowest possible integer value
$max1 = $arr[0];
$max2 = $arr[0];

// First pass to find the highest value
for($i = 0; $i< count($arr);$i++){
    if($arr[$i] > $max1){
        $max1 = $arr[$i];
    }
}
// Second pass to find the highest value less than the highest value

for($i = 0; $i< count($arr);$i++){
    if ($arr[$i] > $max2 && $arr[$i] < $max1) {
        $max2 = $arr[$i];
    }
}



echo "Second highest value: " . $max1   ;

?>