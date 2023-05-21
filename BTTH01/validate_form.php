<?php

declare(strict_types=1);

$student = new student();
$errors = [
    'name' => '',
    'age' => '',
    'id' => ''
];
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student->setName($_POST['name']);
    $student->setAge((int)$_POST['age']);
    $student->setID((int)$_POST['id']);
    $isValid = true;
    if ($student->getName() == '') {
        $errors['name'] = 'Name is required!';
        $isValid = false;
    }
    if ($student->getAge() == '') {
        $errors['age'] = 'Age is required!';
        $isValid = false;
    }
    if ($student->getID() == '') {
        $errors['id'] = 'ID is required!';
        $isValid = false;
    }
    if ($isValid) {
        $message = 'Create student success!';
    }
}
