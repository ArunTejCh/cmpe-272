<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 10/17/2016
 * Time: 6:21 PM
 */
session_start();

if(session_destroy()) {
    header("Location: login.php");
}
?>