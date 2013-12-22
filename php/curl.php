<?php
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://tmeag.com/enroll/payment/?slotID=456&enrollID=533&paypal_callback=1&token=06e63e6be5',
    CURLOPT_USERAGENT => 'TMEAG Curl'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
echo "<pre>";
var_dump($resp);

