<?php
class Driver extends Worker3
{
    private $exp;
    private $category;
    public function __construct($exp, $category){
        $this->exp = $exp;
        $this->category = $category;
    }
    public function setExp($exp){
         $this->exp = $exp;
    }
    public function setCategory($category){
        $this->category = $category;
    }
    public function getEXP(){
        return $this->exp;
    }
    public function getCategory(){
        return $this->category;
    }
}