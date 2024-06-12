<?php 
    class Fruits{
        public $name;
        public $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
            
        }
     
        //get method
        public function get_name(){
            return $this->name;
        }
        public function get_color(){
            return $this->color;
        }
        public function __destruct()
        {
            echo "The fruit is {$this->name} and the color is {$this->color}";
            echo"<br/>";
        }
    }

    $apple = new Fruits("apple 2", "green");
 

    $bananna = new Fruits("banana", "blue");


    
    //result
    // echo $bananna->get_name();
    // echo $bananna->name;
    // echo "<br/>";
    // echo $apple->get_name();
    // echo $apple->name;
    // echo "<br/>";
    // echo "<br/>";
    // echo $bananna->get_color();
    // echo $bananna->color;
    // echo "<br/>";
    // echo $apple->get_color();
    // echo $apple->color;
    
    
?>