<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body style="margin: 0;">

<!-- Add your site or application content here -->
<!--<main style="display: flex; justify-content:center; margin-top: 25px;">-->
<!--    <img src="palmo.jpg" alt="">-->
<!--</main>-->
<?php

//1. Создать родительский класс Figure, внутри которого protected свойство type, отвечающее за тип фигуры, метод-геттер для получения типа фигуры, и методы для определения площади и периметра геометрической фигуры (методы без реализации)
class Figure {
    protected $circle;
    protected $triangle;
    protected $square;
    function Getcircle(){
        return $this->circle = 'круг';
    }
    function Gettriangle(){
        return $this->triangle = 'триугольник';
    }
    function Getsquare(){
        return $this->square = 'квадрат';
    }
}
//2.1 Создать три дочерних класса - Circle, Triangle и Square. Каждый из них принимает свои определенные параметры: для квадрата это длина стороны, для круга радиус, для треугольника длины трёх сторон
class Circle extends Figure{
    protected $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    function areaCircle(){
        return $this->radius**2*3.14;
    }
    function circumference(){
        return $this->radius*2*3.14;
    }
}
class Triangle extends Figure{
    protected $side1;
    protected $side2;
    protected $side3;
    public function __construct($side1, $side2,$side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    function perTriangle(){
        return $this->side1+$this->side2+$this->side3;
    }
}
class Square extends Figure{
    protected $side;
    public function __construct($side)
    {
        $this->side = $side;
    }
    function perSquare(){
        return $this->side*4;
    }
    function areaSquare(){
        return $this->side**2;
    }
}
$object1 = new Figure();
$object = new Circle(5);
echo 'Фигура: ',$object1->Getcircle(),', площадь: ',$object->areaCircle(), ', длина окружности: ', $object->circumference(), "<br>";
$object2 = new Triangle(3,4,5);
echo 'Фигура: ', $object1->Gettriangle(), ', периметр: ', $object2->perTriangle(), "<br>";
$object3 = new Square(3);
echo 'Фигура: ', $object1->Getsquare(), ', периметр: ', $object3->perSquare(), ', площадь: ', $object3->areaSquare();
//2.2 В каждом из дочерних классов добавить методы для расчета площади и периметра фигуры
//
//3.1 Вывести на страницу результаты в формате "Фигура: Квадрат, площадь: 9, периметр: 12" (для вывода типа фигуры используем метод-геттер)
//    phpinfo()
?>
</body>

</html>

<?php
//phpinfo();
