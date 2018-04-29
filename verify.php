<?php
$access_token = 'uFGEJYG4XiBO5kqPzxO/1srV2YjjQMrjSNj1vN6xYgKSoEVz0hwJCnqRQszWcHvv+tustrIeyLm25XwtO81og80hqDCHb5pojQ9H0nEIOkp3yKyJzUgarCsszfxoh9Xy8VeOMnVd4wvDNNP8U7xvpQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
