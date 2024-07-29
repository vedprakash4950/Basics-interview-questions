<?php
$a = 5;

$output = 1;
$outputString = '';
for($i= 1; $i<=$a;$i++){
    $output = $output*$i;
    $outputString .= $i;
    if($i < $a){
        $outputString .= '*';
    }else{
        $outputString .= '=';
    }
    
}
echo $outputString;print_r($output);die;



?>