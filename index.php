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
    </ul>

    <div class="tab-content clearfix">
        <div class="tab-pane active" id="1b">
            <h3>Welcome to Juranet Housing and Real Estate. </br>
                </br>
                We are committed to providing a safe way to buy/sell/rent properties across various cities
                </br>
                you can login here
                <a href="php/login.php">Login</a>
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
    </div>
</div>

</body>
</html>

