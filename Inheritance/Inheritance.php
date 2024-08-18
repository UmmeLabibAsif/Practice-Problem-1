<?php
 
class Product {
    public $name;
    public $price;
    public $vendor_id;
    public $product_id;


    function __construct ($name, $price, $vendor_id, $product_id) {
        $this->name = $name;
        $this->price = $price;
        $this->vendor_id = $vendor_id;
        $this->product_id = $product_id;
    }

    public function getDetails () {
        echo "Product: " . $this->name . " " . $this->price . $this->vendor_id . " " . $this->product_id . "<br>";
    }
}

class Book extends Product {

    public $author;
    public $publish_year;
    
    public function __construct($name, $price, $vendor_id, $product_id, $author, $publish_year) {
        parent::__construct($name, $price, $vendor_id, $product_id);
        $this->author = $author;
        $this->publish_year = $publish_year;
    }
    
    public function getDetails () {
        echo "Book: " . $this->name . " " . $this->price . $this->vendor_id . " " . $this->product_id . " " . $this->author . " " . $this->publish_year . "<br>";
    }
}

class Electronic extends Product {

    public $warranty;
    public $model_name;
    
    public function __construct($name, $price, $vendor_id, $product_id, $warranty, $model_name) {
        parent::__construct($name, $price, $vendor_id, $product_id);
        $this->warranty = $warranty;
        $this->model_name = $model_name;
    }
    
    public function getDetails () {
        echo "Electronic : " . $this->name . " " . $this->price . $this->vendor_id . " " . $this->product_id . " " . $this->warranty . " " . $this->model_name . "<br>";
    }
}

$product = new Product("Product", 12.3, 0001, 101);
$product->getDetails();

$book = new Product("Book", 2.3, 0002, 102, "Charlie", 2001);
$book->getDetails();

$electronic = new Product("Electronic", 103, 0003, 103, 2007, "A45");
$electronic->getDetails();



?>