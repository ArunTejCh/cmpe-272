<!DOCTYPE html>
<html lang="en">
<head>
    <title>Juranet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<div class="jumbotron text-center">
    <?php
    echo "<h2>Juranet Housing and Real Estate</h2>";

    //$search = phpinfo();
    //print_r($search);
    //$vari = 10 + "8%" + "$30";
    //echo "$vari";
    ?>
</div>

<div id="exTab2" class="container">
    <ul class="nav nav-pills">
        <li class="active">
            <a href="#1b" data-toggle="tab">Home</a>
        </li>
        <li><a href="#2b" data-toggle="tab">About</a>
        </li>
        <li><a href="#3b" data-toggle="tab">Services</a>
        </li>
        <li><a href="#4b" data-toggle="tab">News</a>
        </li>
        <li><a href="#5b" data-toggle="tab">Contacts</a>
        </li>
        <li><a href="#6b" data-toggle="tab">Users</a>
        </li>
    </ul>

    <div class="tab-content clearfix">
        <div class="tab-pane active" id="1b">
            <h3>Welcome to Juranet Housing and Real Estate. </br>
                </br>
                We are committed to providing a safe way to buy/sell/rent properties across various cities
                </br>
                </br>
                you can login here
                <a href="php/login.php" style="color: deepskyblue;background-color: black">Login</a>
            </h3>
        </div>
        <div class="tab-pane" id="2b">
            <h3>About Juranet
                </br>Passionate about simplifying property decisions, Juranet.tech offers home seekers, sellers and real
                estate professionals an extensive online real estate ecosystem. This ecosystem innovatively combines at
                a single stop:
                </br>Exhaustive search options for both renting and buying property
                </br>Easy to use analytics
                </br>Apartment and locality reviews
                </br>A comprehensive and verified data base of apartments across India
                </br>Apartment community management tools
                </br>As a user you have all conceivable property details for over 5 lakhs active property listings
                across over 200 cities and over 1,10,000 projects.</h3>
        </div>
        <div class="tab-pane" id="3b">
            <h3>Buy Properties</h3>
            <h3>Rent Homes</h3>
            <h3>Sell Properties</h3>
        </div>
        <div class="tab-pane" id="4b">
            <h3>Under Construction</h3>
        </div>
        <div class="tab-pane" id="5b">
            <h3><?php
                $homepage = file_get_contents('data/contacts.txt');
                echo $homepage;
                ?></h3>
        </div>
        <div class="tab-pane" id="6b">
            <h3>User Creation</h3>
            <!--<form action="php/user_create.php" method="post">
                <!--Username: <input type="text" name="username"><br>
                First Name: <input type="text" name="firstname"><br>
                Last Name: <input type="text" name="lastname"><br>
                Address: <textarea type="text" name="addr"></textarea><br>
                E-mail: <input type="text" name="email"><br>
                Home Phone: <input type="text" name="homephone"><br>
                Cell Phone: <input type="text" name="cellphone"><br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-xs-2 col-form-label">Text</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                    </div>
                </div>
                <input type="submit">
            </form>-->

            <form action="php/user_create.php" method="post" class="form-horizontal">
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
            <form action="php/user_search.php" method="post" class="form-horizontal">
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

</body>
</html>

