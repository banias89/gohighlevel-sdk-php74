# Fase 2 - Piano di esecuzione a step

## 1) Setup struttura progetto

- Creare root package con autoload PSR-4 su namespace `Bsys\\`.
- Predisporre `autoload.php` manuale per integrazione senza Composer obbligatorio.

## 2) Core SDK

- Implementare `Bsys\GoHighLevel\Core\GhlClient` come entrypoint.
- Implementare `Bsys\GoHighLevel\Core\Http\CurlHttpClient` con cURL nativo.
- Implementare `Bsys\GoHighLevel\Core\Http\HttpResponse`.
- Implementare eccezioni base:
  - `ApiException`
  - `TransportException`
  - `SerializationException`

## 3) Architettura moduli endpoint

- Implementare `Bsys\GoHighLevel\Modules\AbstractModule`.
- Generare un modulo dedicato per ciascun gruppo API v2 identificato.
- Ogni metodo endpoint accetta:
  - `pathParams`
  - `query`
  - `body`
  - `headers`

## 4) Copertura endpoint v2 completa

- Estrarre endpoint ufficiali da OpenAPI pubblici.
- Generare metodi modulo da `operationId` mantenendo mapping verb/path.
- Escludere `oauth.json` per rispettare requisito no OAuth.

## 5) Documentazione e esempio

- Scrivere README con:
  - struttura
  - usage
  - error handling
  - limiti voluti (no retry/rate-limit advanced)
- Aggiungere esempio `examples/basic_usage.php`.

## Namespace root e albero directory

- Namespace root: `Bsys\GoHighLevel`

Albero principale:

- `composer.json`
- `autoload.php`
- `README.md`
- `docs/phase1-analysis.md`
- `docs/phase2-plan.md`
- `docs/module-counts.tsv`
- `docs/endpoint-map.tsv`
- `src/Bsys/GoHighLevel/Core/GhlClient.php`
- `src/Bsys/GoHighLevel/Core/Http/CurlHttpClient.php`
- `src/Bsys/GoHighLevel/Core/Http/HttpResponse.php`
- `src/Bsys/GoHighLevel/Core/Exception/ApiException.php`
- `src/Bsys/GoHighLevel/Core/Exception/TransportException.php`
- `src/Bsys/GoHighLevel/Core/Exception/SerializationException.php`
- `src/Bsys/GoHighLevel/Modules/AbstractModule.php`
- `src/Bsys/GoHighLevel/Modules/*Module.php`
- `examples/basic_usage.php`
- `tools/generate-modules.php`
