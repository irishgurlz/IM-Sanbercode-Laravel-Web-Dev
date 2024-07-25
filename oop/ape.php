<?php
    require_once('animal.php');
    class Ape extends Animal{
        public function __construct($name){
            $this->name = $name;
        }

        public function yell(){
            echo "Yell : Auooo";
        }
        public function getName(){
            return $this->name;
        }

        public function getLegs(){
            return $this->legs;
        }

        public function getColdBlooded(){
            return $this->cold_blooded;
        }
    }
?>