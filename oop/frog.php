<?php
    require_once('animal.php');
    class Frog extends Animal{
        public function __construct($name) {
            $this->name = $name;
        }

        public function jump() {
            echo "Jump : hop hop";
        }
    }

?>