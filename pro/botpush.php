<?php

namespace LINE;

use LINE\LINEBot\Event\Parser\EventRequestParser;
use LINE\LINEBot\HTTPClient;
use LINE\LINEBot\MessageBuilder;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use LINE\LINEBot\Narrowcast\DemographicFilter\DemographicFilterBuilder;
use LINE\LINEBot\Narrowcast\Recipient\RecipientBuilder;
use LINE\LINEBot\Response;
use LINE\LINEBot\SignatureValidator;
use LINE\LINEBot\RichMenuBuilder;
use ReflectionClass;
use DateTime;
use DateTimeZone;

require "vendor/autoload.php";

$access_token = 'M9lzosmJ3jWLvleCM/wd/kTeXtFvt+SbFn3FXIIX1ou0/ArZTZOici0dgq3WE0AH6/G7Qg04UDxjzknLGKHtGh3uBF57yLfPhYI/cR+JKLlEgsefQ/t9+4T8baXxYQOJ0gGwtPOFo5tE0xknij3SB5pUdcl/jeq2MDsp33paxx0=';

$channelSecret = '6552598271da9230d7efe7347fb0ae30';



$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);

$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$msg = $_GET['m'];
$pushID = $_GET['u'];
  //'U44e90a4578cb725ccc9ed09d2cdc18e9';
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($msg);
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







