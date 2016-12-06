<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 12/5/2016
 * Time: 10:27 PM
 */

include_once("../dbconfig.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $entityBody = file_get_contents('php://input');
    $productsQuantityData = json_decode($entityBody, true);

    print_r($productsQuantityData);

    foreach ($productsQuantityData as $productId => $quantity){
        $sql = "UPDATE products set quantity=quantity-'$quantity' where id='$productId'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);
    }

}