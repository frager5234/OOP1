<?php
//class worker
//{
//    public $name = "Имя";
//    public $age = "Возраст";
//    public $salary = "ZP";
//
//
//    public function getAge()
//    {
//        echo "Ivan {$this->age} 25, {$this->salary} 1000     ";
//    }
//
//    public function getAgeVasya()
//    {
//        echo "Vasya {$this->age} 26, {$this->salary} 2000    ";
//    }
//
//}
//
//$admin = new worker();
//$admin1 = new worker();
//
//
//$admin->getAge();
//$admin1->getAgeVasya();
//
//
//
//$a = array(25, 26);
//echo "Сумма возраста " . array_sum($a) . "\n";
//
//$b = array(1000, 2000);
//echo "Сумма зп  = " . array_sum($b) .


class Worker
{
    private $name;
    private $age;
    private $salary;
}

public function setName()
{
   $this->name = $name;
}
public function getName()
{
 return $this->name;
}
public function setAge(){
$this->age = $age;
 if (!$this ->checkAge() ){
     echo "неккоректный возраст'$this->name'</br>";
 }
}
public function getAge(){
 return $this->age;
}
public function setSalary(){
$this->salary = $salary;
}
public function getSalary(){
return $this->salary;
}

private function checkAge(){
    if ($this -> age <= 100 && $this -> age >= 1){
        return true;
    }else{  return false;}

}




















