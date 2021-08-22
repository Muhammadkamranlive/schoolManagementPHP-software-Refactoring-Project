<?php
require_once ("loginCheck.php");
?>


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php"><i class="flaticon-university"></i>Genius <br><small>University</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="ShowTeachers.php" class="nav-link">Show Teachers</a></li>
                <li class="nav-item"><a href="ShowStudents.php" class="nav-link">Show Students</a></li>
                <li class="nav-item"><a href="ShowUsers.php" class="nav-link">Show Users</a></li>
                <li class="nav-item"><a href="Addteachers.php" class="nav-link">Add Teachers</a></li>
                <li class="nav-item"><a href="AddStudent.php" class="nav-link">Add Students</a></li>
                <li class="nav-item"><a href="AddUsers.php" class="nav-link">Add Users</a></li>
                <li class="nav-item cta"><a href="login.php" class="nav-link"><span>Login!</span></a></li>
            </ul>
        </div>
    </div>
</nav>