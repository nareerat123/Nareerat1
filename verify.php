<?php
$access_token = '3VisO7kh0YLge2w2eAX2T0kybXF7EMK7suWyewx4IMm8JXKi/PYTEuoI+tIf6bkWh+tHEWD9N5yy9EU4RVLuf2fGUJFarIgK2dWAdNr4tmz4CuHJiwl4agEJUTL8yNnXFYAMIwFGP4aO3/Ij73USogdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>