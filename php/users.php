<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 11/4/2016
 * Time: 10:25 PM
 */
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../php/widgets/head.php'?>
<body>
<div id="wrapper">
    <?php include '../php/widgets/sidebar.php'?>
    <div id="page-content-wrapper">
        <div class="tab-pane" id="6b">
            <h3>User Creation</h3>
            <form action="/php/user_create.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="username">Username:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username"  name="username" placeholder="Enter username">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="firstname">Firstname:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lastname">Lastname:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="addr">Address:</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" id="addr" name="addr" placeholder="Enter address">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="homephone">Homephone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="homephone" name="homephone" placeholder="Enter Homephone">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="cellphone">CellPhone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="Enter Cellphone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
            </br>
            </br>
            </br>
            <h3>User Search</h3>
            <form action="/php/user_search.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Firstname:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name"  name="name" placeholder="Enter username">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Phone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<?php include '../php/widgets/footer.php'?>

</body>
</html>