<?php
require __DIR__ . '/vendor/autoload.php';

use MoodlePHP\Client as Client;

$moodle = 'https://YOUR_MOODLE_SITE.com/moodle/webservice/rest/server.php';
$token = 'asdfg123456';
$function = 'core_webservice_get_site_info';

$client = new Client($moodle, $token);
$client->setReturnFormat(Client::RETURN_JSON);

$result = $client->request($function);

$json = json_decode($result);

print('SITE_NAME = ');
print($json->sitename . '<br><br>');

print('JSON<br>');
print_r($result);

print('<br><br>');
print('Object<br>');
print_r($json);

echo '<br><br>THE END1';
