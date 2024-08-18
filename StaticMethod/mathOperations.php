<?php

class mathOperation {
    public $a;
    public $b;


    function __construct ($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public static function add ($a, $b) {
        return "Sum: " . ($a + $b) . "<br>";
    }

    public static function subtract ($a, $b) {
        return "Difference: " . ($a - $b) . "<br>";
    }

    public static function multiply ($a, $b) {
        return "Product: " . ($a * $b) . "<br>";
    }

    public static function divide ($a, $b) {
        return "Division: " . ($a / $b) . "<br>";
    }
}

echo mathOperation::add(6, 7) . "\n";
echo mathOperation::subtract(6, 7) .  "\n";
echo mathOperation::multiply(6, 7) .  "\n";
echo mathOperation::divide(6, 7) .  "\n";

?>