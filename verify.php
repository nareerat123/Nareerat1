<?php
$access_token = 'njUoOMne4J+S1pHSJ3z7DMaA6HrTXc5oQb4gL3gSHqLSK9sMNAk35Mi+a76Rmosrh+tHEWD9N5yy9EU4RVLuf2fGUJFarIgK2dWAdNr4tmxmnBC/ODdTVWh1e2x2+PgrjKZt9R2ZeN7aUMax1639LgdB04t89/1O/w1cDnyilFU=
;

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