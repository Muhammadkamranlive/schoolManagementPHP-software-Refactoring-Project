<?php
 require_once ("./Users.php");
 $objectUsers = new Users();
 $objectUsers->DeleteUser($_GET['id']);

?>