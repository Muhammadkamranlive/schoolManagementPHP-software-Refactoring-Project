<?php
require_once ("./Users.php");
 //making object of Users call search show data
  $objectUsers = new Users();
  $data=$objectUsers->searchRecord($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Users</title>
    <?php
    require_once("./includes/headerStatic.php");
    ?>
</head>
<body>
<!--including the Navbar-->
<?php
require_once("./includes/AdminNavBar.php");
?>
<!-- END nav -->
<!-- Button trigger modal -->



<div class="hero-wrap hero-wrap-2" style="background-image: url('images/login.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Users</span></p>
                <h1 class="mb-3 bread">Update Users Page</h1>

            </div>
        </div>
    </div>
</div>

<div class="container pt-lg-5">
    <div class="row block-9">
        <div class="col-md-12 pr-md-5">
            <h4 class="mb-4 text-center">Please Provide the following Credentials</h4>
            <form action="updatedUser.php" method="post">
                <input type="hidden" class="form-control"  name="id" required name="Username" value="<?php echo $data[0] ?>" >
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Username" required name="Username" value="<?php echo $data[1] ?>" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Password" required name="Password" value="<?php  echo $data[2] ?>">
                </div>
                <div class="form-group">
                    <select class="form-control form-control-lg" name="type" required value="<?php echo $data[3] ?>">
                        <option selected>Choose type Of User...</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                    </select>
                </div>
                <div class="form-group">

                    <textarea name="note" id="" cols="30" rows="7"  class="form-control"    placeholder="Message" required> <?php echo $data[4] ?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" value="Update User Details" class="btn btn-primary py-3 px-5">
                </div>
            </form>

        </div>


    </div>
</div>

<?php
//Footer
require_once("./includes/Footer.php");
//end Footer
//javascript Includes
require_once("./includes/JavascriptIncludes.php");
?>


</body>
</html>

