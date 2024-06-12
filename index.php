<?php 
    class Fruits{
        public $name;
        public $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
            
        }
        public function intro(){
            echo "This fruit is {$this->name} and the color is {$this->color}";
            echo "<br/>";
        }
        

    }

    class Strawberry extends Fruits{
        public function message(){
            echo "Am I a fruit or berry";
        }
        public function addition($num1, $num2){
            echo $num1 + $num2;
        }
        
    }
    $strawberry = new Strawberry("strawberry", "red");
    // $strawberry->addition(5,10);
    echo $strawberry->name;
    echo $strawberry->color;

    
    
?>