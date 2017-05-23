<?php
$access_token = 'pXycMNZQmqDQMsRNxAiOHply1ABxJY6tS+9r4JItT3fuiQUEkZK5goIbdmxhNSngg2KhJAuhh5A59bzTGBkvl1yLy7Im7VXmWfZTUoQUOjoYQPOQyH6Q9ae4ViTrxCOYtWdNxO2/zC1lp4YTiERB7QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
