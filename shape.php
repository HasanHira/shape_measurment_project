<?php
// Abstract class creation
abstract class Shape {
    protected $name;

    // constractor method
    public function __construct( $name ) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    abstract public function getArea();
}
?>