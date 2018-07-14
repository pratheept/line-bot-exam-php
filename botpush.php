<?php



require "vendor/autoload.php";

$access_token = 'djrm3KX3XIY7wQv9dcr8kDI288emZ9szQb0j3GVjD9kia7p5w0c3liomcXiuoVlQDKlK/2cElR91wMR+zUSINxLLU6FEst4k+GqEDsAevoXWNx9yW7uTXqF/A6aVzlkA1gBh7HaCIt4yRY3DKbzT2AdB04t89/1O/w1cDnyilFU=';

$channelSecret = '22a6f0d381e636780965584f4df21bc9';

$pushID = 'Uc46ce37f2264f46a4e2fa4f9054dd19e';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







