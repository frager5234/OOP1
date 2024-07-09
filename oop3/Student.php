<?php
class student extends User{
    private $stipend;
    private $course;

}
public function setStipend($stipend){
 $this->stipend = $stipend;
}
public function setCourse($course){
$this->course = $course;
}
public function getStipend(){
return $this->stipend;
}
public function getKourse(){
return $this->course;
}
