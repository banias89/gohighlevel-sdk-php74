# Bsys GoHighLevel SDK (PHP 8.4)

SDK proprietario, modulare e senza dipendenze esterne per GoHighLevel API v2, focalizzato su **Private Integration Token / Access Token in header**.

## Obiettivo

- Nessun supporto OAuth flow nell'SDK.
- Trasporto HTTP con cURL nativo.
- Struttura OOP con tipizzazione forte (`declare(strict_types=1);`).
- Copertura completa degli endpoint v2 mappati dagli spec ufficiali pubblici (`apps/*.json`, escluso `oauth.json`).

## Copertura API v2

- Totale endpoint generati: **410**
- Totale moduli: **34**
- Base URL default: `https://services.leadconnectorhq.com`
- Header versione default: `Version: 2021-07-28`

### Moduli inclusi

- `associations`: 10 endpoint(s)
- `blogs`: 7 endpoint(s)
- `businesses`: 5 endpoint(s)
- `calendars`: 34 endpoint(s)
- `campaigns`: 1 endpoint(s)
- `companies`: 1 endpoint(s)
- `contacts`: 32 endpoint(s)
- `conversations`: 19 endpoint(s)
- `courses`: 1 endpoint(s)
- `custom-fields`: 8 endpoint(s)
- `custom-menus`: 5 endpoint(s)
- `email-isv`: 1 endpoint(s)
- `emails`: 5 endpoint(s)
- `forms`: 3 endpoint(s)
- `funnels`: 7 endpoint(s)
- `invoices`: 41 endpoint(s)
- `links`: 6 endpoint(s)
- `locations`: 29 endpoint(s)
- `marketplace`: 7 endpoint(s)
- `medias`: 7 endpoint(s)
- `objects`: 9 endpoint(s)
- `opportunities`: 10 endpoint(s)
- `payments`: 24 endpoint(s)
- `phone-system`: 2 endpoint(s)
- `products`: 27 endpoint(s)
- `proposals`: 4 endpoint(s)
- `saas-api`: 22 endpoint(s)
- `snapshots`: 4 endpoint(s)
- `social-media-posting`: 40 endpoint(s)
- `store`: 18 endpoint(s)
- `surveys`: 2 endpoint(s)
- `users`: 7 endpoint(s)
- `voice-ai`: 11 endpoint(s)
- `workflows`: 1 endpoint(s)

## Struttura principale

- `src/Bsys/GoHighLevel/Core/GhlClient.php`
- `src/Bsys/GoHighLevel/Core/Http/CurlHttpClient.php`
- `src/Bsys/GoHighLevel/Core/Http/HttpResponse.php`
- `src/Bsys/GoHighLevel/Core/Exception/*`
- `src/Bsys/GoHighLevel/Modules/*Module.php`
- `autoload.php`
- `examples/basic_usage.php`

## Utilizzo rapido

```php
<?php

declare(strict_types=1);

require_once __DIR__ . '/autoload.php';

use Bsys\GoHighLevel\Core\GhlClient;

$client = GhlClient::withAccessToken(
    accessToken: 'YOUR_PRIVATE_INTEGRATION_TOKEN'
);

$response = $client->contacts()->getContacts(
    query: [
        'locationId' => 'YOUR_LOCATION_ID',
        'limit' => 20,
    ]
);

var_dump($response->statusCode, $response->body);
```

## Gestione errori

- `Bsys\GoHighLevel\Core\Exception\ApiException`: errore HTTP >= 400.
- `Bsys\GoHighLevel\Core\Exception\TransportException`: errore cURL/network.
- `Bsys\GoHighLevel\Core\Exception\SerializationException`: errore encode/decode JSON.

## Note implementative

- Per endpoint con path dinamico, passa i placeholder in `pathParams`, ad esempio:

```php
$response = $client->contacts()->getContact(
    pathParams: ['contactId' => 'abc123']
);
```

- Per payload JSON, usa `body` come array.
- Per multipart, passa `body` con `CURLFile` e opzionalmente header multipart; il client evita l'header `Content-Type` fisso per lasciare a cURL il boundary corretto.
- Se devi usare un header auth custom (API key), puoi impostare `authHeaderName` e `authScheme` nel factory:

```php
$client = GhlClient::withAccessToken(
    accessToken: 'YOUR_API_KEY',
    authHeaderName: 'X-API-Key',
    authScheme: null // invia il token senza prefisso "Bearer"
);
```

## Limiti voluti in questa versione

- Nessun retry automatico.
- Nessuna gestione rate limit avanzata.
- Nessun flusso OAuth 2.0.

## Rigenerazione automatica moduli

I moduli endpoint sono generati da `tools/generate-modules.php` leggendo gli spec OpenAPI locali.

```bash
php tools/generate-modules.php
```
