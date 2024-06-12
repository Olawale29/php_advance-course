<?php 
    class Fruits{
        public $name;
        public $color;

        //set method
        public function set_name($name){
            $this->name = $name;
        }
        //get method
        public function get_name(){
            return $this->name;
        }

        public function set_color($color){
            $this->color = $color;
        }
        public function get_color(){
            return $this->color;
        }
    }

    $apple = new Fruits();
    $apple->set_name("apple");
    $apple->set_color("blue");

    $bananna = new Fruits();
    $bananna->set_name("banana");
    $bananna->set_color("green");

    
    
    echo $bananna->get_name();
    echo "<br/>";
    echo $apple->get_name();
    echo "<br/>";
    echo "<br/>";
    echo $bananna->get_color();
    echo "<br/>";
    echo $apple->get_color();
    
    
?>