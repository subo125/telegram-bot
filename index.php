<?php
const TOKEN = '664326487:AAG2pQHhbnAAKdrzINHx45-QCnJVd3T2kyE';
const BASEURL = 'https://api.telegram.org/bot';
$method = 'setWebhook';
$params = [
    'url' => 'http://su6888bo.lh1.in/'
];
$url = BASEURL . TOKEN . '/' . $method . '?' . http_build_query($params);
$response = file_get_contents($url);
echo "{$url}\n";
echo $response;