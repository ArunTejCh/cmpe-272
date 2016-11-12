<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 11/12/2016
 * Time: 12:16 AM
 */
include("../dbconfig.php");

//error_log(print_r("username is: "+$username, TRUE));

$sql = "SELECT Userid, Email, Firstname, Lastname, HomeAddr, Homephone, Cellphone FROM users";
//echo $sql;
$retval = mysqli_query($db, $sql);

if (!$retval) {
    die('Could not get user data for given parameters');
}

echo "<h3>Juranet.tech Users </h3> </br>";
echo("<table>");
$first_row = true;
while ($row = mysqli_fetch_assoc($retval)) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '<tr>';
        foreach($row as $key => $field) {
            echo '<th style="width:150px;border:1px solid black;">' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach($row as $key => $field) {
        echo '<td style="width:150px;border:1px solid black;">' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
echo("</table>");


echo "<h3>Airwind.me Users </h3> </br>";


$site_url = "http://airwind.me/userjson.php";
$options = array(
    CURLOPT_RETURNTRANSFER => true,   // return web page
    CURLOPT_HEADER         => false,  // don't return headers
    CURLOPT_FOLLOWLOCATION => true,   // follow redirects
    CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
    CURLOPT_ENCODING       => "",     // handle compressed
    CURLOPT_USERAGENT      => "test", // name of client
    CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
    CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
    CURLOPT_TIMEOUT        => 120,    // time-out on response
);

$ch = curl_init($site_url);
curl_setopt_array($ch, $options);

$content  = curl_exec($ch);

curl_close($ch);

$userlist = json_decode($content);
echo $userlist;
print_r($userlist);
echo "ergverg";

for($i = 0;$i < $userlist.sizeOf(); $i++){
    echo $userlist[$i];
}
//print_r(phpinfo());