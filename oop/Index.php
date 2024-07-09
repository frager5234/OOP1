<?php
include ('Worker.php');
$WorkerIvan = new Worker();
$WorkerIvan->name = "Ivan";
$WorkerIvan->age = "25";
$WorkerIvan->salary = "1000";

$WorkerVasya = new Worker();
$WorkerVasya->name = "Vasya";
$WorkerVasya->age = "26";
$WorkerVasya->salary = "2000";

$sumSal = $WorkerIvan->salary + $WorkerVasya->salary;
$sumAge = $WorkerIvan->age + $WorkerVasya->age;

echo "сумма зп : " . $sumSal . "<br>";
echo "сумма возраста : " . $sumAge . "<br>";
