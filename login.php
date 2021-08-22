<!DOCTYPE html>
<html lang="en">
<head>
    <title>Users</title>
    <?php
      require_once ("./includes/headerStatic.php");
    ?>
</head>
<body>
<!--including the Navbar-->
<?php
  require_once ("./includes/Navbar.php");

if (isset($_POST['btnsubmit']))
{
    require_once ('./dataBaseConnectionFile/DataBaseConnection.php');
    $dbObject= new DataBaseConnection();
    $arrayData=array($_POST['username'],$_POST['password']);
    $result=$dbObject->loginChek($arrayData);
    session_start();
    $_SESSION['userid']=0;
    if(!$result ===false) {

        if (isset($_POST['remember']))
        {
            setcookie('rme',$result,time()+3600); //1hour
            header('location:ShowTeachers.php');
        }


    }

    else
    {
        echo "User name or password is incorrect";
    }

    $_SESSION['userid']++;

}

?>

<!-- END nav -->



<div class="container pt-lg-5">
    <?php
    if (isset($_COOKIE['rme']))
    {
        echo '<span class="alert alert-success ">You are already logged in</span>';
        echo '<a href="ShowTeachers.php" class="btn btn-primary">Go to Admin Page</a>';
    }


    ?>


    <div class="row block-9">
        <div class="col-md-12 pr-md-5">
            <h4 class="mb-4">Please Provide the login Credentials</h4>
            <form action="#" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Username" name="username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Password" name="password" required>
                </div>
                 <div class="form-group">
                     <div class="form-check">
                         <input class="form-check-input" name="remember" type="checkbox" value="" id="flexCheckChecked" checked>
                         <label class="form-check-label" for="flexCheckChecked">
                             Remember Me
                         </label>
                     </div>
                 </div>
                <div class="form-group">
                    <input type="submit"  name="btnsubmit" value="login" class="btn btn-primary py-3 px-5">
                </div>
            </form>

        </div>


    </div>
</div>


<?php
//Footer
require_once ("./includes/Footer.php");
//end Footer
//javascript Includes
require_once ("./includes/JavascriptIncludes.php");
?>


</body>
</html>
