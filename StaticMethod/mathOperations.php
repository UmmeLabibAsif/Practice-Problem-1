<?php
class MathOperation {
    public $a;
    public $b;

    function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public static function add($a, $b) {
        return "Sum: " . ($a + $b) . "<br>";
    }

    public static function subtract($a, $b) {
        return "Difference: " . ($a - $b) . "<br>";
    }

    public static function multiply($a, $b) {
        return "Product: " . ($a * $b) . "<br>";
    }

    public static function divide($a, $b) {
        return "Division: " . ($a / $b) . "<br>";
    }
}

echo MathOperation::add(6, 7) . "\n";
echo MathOperation::subtract(6, 7) .  "\n";
echo MathOperation::multiply(6, 7) .  "\n";
echo MathOperation::divide(6, 7) .  "\n";
?>
