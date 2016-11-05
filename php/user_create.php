<!DOCTYPE html>
<html lang="en">

<?php include '../php/widgets/head.php'?>
<body>
<div id="wrapper">
    <?php include '../php/widgets/sidebar.php'?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                    <?php
                    /**
                     * Created by PhpStorm.
                     * User: chennadi
                     * Date: 10/26/2016
                     * Time: 2:08 AM
                     */
                    include("dbconfig.php");

                    $username = mysqli_real_escape_string($db,$_POST['username']);
                    $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
                    $lastnamename = mysqli_real_escape_string($db,$_POST['lastname']);
                    $addr = mysqli_real_escape_string($db,$_POST['addr']);
                    $emailid = mysqli_real_escape_string($db,$_POST['email']);
                    $homephone = mysqli_real_escape_string($db,$_POST['homephone']);
                    $cellphone = mysqli_real_escape_string($db,$_POST['cellphone']);


                    //error_log(print_r("username is: "+$username, TRUE));

                    $sql = "INSERT into users (Username, Firstname, Lastname, HomeAddr, Email, Homephone, Cellphone) VALUES ('$username', '$firstname', '$lastnamename', '$addr', '$emailid', '$homephone', '$cellphone')";
                    //echo $sql;
                    $retval = mysqli_query( $db, $sql );

                    if(! $retval ) {
                        die('Failed to create user!!');
                    }

                    echo "Created User ".$username." successfully\n";
                    ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include '../php/widgets/footer.php'?>

</body>
</html>
