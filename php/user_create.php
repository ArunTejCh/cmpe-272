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

$sql = "INSERT into users (Username, Firstname, Lastname, Email, HomeAddr, Homephone, Cellphone) VALUES ('$username', '$firstname', '$lastnamename', '$emailid', '$addr', '$homephone', '$cellphone')";
//echo $sql;
$retval = mysqli_query( $db, $sql );

if(! $retval ) {
    die('Failed to create user!!');
}

echo "Created User successfully\n";