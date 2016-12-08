<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 10/17/2016
 * Time: 6:20 PM
 */
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../php/widgets/head.php' ?>
<body>
<div id="wrapper">
    <?php include '../php/widgets/sidebar.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Welcome <?php echo $login_session; ?></h1>
                    </br>
                    <div>
                        <?php if($merkato_login){?>
                    <span>
                        Login via Merkato successfull!!
                    </span>
                        <?php }?>
                    </div>
                    <h4><a href="logout.php">Sign Out</a></h4>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include '../php/widgets/footer.php' ?>

</body>
</html>

