<?php

use ITTELL\Call2FA\Client;
use ITTELL\Call2FA\ClientException;

require __DIR__ . '/../vendor/autoload.php';

// API credentials
$login = '***';
$password = '***';

// Configuration for this call
$callTo = '+380631010121';
$callbackURL = 'http://example.com';

try {
    // Create the Call2FA client
    $client = new Client($login, $password);

    // Make a call
    $result = $client->call($callTo, $callbackURL);

    print_r($result);

    // Result looks like the following:

    /*

    (
        [call_id] => 112
    )

    */

    echo "Wait the call!";
} catch (ClientException $e) {
    // Something went wrong, we recommend to log the error
    echo "Error:";
    echo "\n";
    echo $e;
}
