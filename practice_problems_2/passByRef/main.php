<?php
if (!function_exists('doubleVal')) { //ask
    //error: Fatal error: Cannot redeclare doubleVal() 
    //in /Applications/MAMP/htdocs/Activity2/passByRef/main.php on line 4
    function doubleVal (&$arr) {
        for ($i = 0; $i < count($arr); $i++) {
            $arr[$i] = $arr[$i] * 2;
        }
    }
}

$arr = array(1,2,3,4,5,6,7,8,9,10,11,12);
doubleVal($arr);
print_r($arr);
?>
