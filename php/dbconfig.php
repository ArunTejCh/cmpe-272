<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 10/17/2016
 * Time: 4:46 PM
 */

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'coder');
define('DB_PASSWORD', 'coder');
define('DB_DATABASE', 'juranet');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);