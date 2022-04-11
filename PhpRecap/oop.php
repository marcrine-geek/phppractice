<?php
//Example of class and object
class demo
{
    private $x="Hello javatpoint";
    public function display()
    {
        echo $this->x;
    }
}
$obj=new demo;
$obj->display();

echo "<br>";

//how to use var_dump function
class demoa
{
    private $y="This is a var_dump example";
    public function display()
    {
        echo $this->y;
    }
}
$obj=new demoa;
$obj->display();
echo "<br>";
var_dump($obj);

echo "<br>";

//abstract class
abstract class a
{
    abstract public function dis1();
    abstract public function dis2();
}
class b extends a{
    public function dis1()
    {
        echo "This is function 1";
    }
    public function dis2()
    {
        echo "this is function 2";
    }
}
$obj=new b;
$obj->dis1();
echo "<br>";
$obj->dis2();
echo "<br>";

//abstract class example 2
abstract class birds
{
    public $name;
    public $age;

    public function describe()
    {
        return $this->name. ", am " .$this->age. "years old,";
    }

    abstract public function greet();
}
class dove extends birds
{
    public function greet()
    {
        echo "hello, i am ";
    }
    public function describe()
    {
        return parent::describe(). " and am a bird";
    }
}
$obj=new dove;
$obj->name='Lucille';
$obj->age=2;
echo $obj->greet();
echo $obj->describe();

echo "<br>";

//const keyword
class constants{
    const x = "hello javatpoint";
}
echo constants::x;
echo "<br>";

//constructors
class example{
    public function __construct()
    {
        echo "this is a constructor";
    }
}
$data= new example();
echo "<br>";
















































