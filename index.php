<?php 

    class Pi{
        public static $value = 3.14159;

        public function staticValue(){
            return self::$value;
        }
    }

    $pi = new Pi();
    echo $pi->staticValue();

    // class Greeting{

    //     // public function __construct($num1, $num2){
    //     //     echo self::addNumber($num1, $num2);
    //     // }
    //     public static function welcome($msg){
    //         echo $msg;
    //     }

    //     public static function addNumber($num1, $num2){
    //         return $num1 + $num2;
    //     }
    // }
    // class NewArea extends Greeting{
    //     public static function newdata($msg){
    //         parent::welcome($msg);
    //     }
    // }
    // NewArea::newdata("Hello world, I am from new area");
    // Greeting::welcome();
    // echo "<br>";
    // echo Greeting::addNumber(5,6)

    // trait message1{
    //     public function msg1(){
    //         echo "OOP is fun";
    //     }
    //     public function addNumber($num1, $num2){
    //         return $num1 + $num2;
    //     }
    // }
    // trait message2{
    //     public function msg2(){
    //         echo "OOP reduced code duplication";
    //     }
    // }

    // class Welcome{
    //     use message1, message2;
    // }

    // $obj = new Welcome();
    // $obj->msg1();
    // echo "<br/>";
    // echo $obj->addNumber(5,7);
    // echo "<br/>";
    // $obj->msg2();


    // interface Animal{
    //     public function makeSound();
    //     public function eat():string;
    //     // public function dog():string;
    // }
    // class Cat implements Animal{
    //     public function makeSound(){
    //         echo "Meow";
    //     }
    //     public function eat():string{
    //         return "Cat is eating";
    //     }
    // }
    // class Dog implements Animal{
    //     public function makeSound(){
    //         echo "woof";
    //     }
    //     public function eat():string{
    //         return "Dog is eating";
    //     }
    // }

    // class Mouse implements Animal{
    //     public function makeSound(){
    //         echo "squek";
    //     }
    //     public function eat():string{
    //         return "mouse is eating";
    //     }
    // }
    // $cat = new Cat();
    // // $cat->makeSound();
    // // echo "<br>";
    // // echo $cat->eat();
    // // echo "<br>";
    
    // $dog = new Dog();
    // // echo $dog->makeSound();
    // // echo "<br>";
    // // echo $dog->eat();

    // $mouse = new Mouse();

    // $animals = array($cat, $dog, $mouse);
    // foreach($animals as $animal){
    //     $animal->makeSound();
    //     echo "<br>";
    //     echo $animal->eat();
    //     echo "<br>";
    // }



    


    // abstract class Car{
    //     public $name;
    //     public $number;
    //     public function __construct($name, $number){
    //         $this->name = $name;
    //         $this->number  = $number;

    //     }
    //     abstract public function intro() : string;
    //     abstract public function int() : int;

    // }
    // class Audi extends Car{
    //     public function intro():string{
    //         return "Choose German quality! I am a $this->name ";
    //     }
    //     public function int():int{
    //         return $this->number;
    //     }
    // }
    // class Volvo extends Car{
    //     public function intro():string{
    //         return "Proud to be swidish! I am a $this->name ";
    //     }
    //     public function int():int{
    //         return $this->number;
    //     }
    // }
    // class Citroen extends Car{
    //     public function intro():string{
    //         return "French extravagence ! I am a $this->name";
    //     }
    //     public function int():int{
    //         return $this->number;
    //     }
    // }

    // $audi = new Audi("Audi", 50);
    // $volvo = new Volvo("volvo", 2);
    // $citroen = new Citroen("citroen", 45);

    // echo $audi->intro();
    // echo "<br>";
    // echo $volvo->intro();
    // echo "<br>";
    // echo $citroen->intro();

    // echo $audi->int();
    // echo "<br>";
    // echo $volvo->int();
    // echo "<br>";
    // echo $citroen->int();

    


    // class Fruits{
    //     public $name;
    //     public $color;
    //     public $weight;

    //     const LEAVING_MESSAGE = "Thank you for visting our fruit stand";

    //     public function __construct($name, $color)
    //     {
    //         $this->name = $name;
    //         $this->color = $color;
            
    //     }
    //     public function intro(){
    //         echo "This fruit is {$this->name} and the color is {$this->color}";
    //     }
        

    // }

    // class Strawberry extends Fruits{

    //     public function __construct($name, $color, $weight)
    //     {
    //         $this->name= $name;
    //         $this->color = $color;
    //         $this->weight = $weight;
            
    //     }

    //     public function intro(){
    //         echo "This fruit is {$this->name} and the color is {$this->color}, and this weight is {$this->weight}";
            
    //     }
    //     public function message(){
    //         echo "Am I a fruit or berry";
    //     }
    //     public function addition($num1, $num2){
    //         echo $num1 + $num2;
    //     }
    //     public function byebye(){
    //         echo self::LEAVING_MESSAGE;
    //     }
        
    // }
    // $strawberry = new Strawberry("strawberry", "red" , "30kg");
    // // $strawberry->intro();
    // $strawberry->byebye();
    // // $strawberry->addition(5,10);
    // // echo $strawberry->name;
    // // echo $strawberry->color;
    

    
    
?>