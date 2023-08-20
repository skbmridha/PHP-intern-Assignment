<?php
    
    interface Animal {
        public function makeSound();
    }

    class Lion implements Animal {
        public function makeSound() {
            echo " Roar ";
        }
    }

    class Bird implements Animal {
        public function makeSound() {
            echo " Buzzing ";
        }
    }

    class Duck implements Animal {
        public function makeSound() {
            echo " Quack ";
        }
    }

    class Frog implements Animal {
        public function makeSound() {
            echo " Croak ";
        }
    }

    class Goose implements Animal {
        public function makeSound() {
            echo " Quack ";
        }
    }

    $lion = new Lion();
    $bird = new Bird();
    $duck = new Duck();
    $frog = new Frog();
    $goose = new Goose();
    $animals = array($lion, $bird, $duck, $frog, $goose);

    foreach($animals as $animal) {
    $animal->makeSound();
    }
?>