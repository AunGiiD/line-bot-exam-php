<?php



require "vendor/autoload.php";

$access_token = 'MMTUF+WLBeH9xT8HM22gY9AZP45VKVXtiMi+964d1y7uC7nhm0hn1/kDYM4gcU8sFOxjFrIdB426HdzikbP4sukJ9bCWJi7hgrE9s6X61k637FwwJ9MhrZPd02LJJwChLdra6M0/Rgd3rIzaPSC6+AdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f158371ce9a44946b78ed1b3bda1aea2';

$pushID1 = 'Ucbc90c3adf7bd6c2f5863adfa3f3e1b6';
$pushID2 = 'U0dbde79e7d0ad555b2ca318e3971cac8';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world Aung');
$response = $bot->pushMessage($pushID1, $textMessageBuilder);
$response = $bot->pushMessage($pushID2, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







