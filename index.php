<?php 
    class Fruits{
        public $name;
        public $color;

        public function set_name($name){
            $this->name = $name;
        }
        public function get_name(){
            return $this->name;
        }
    }

    $apple = new Fruits();
    $apple->set_name("apple");

    $bananna = new Fruits();
    $bananna->set_name("banana");
    echo $bananna->get_name();
    echo "<br/>";
    echo $apple->get_name("apple");
    
?>