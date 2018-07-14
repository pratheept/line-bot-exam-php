<?php


$access_token = 'djrm3KX3XIY7wQv9dcr8kDI288emZ9szQb0j3GVjD9kia7p5w0c3liomcXiuoVlQDKlK/2cElR91wMR+zUSINxLLU6FEst4k+GqEDsAevoXWNx9yW7uTXqF/A6aVzlkA1gBh7HaCIt4yRY3DKbzT2AdB04t89/1O/w1cDnyilFU=';

$userId = 'Uc46ce37f2264f46a4e2fa4f9054dd19e';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

