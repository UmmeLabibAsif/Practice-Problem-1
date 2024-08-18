<?php

namespace regular;

class User {
    public $name;

    public function _construct($name) {
        $this->name = $name;
    }

    public function getRole() {
        echo "Role is regular "  . "<br>";
    }
}

?>