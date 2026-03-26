<?php

declare(strict_types=1);

require_once __DIR__ . '/../autoload.php';

use Bsys\GoHighLevel\Core\Exception\ApiException;
use Bsys\GoHighLevel\Core\Exception\TransportException;
use Bsys\GoHighLevel\Core\GhlClient;

$client = GhlClient::withAccessToken(
    'REPLACE_WITH_PRIVATE_INTEGRATION_TOKEN',
    'https://services.leadconnectorhq.com',
    '2021-07-28'
);

try {
    $response = $client->contacts()->getContacts(
        [],
        [
            'locationId' => 'REPLACE_LOCATION_ID',
            'limit' => 20,
        ]
    );

    var_dump($response->statusCode, $response->body);
} catch (ApiException $exception) {
    echo 'API error: ' . $exception->getMessage() . PHP_EOL;
    var_dump($exception->responseBody());
} catch (TransportException $exception) {
    echo 'Transport error: ' . $exception->getMessage() . PHP_EOL;
}
