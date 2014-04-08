<?php
header('Content-Type: text/plain');

require 'url.php';

try {
    $client = new \SoapClient($url,array(
       'exceptions' => true,
    ));
} catch ( \SoapFault $e ) {
    echo $e->getMessage();
}