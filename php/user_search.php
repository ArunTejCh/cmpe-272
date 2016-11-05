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
<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 10/26/2016
 * Time: 2:08 AM
 */
include("dbconfig.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $name = mysqli_real_escape_string($db,$_POST['name']);
    $emailid = mysqli_real_escape_string($db,$_POST['email']);
    $phone = mysqli_real_escape_string($db,$_POST['phone']);

    //error_log(print_r("username is: "+$username, TRUE));

    $sql = "SELECT Userid, Username, Email, Firstname, Lastname, HomeAddr FROM users where Firstname = '$name' or Email = '$emailid' or Homephone = '$phone' or Cellphone = '$phone'";
    //echo $sql;
    $retval = mysqli_query( $db, $sql );

    if(! $retval ) {
        die('Could not get user data for given parameters name '.$name.' email'.$emailid.' phone'.$phone);
    }

    while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        echo "ID :{$row['Userid']}  <br> ".
            "Firstname : {$row['Firstname']} <br> ".
            "Lastname : {$row['Lastname']} <br> ".
            "Address : {$row['HomeAddr']} <br> ".
            "Email : {$row['Email']} <br> ".
            "--------------------------------<br>";
    }

    echo "Fetched data successfully\n";
}
?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include '../php/widgets/footer.php'?>

</body>
</html>