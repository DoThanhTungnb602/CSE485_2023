<?php
if($_SERVER['REQUEST_METHOD'=='POST']){
    $id = $_POST('ID');
    $name = $_POST('Name');
    $age = $_POST('Age');
    $file = fopen("Test.txt");
    fwrite($file, "Test");
    fclose($file);
}