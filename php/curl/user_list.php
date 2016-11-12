<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 10/26/2016
 * Time: 2:08 AM
 */
include("../dbconfig.php");

//error_log(print_r("username is: "+$username, TRUE));

$sql = "SELECT Userid, Email, Firstname, Lastname, HomeAddr, Homephone, Cellphone FROM users";
//echo $sql;
$retval = mysqli_query($db, $sql);

if (!$retval) {
    die('Could not get user data for given parameters');
}

/*while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
    echo "ID :{$row['Userid']}  <br> " .
        "Firstname : {$row['Firstname']} <br> " .
        "Lastname : {$row['Lastname']} <br> " .
        "Address : {$row['HomeAddr']} <br> " .
        "Email : {$row['Email']} <br> " .
        "--------------------------------<br>";
}*/

$rows = array();
while($r = mysqli_fetch_assoc($retval)) {
    $rows[] = $r;
}
print json_encode($rows);
//echo "Fetched data successfully\n";

?>