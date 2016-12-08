<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 12/7/2016
 * Time: 5:02 PM
 */

    $query = http_build_query([
        'client_id' => 4,
        'redirect_uri' => 'https://juranet.tech/php/merkato_callback.php',
        'response_type' => 'code',
        'scope' => '',
    ]);

    header("Location: https://merkato.herokuapp.com/oauth/authorize?$query");