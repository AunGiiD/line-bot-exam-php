<?php


$access_token = 'MMTUF+WLBeH9xT8HM22gY9AZP45VKVXtiMi+964d1y7uC7nhm0hn1/kDYM4gcU8sFOxjFrIdB426HdzikbP4sukJ9bCWJi7hgrE9s6X61k637FwwJ9MhrZPd02LJJwChLdra6M0/Rgd3rIzaPSC6+AdB04t89/1O/w1cDnyilFU=';

$userId = 'Ucbc90c3adf7bd6c2f5863adfa3f3e1b6';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

