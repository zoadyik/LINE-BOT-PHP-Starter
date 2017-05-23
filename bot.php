<?php
$ composer require linecorp/line-bot-sdk
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('pXycMNZQmqDQMsRNxAiOHply1ABxJY6tS+9r4JItT3fuiQUEkZK5goIbdmxhNSngg2KhJAuhh5A59bzTGBkvl1yLy7Im7VXmWfZTUoQUOjoYQPOQyH6Q9ae4ViTrxCOYtWdNxO2/zC1lp4YTiERB7QdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '7fe8857acdcda6ae410ec97ac4d04410']);
$response = $bot->replyText('<reply token>', 'hello!');
