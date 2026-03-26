# Fase 1 - Studio e Analisi API v2 (Private Integration)

Data analisi: 2026-03-26

## Fonti ufficiali usate

- https://marketplace.gohighlevel.com/docs/oauth/GettingStarted
- https://github.com/GoHighLevel/highlevel-api-docs
- https://raw.githubusercontent.com/GoHighLevel/highlevel-api-docs/main/toc.json

## Scope deciso

- Solo API v2 documentate pubblicamente.
- Solo autenticazione bearer token in header (`Authorization: Bearer <token>`), includendo Private Integration Token.
- Escluso il flusso OAuth (`oauth.json`) per richiesta progetto.

## Risultato mappatura

- Endpoint HTTP totali mappati: **410**
- Moduli API coperti: **34**
- Base URL API dagli spec: `https://services.leadconnectorhq.com`
- Header versione frequente negli endpoint: `Version: 2021-07-28`

## Output di mappatura

- Dettaglio completo endpoint: `docs/endpoint-map.tsv`
- Conteggio per modulo: `docs/module-counts.tsv`
