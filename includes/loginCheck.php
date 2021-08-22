<?php
//checking users State
function logout(){
    setcookie("rme", "", time() - 3600);
    header('location:login.php');
}
if (isset($_GET['name'])) {
    logout();
}
if (isset($_COOKIE['rme'])) {




}else{
    header('location:login.php');
}

?>