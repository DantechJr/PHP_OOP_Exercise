<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>PHP OOP Exercise 2</title>
</head>
<body>

<header class="bg-dark text-light">
  <h1 class="ms-5">PHP OOP Exercise</h1>
</header>

<div class="row p-5">

<div class="col-6 px-5">
<p>?php</p>
  <p>
abstract class Shape {
    protected $name;
    abstract public function description();
}
</p>
<p>
interface IShape {
  public function getArea($length, $width);
  public function getPerimeter($length, $width);
}
</p>
<p>?></p>
  
</div>


<div class="col-6">
  <h3 class="text-center px-5">Given the abstract and interface class, create a class for Square, Rectangle, Triangle, and Circle that implement and extend both classes.</h3>
</div>
</div>

<div class="container-fluid pt-5" style="margin-top: 10px; border: black 1px solid; width: 100%">
  <h1 class="text-center">Shapes</h1>

  <div class="row my-5 mx-auto">
    <?php
    abstract class Shape {
        protected $name;
        abstract public function description();
    }

    interface IShape {
        public function getArea($length, $width = null);
        public function getPerimeter($length, $width = null);
    }

    class Square extends Shape implements IShape {
        public function description() {
            return "Square has four equal sides.";
        }

        public function getArea($length, $width = null) {
            if ($width !== null && $length !== $width) {
                return "Invalid: Length and width should be equal.";
            }

            return $length * $length;
        }

        public function getPerimeter($length, $width = null) {
            if ($width !== null && $length !== $width) {
                return "Invalid: Length and width should be equal.";
            }

            return 4 * $length;
        }
    }

    class Rectangle extends Shape implements IShape {
        public function description() {
            return "Rectangle has two equal sides.";
        }

        public function getArea($length, $width = null) {
            return $length * ($width !== null ? $width : $length);
        }

        public function getPerimeter($length, $width = null) {
            return 2 * ($length + ($width !== null ? $width : $length));
        }
    }

    class Triangle extends Shape implements IShape {
        public function description() {
            return "Triangle has three sides.";
        }

        public function getArea($length, $width = null) {
            return ($length * ($width !== null ? $width : $length)) / 2;
        }

        public function getPerimeter($length, $width = null) {
            return "Invalid: Triangle does not have a single perimeter. Use getTrianglePerimeter() method instead.";
        }

        public function getTrianglePerimeter($side1, $side2, $side3) {
            return $side1 + $side2 + $side3;
        }
    }

    class Circle extends Shape implements IShape {
        public function description() {
            return "Circle has no sides, only a curve.";
        }

        public function getArea($radius, $width = null) {
            return pi() * pow($radius, 2);
        }

        public function getPerimeter($length, $width = null) {
            $radius = $length;
            return 2 * pi() * $radius;
        }
    }

    $shape1 = new Square();
    echo '<div class="col-sm-6 col-md-3" style="border:1px solid black">';
    echo "<h2 >Square</h2>";
    echo "<p>" . $shape1->description() . "</p>";
    echo "<p>Area (4, 4): " . $shape1->getArea(4, 4) . "</p>";
    echo "<p>Area (4, 3): " . $shape1->getArea(4, 3) . "</p>";
    echo "<p>Perimeter (4, 4): " . $shape1->getPerimeter(4, 4) . "</p>";
    echo "<p>Perimeter (4, 3): " . $shape1->getPerimeter(4, 3) . "</p>";
    echo '</div>';

    $shape2 = new Rectangle();
    echo '<div class="col-sm-6 col-md-3" style="border:1px solid black">';
    echo "<h2>Rectangle</h2>";
    echo "<p>" . $shape2->description() . "</p>";
    echo "<p>Area (4, 6): " . $shape2->getArea(4, 6) . "</p>";
    echo "<p>Perimeter (4, 6): " . $shape2->getPerimeter(4, 6) . "</p>";
    echo '</div>';

    $shape3 = new Triangle();
    echo '<div class="col-sm-6 col-md-3" style="border:1px solid black">';
    echo "<h2>Triangle</h2>";
    echo "<p>" . $shape3->description() . "</p>";
    echo "<p>Area (4, 6): " . $shape3->getArea(4, 6) . "</p>";
    echo "<p>Triangle Perimeter (4, 6, 7): " . $shape3->getTrianglePerimeter(4, 6, 7) . "</p>";
    echo '</div>';

    $shape4 = new Circle();
    echo '<div class="col-sm-6 col-md-3" style="border:1px solid black">';
    echo "<h2>Circle</h2>";
    echo "<p>" . $shape4->description() . "</p>";
    echo "<p>Area (5): " . $shape4->getArea(5) . "</p>";
    echo "<p>Perimeter (5): " . $shape4->getPerimeter(5) . "</p>";
    echo '</div>';
    ?>
  </div>
</div>

<footer class="bg-dark text-light text-center py-2 fixed-bottom">
  <h5>&copy; 2023 | Dante C. Alcantara Jr.™</h5>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
