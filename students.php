

<!doctype html>
<html lang="en">
<head>
    <?php
    require_once ("./includes/headerStatic.php");
    ?>
    <title>Students</title>
</head>
<body>
<?php
//Nabar
require_once ("./includes/Navbar.php");
//end Navabr

?>



<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Student</span></p>
                <h1 class="mb-3 bread">Students Section</h1>
            </div>
        </div>
    </div>
</div>





<?php
// students  data
require_once ("./includes/studentData.php");
require_once ("./includes/Footer.php");
?>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<?php
require_once ("./includes/JavascriptIncludes.php");
?>
</body>
</html>
