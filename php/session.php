<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 10/17/2016
 * Time: 6:19 PM
 */
   include('config.php');
   session_start();

   /*$user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);*/

   $login_session = $_SESSION['login_user'];

   if(!isset($_SESSION['login_user'])){
       header("location:login.php");
   }
?>