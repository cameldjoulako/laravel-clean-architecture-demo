# Laravel Clean Architecture Demo — Field Operations Module (Laravel 11.45.1)

This repository is a small demonstration of how I structure Laravel 11 projects using a clear separation of concerns.  
It shows the patterns I apply in production: domain boundaries, service layer orchestration, repository abstraction and simple PDF reporting.

> ⚠️ Confidentiality notice
>
> This demo is inspired by systems I built for clients (field operations). All code and sample data here are anonymized. The purpose is to show engineering practices, not to expose client work.

## What is included

-   Minimal folder layout reflecting Domain / Application / Infrastructure separation
-   Example DTOs, Services and Repository interfaces/implementations
-   Simple Blade template and DomPDF example for report export
-   SQL migration outline
-   Policy example for authorization

## Tech stack

-   Framework: Laravel 11.45.1
-   PHP: 8.2+
-   Database: MySQL (schema outline provided)
-   Reporting: barryvdh/laravel-dompdf

## Quick notes

-   This repository is not a full production system. It is intended as a reference for architecture and coding conventions.
-   Sensitive data must always be encrypted in real projects. Use app-level encryption or pgcrypto where needed.
-   Use queues for heavy tasks (PDF generation, external submission) and record submission receipts for reconciliation.

## Basic usage

1. Create a fresh Laravel project locally if needed.
2. Copy folders from this demo into your application (app/, routes/, resources/, docs/).
3. Install DomPDF: `composer require barryvdh/laravel-dompdf`.
4. Configure MySQL settings in `.env`.

## Folder excerpt
