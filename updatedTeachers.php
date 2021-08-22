<?php
require_once ("./Teachers.php");
$objectUsers= new Teachers();
$objectUsers->setFirstName($_POST['firstname']);
$objectUsers->setLastName($_POST['lastname']);
$objectUsers->setAddress($_POST['address']);
$objectUsers->setGender($_POST['gender']);
$objectUsers->setAddress($_POST['address']);
$objectUsers->setPhone($_POST['phone']);
$objectUsers->setPlaceOfBirth($_POST['placeOfBirth']);
$objectUsers->setNote($_POST['note']);
$objectUsers->setEmail($_POST['email']);
$objectUsers->setDateOfBirth($_POST['dateOfBirth']);
$objectUsers->setSalary($_POST['salary']);
$objectUsers->setDegree($_POST['degree']);
$objectUsers->setMarried($_POST['married']);

$objectUsers->updateRecord($_POST['id']);
header("index.php");
?>