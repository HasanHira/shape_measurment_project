<?php
require_once 'shape.php';

class Triangle extends Shape {
    private $height;
    private $base;

    public function __construct( $name, $base, $height ) {
        parent::__construct( $name );
        $this->height = $height;
        $this->base = $base;
    }
    public function getArea() {
        return 0.5 * $this->base * $this->height;
    }
}