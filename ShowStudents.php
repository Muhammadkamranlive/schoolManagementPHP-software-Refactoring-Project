
<?php
require_once("./MainStudentClass.php");
//Calling Users and making object and getting data in array
$objectStd = new MainStudent();
$data=$objectStd->Display();

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
                <h1 class="mb-3 bread">All Students</h1>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid table-responsive ">
    <h1 class="text-center">Users DATA</h1>
    <table class="table table-striped  table-hover table-dark">
        <thead>
        <tr>

            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">dateOfBirth</th>
            <th scope="col">address</th>
            <th scope="col">Phone</th>
            <th scope="col">email</th>
            <th scope="col">placeOfBirth</th>
            <th scope="col">note</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $List){
            echo "<tr>";
            echo "<th >$List[1]</th>";
            echo "<td>$List[2]</td>";
            echo "<td>$List[3]</td>";
            echo "<td>$List[4]</td>";
            echo "<td>$List[5]</td>";
            echo "<td>$List[6]</td>";
            echo "<td>$List[7]</td>";
            echo "<td>$List[8]</td>";
            echo "<td>$List[9]</td>";
            echo "<td> <a href='delstudent.php?id=$List[0]' class='btn btn-danger btn-outline-danger shadow'>Delete User</a> </td>";
            echo "<td> <a href='updateStudent.php?id=$List[0]' class='btn btn-success btn-outline-success  shadow'>Update User</a> </td>";
            echo "</tr>";
        }
        ?>

        </tbody>
    </table>

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


