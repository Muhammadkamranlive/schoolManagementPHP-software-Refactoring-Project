<!DOCTYPE html>
<html lang="en">
  <head>
    <title>University Managment System</title>
      <?php
        require_once ("./includes/headerStatic.php");
      ?>
  </head>
  <body>

<?php
   //Nabar
require_once ("./includes/Navbar.php");
  //end Navabr
  //slider
require_once ("./includes/Slider.php");
  //endslider

//Admission Section Show Case
require_once ("./includes/AdmissionSectionShowCase.php");
//End Admissin Section Show  Case
//Leading Uni Show Case
require_once ("./includes/leadingSection.php");
// End Leading Uni Show Case
?>
















<?php
require_once ("./includes/Footer.php");
?>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php
  require_once ("./includes/JavascriptIncludes.php");
  ?>
    
  </body>
</html>