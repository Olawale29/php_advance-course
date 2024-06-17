<?php
namespace Html;
class Table{
    public $title = "";
    public $numRows = 0;
    
    public function message(){
        echo "My '{$this->title}' has {$this->numRows} rows";
    }
}
