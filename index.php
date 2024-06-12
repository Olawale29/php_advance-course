<?php 
    class Fruits{
        public $name;
        public $color;
        public $weight;

        const LEAVING_MESSAGE = "Thank you for visting our fruit stand";

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
            
        }
        public function intro(){
            echo "This fruit is {$this->name} and the color is {$this->color}";
        }
        

    }

    class Strawberry extends Fruits{

        public function __construct($name, $color, $weight)
        {
            $this->name= $name;
            $this->color = $color;
            $this->weight = $weight;
            
        }

        public function intro(){
            echo "This fruit is {$this->name} and the color is {$this->color}, and this weight is {$this->weight}";
            
        }
        public function message(){
            echo "Am I a fruit or berry";
        }
        public function addition($num1, $num2){
            echo $num1 + $num2;
        }
        public function byebye(){
            echo self::LEAVING_MESSAGE;
        }
        
    }
    $strawberry = new Strawberry("strawberry", "red" , "30kg");
    // $strawberry->intro();
    $strawberry->byebye();
    // $strawberry->addition(5,10);
    // echo $strawberry->name;
    // echo $strawberry->color;
    

    
    
?>