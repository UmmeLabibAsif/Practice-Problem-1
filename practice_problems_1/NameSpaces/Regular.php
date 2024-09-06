<?php

namespace Regular;

class User {
    public $name;

    public function _construct($name) {
        $this->name = $name;
    }

    public function get_role() {
        echo "Role is regular "  . "<br>";
    }
}

?>