<?php


$access_token = 'M9lzosmJ3jWLvleCM/wd/kTeXtFvt+SbFn3FXIIX1ou0/ArZTZOici0dgq3WE0AH6/G7Qg04UDxjzknLGKHtGh3uBF57yLfPhYI/cR+JKLlEgsefQ/t9+4T8baXxYQOJ0gGwtPOFo5tE0xknij3SB5pUdcl/jeq2MDsp33paxx0=';

$userId = 'U1610895050e906214bd1b1e707e3d2f2';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

