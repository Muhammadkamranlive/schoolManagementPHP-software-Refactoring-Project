<?php
?>

<?php
require_once ("./Teachers.php");
//Calling Users and making object and store data in properities last passing the properties data
// to  array and than array to insert function
if(isset($_POST['btnSubmit'])){
    $objectUsers= new Teachers();
    $objectUsers->setFirstName($_POST['firstname']);
    $objectUsers->setLastName($_POST['lastname']);
    $objectUsers->setAddress($_POST['address']);
    $objectUsers->setGender($_POST['gender']);
    $objectUsers->setAddress($_POST['address']);
    $objectUsers->setPhone($_POST['phone']);
    $objectUsers->setPlaceOfBirth($_POST['placeOfBirth']);
    $objectUsers->setNote($_POST['note']);
    $objectUsers->setEmail($_POST['email']);
    $objectUsers->setDateOfBirth($_POST['dateOfBirth']);
    $objectUsers->setSalary($_POST['salary']);
    $objectUsers->setDegree($_POST['degree']);
    $objectUsers->setMarried($_POST['married']);
    $data=array($objectUsers->getFirstName(),$objectUsers->getLastName(),$objectUsers->getGender(),$objectUsers->getDateOfBirth(),$objectUsers->getAddress(),$objectUsers->getPhone(),$objectUsers->getEmail(),$objectUsers->getPlaceOfBirth(),$objectUsers->getNote(),$objectUsers->getSalary(),$objectUsers->getDegree(),$objectUsers->getMarried());
    $objectUsers->inserRecord($data);


}
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
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Student</span></p>
                <h1 class="mb-3 bread">Add Student Page</h1>

            </div>
        </div>
    </div>
</div>

<div class="container pt-lg-5">
    <div class="row block-9">
        <div class="col-md-12 pr-md-5">
            <h4 class="mb-4 text-center">Please Provide the following Detials</h4>
            <form action="#" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your first Name" required name="firstname">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your last Name" required name="lastname">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Gender" required name="gender">
                </div>
                <div class="form-group">
                    <input type="datetime-local" class="form-control" placeholder="date Of Birth"  required name="dateOfBirth">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Address" required name="address">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Phone Number" required name="phone">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="email" required name="email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Place of Birth" required name="placeOfBirth">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Salary" required name="salary">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="degree" required name="degree">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="married" required name="married">
                </div>
                <div class="form-group">
                    <textarea name="note" id="" cols="30" rows="7"  class="form-control" placeholder="Message" required></textarea>
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


