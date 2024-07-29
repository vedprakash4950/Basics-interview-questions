<?php
//question 1.
// $x= 5;
// $y = &$x;
// var_dump($y);

// var_dump($x+++$x++);
//  var_dump($x);
// var_dump($x---$x--);

// var_dump($x);
//question 2.
// var_dump('0123' === 123);
// var_dump('0123' == 123);
// var_dump(0123 === 123);
//question 3.
// $refArray = array();
// $refArray['val1'] = array(1,2);
// $refArray['val2'] = 3;
// $refArray['val3'] = array(3,4);
// $testarray = array();

// $testarray = array_merge($testarray,$refArray['val1']);
// var_dump($testarray);
// $testarray = array_merge($testarray,$refArray['val2']);
// var_dump($testarray);


//question 4
$i = 0;
while ($i < 3) {
    echo ++$i;
}
?>