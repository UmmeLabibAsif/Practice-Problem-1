<?php
require_once 'Timestampable.php';

class Article {
    use Timestampable;

    public $title;

    public function __construct($title) {
        $this->title = $title;
    }
}

$obj = new Article ("This is my first object");
echo $obj->getCreatedAt() . "\n";
echo $obj->getUpdatedAt();

?>