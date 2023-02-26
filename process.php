<?php
require_once 'circle.php';
require_once 'square.php';
require_once 'triangle.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $shape = $_POST['shape'];
    $measurement = $_POST['measurement'];

    switch ( $shape ) {
    case 'circle':
        $circle = new Circle( 'Circle', $measurement );
        $area = $circle->getArea();
        break;

    case 'square':
        $square = new Square( 'Square', $measurement, $measurement );
        $area = $square->getArea();
        break;

    case 'triangle':
        $triangle = new Triangle( 'triangle', $measurement, $measurement );
        $area = $triangle->getArea();
        break;
    default:
        echo "Invalid input";

    }
}
// Draw Shape
if ( $shape == 'circle' ) {
    $draw_circle = $measurement;
    $shape_name = "circle";
} elseif ( $shape == 'square' ) {
    $draw_square = $measurement;
    $shape_name = "square";
} elseif ( $shape  == 'triangle' ) {
    $draw_triangle_base = $measurement;
    $draw_triangle_vert = $measurement / 2;
    $shape_name = "triangle";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape Measurment | Result</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="style.css">
    <style>
        .circle {
            height: <?php echo $draw_circle; ?>px;
            width: <?php echo $draw_circle; ?>px;
            background-color: green;
            border-radius: 50%;
        }
        .square {
            height: <?php echo $draw_square; ?>px;
            width: <?php echo $draw_square; ?>px;
            background-color: orange;
        }
        .triangle {
            width: 0;
            height: 0;
            border-left: <?php echo $draw_triangle_vert ?>px solid transparent;
            border-right: <?php echo $draw_triangle_vert ?>px solid transparent;
            border-bottom: <?php echo $draw_triangle_base; ?>px solid blueviolet;
        }
    </style>
</head>
<body>
    <div class="container result_page">
        <h2 class="title">Shape Measure</h2>
        <div class="flex-col">
            <?php if ( isset( $area ) ): ?>
                <div class="content-col">
                    <h2><?php echo $shape; ?></h2>
                    <p><span>Area:</span> <?php echo $area; ?> px</p>
                </div>
                <div class="content-col">
                    <div class="<?php echo $shape_name; ?>"></div>
                    <p class="shape-cap"><span>Shape:</span><?php echo $shape_name; ?></p>
                </div>
            <?php endif;?>
        </div>
    </div>
</body>
</html>