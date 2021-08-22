<?php
require_once ("MainStudentClass.php");
$objectStd=new MainStudent();
$objectStd->deleteRecord($_GET['id']);
?>