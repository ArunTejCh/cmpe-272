<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 10/26/2016
 * Time: 2:08 AM
 */
include("../dbconfig.php");

//error_log(print_r("username is: "+$username, TRUE));

$sql = "SELECT id, title as name, quantity, img_link as image_url, price, description FROM products";
//echo $sql;
$retval = mysqli_query($db, $sql);

if (!$retval) {
    die('Could not get products data for given parameters');
}

$rows = array();
while($r = mysqli_fetch_assoc($retval)) {
    $rows[] = $r;
}

foreach ($rows as &$value) {
    $value["image_url"] = "https://juranet.tech/images/products/". $value["image_url"];
}

print json_encode($rows);
//echo "Fetched data successfully\n";

?>