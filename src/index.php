<?php 

$response = file_get_contents('www.binance.com/api/v3/ticker/price');
json_decode($response);
json_encode($response);
return $response;

?>