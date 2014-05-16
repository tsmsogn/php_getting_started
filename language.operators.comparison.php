<?php
class Animal {

    public $options;

    public function __construct($options = array()) {
        $this->options = $options; 
    }

}

$animal1 = new Animal(array('a' => 1));
$animal2 = new Animal();
$animal3 = new Animal();

var_dump(($animal1 == $animal2)); #=> bool(false)
var_dump(($animal2 == $animal3)); #=> bool(true)
var_dump(($animal1 === $animal2)); #=> bool(false)
var_dump(($animal2 === $animal3)); #=> bool(false)
