<?php
 require_once ("./Users.php");
 $objectUser=new Users();
 $objectUser->setUserName($_POST['Username']);
 $objectUser->setPassword($_POST['Password']);
 $objectUser->setTypeOfUser($_POST['type']);
 $objectUser->setNoteForUser($_POST['note']);
 $objectUser->setid( $_POST['id']);
 $objectUser->UpdateUser($objectUser->getUserName(),$objectUser->getPassword(),$objectUser->getTypeOfUser(),$objectUser->getNoteForUser(),$objectUser->getid());
?>