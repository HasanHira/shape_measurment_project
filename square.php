<?php
require_once 'shape.php';

class Square extends Shape {
    private $width;
    private $height;

    public function __construct( $name, $width, $height ) {
        parent::__construct( $name );
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea() {
        return $this->width * $this->height;
    }
}
?>