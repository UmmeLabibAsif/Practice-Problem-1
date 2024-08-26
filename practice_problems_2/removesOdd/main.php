<?php
$removesOdd = function (array $arr) {
    $i = 0;

    while (count($arr) > $i) {
        if ($arr[$i] % 2 != 0) {
            unset($arr[$i]);
            $arr = array_values($arr);  
    } 
    else {
    $i++;
    }
   // echo "$i $arr[$i] \n";
}
   /* $filteredNumbers = array_filter($arr, function($value) {
        return $value % 2 != 0;
    });
    return $filteredNumbers; */
    $arr = array_values($arr);
    return $arr;
};

$arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 13 ,9, 11, 102, 103, 104);
print_r($removesOdd($arr));
?>
