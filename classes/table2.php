<?php 
namespace Others;

class Table{
    public $title2 = "";
    public $numRows2 = 0;
    
    public function message(){
        echo "My '{$this->title2}' has {$this->numRows2} rows";
    }
}