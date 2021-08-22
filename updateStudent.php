<?php
require_once ("./MainStudentClass.php");
//making object of Users call search show data
$objectUsers = new MainStudent();
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
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Teachers</span></p>
                <h1 class="mb-3 bread">Update Teachers Page</h1>

            </div>
        </div>
    </div>
</div>

<div class="container pt-lg-5">
    <div class="row block-9">
        <div class="col-md-12 pr-md-5">
            <h4 class="mb-4 text-center">Please Provide the following Detials</h4>
            <form action="updatedStudent.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data[0]?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your first Name" required name="firstname" value="<?php echo $data[1]?>" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your last Name" required name="lastname" value="<?php echo $data[2]?>" >
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Gender" required name="gender" value="<?php echo $data[3]?>" >
                </div>
                <div class="form-group">
                    <input type="datetime-local" class="form-control" placeholder="date Of Birth"  required name="dateOfBirth" value="<?php echo $data[4]?>" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Address" required name="address" value="<?php echo $data[5]?>" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Phone Number" required name="phone" value="<?php echo $data[6]?>" >
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="email" required name="email" value="<?php echo $data[7]?>" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Place of Birth" required name="placeOfBirth" value="<?php echo $data[8]?>" >
                </div>

                <div class="form-group">
                    <textarea name="note" id="" cols="30" rows="7"  class="form-control" placeholder="Message" required><?php echo $data[9]?> </textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" value="Save User Details" class="btn btn-primary py-3 px-5">
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

