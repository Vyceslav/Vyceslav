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
    protected $type;
    public function __construct($type)
    {
        $this->type = $type;
    }
    public function getType(){
    }
    function perymeter(){

    }
    function square(){

    }
}
//2.1 Создать три дочерних класса - Circle, Triangle и Square. Каждый из них принимает свои определенные параметры: для квадрата это длина стороны, для круга радиус, для треугольника длины трёх сторон
class Circle extends Figure{
    protected $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    function getType(){
        $this->type = 'круг';
        return $this->type;
    }
    function square(){
        return $this->radius**2*3.14;
    }
    function perimeter(){
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
        $this->type = 'треугольник';
    }
    function getType(){
       return $this->type;
    }
    function perimeter(){
        return $this->side1+$this->side2+$this->side3;
    }
}
class Square extends Figure{
    protected $side;
    public function __construct($side)
    {
        $this->side = $side;
        $this->type = 'квадрат';
    }
    function getType(){
       return $this->type;
    }
    function perimeter(){
        return $this->side*4;
    }
    function square(){
        return $this->side**2;
    }
}
$object1 = new Figure('Круг');
$object = new Circle(5);
echo 'Фигура: ',$object->getType(),', площадь: ',$object->square(), ', длина окружности: ', $object->perimeter(), "<br>";
$object2 = new Triangle(3,4,5);
echo 'Фигура: ', $object2->getType(), ', периметр: ', $object2->perimeter(), "<br>";
$object3 = new Square(3);
echo 'Фигура: ', $object3->getType(), ', периметр: ', $object3->perimeter(), ', площадь: ', $object3->square();
//2.2 В каждом из дочерних классов добавить методы для расчета площади и периметра фигуры
//
//3.1 Вывести на страницу результаты в формате "Фигура: Квадрат, площадь: 9, периметр: 12" (для вывода типа фигуры используем метод-геттер)
//    phpinfo()
?>
</body>

</html>

<?php
//phpinfo();
