<?php 

    abstract class Car{
        public $name;
        public $number;
        public function __construct($name, $number){
            $this->name = $name;
            $this->number  = $number;

        }
        abstract public function intro() : string;
        abstract public function int() : int;

    }
    class Audi extends Car{
        public function intro():string{
            return "Choose German quality! I am a $this->name ";
        }
        public function int():int{
            return $this->number;
        }
    }
    class Volvo extends Car{
        public function intro():string{
            return "Proud to be swidish! I am a $this->name ";
        }
        public function int():int{
            return $this->number;
        }
    }
    class Citroen extends Car{
        public function intro():string{
            return "French extravagence ! I am a $this->name";
        }
        public function int():int{
            return $this->number;
        }
    }

    $audi = new Audi("Audi", 50);
    $volvo = new Volvo("volvo", 2);
    $citroen = new Citroen("citroen", 45);

    echo $audi->intro();
    echo "<br>";
    echo $volvo->intro();
    echo "<br>";
    echo $citroen->intro();

    echo $audi->int();
    echo "<br>";
    echo $volvo->int();
    echo "<br>";
    echo $citroen->int();

    


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