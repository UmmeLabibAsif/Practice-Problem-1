<?php
trait Timestampable {
    public function getCreatedAt() {
        return date('d-m-Y H:i:s');
}

    public function getUpdatedAt() {
        return date('d-m-Y H:i:s');
    }
}
?>
