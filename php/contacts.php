<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 11/4/2016
 * Time: 11:01 PM
 */
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../php/widgets/head.php'?>
<body>
<div id="wrapper">
    <?php include '../php/widgets/sidebar.php'?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                    <h4><?php
                        $homepage = file_get_contents('../data/contacts.txt');
                        echo $homepage;
                        ?></h4>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include '../php/widgets/footer.php'?>

</body>
</html>

