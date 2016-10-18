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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<h1>Welcome <?php echo $login_session; ?></h1>
</br>
<div>
    <span>Current list of users
    </br>
        <h4>Mary Smith, John Wang, Alex Bington</h4>

    </span>
</div>
<h4><a href = "logout.php">Sign Out</a></h4>
</body>

</html>