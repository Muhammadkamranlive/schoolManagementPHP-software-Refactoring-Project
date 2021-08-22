<?php
require_once ("Teachers.php");
$objTeacher= new Teachers();
$objTeacher->deleteRecord($_GET['id']);
?>