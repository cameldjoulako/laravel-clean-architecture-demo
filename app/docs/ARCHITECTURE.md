# Architecture Overview

This demo follows Domain-Driven Design (DDD) and Clean Architecture principles.

-   **Domain Layer** – Contains the core business entities, value objects, and repository interfaces.  
    No Laravel dependencies here — pure PHP.
-   **Application Layer** – Holds use cases, DTOs, and services orchestrating domain logic.  
    Depends only on the Domain layer.
-   **Infrastructure Layer** – Implements persistence and external services (Eloquent, APIs, etc.).  
    Depends on Laravel and provides concrete repository implementations.
-   **Presentation Layer** – Controllers, requests; the entry point for the framework.

Each layer communicates through abstractions (interfaces) to ensure decoupling.
