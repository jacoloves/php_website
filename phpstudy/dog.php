<?php
    class Dog{
        public $name = 'Hachi';

        public function bark(){
            echo "ワン\n";
        }
    }

    $a = new Dog();

    $a->bark();

    echo $a->name;
?>