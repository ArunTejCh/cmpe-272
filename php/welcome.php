<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 10/17/2016
 * Time: 6:20 PM
 */
include('session.php');
?>
<html">

<head>
    <title>Welcome </title>
</head>

<body>
<h1>Welcome <?php echo $login_session; ?></h1>
<h2><a href = "logout.php">Sign Out</a></h2>
</body>

</html>