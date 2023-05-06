<?php
include "Student.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $arrayStudent = new student("","","");
    $arrayStudent->getID($_POST['id']);
    $arrayStudent->getName($_POST['name']);
    $arrayStudent->getAge($_POST['age']);
    $file = fopen("Test.txt", "w");
    fwrite($file, "\n{$arrayStudent->id},{$arrayStudent->name},{$arrayStudent->age}");
    fclose($file);
}