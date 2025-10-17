DDD + Clean Architecture:
- Application: orchestrates use-cases (no framework details).
- Domain: entities + repository contracts (pure PHP).
- Infrastructure: Eloquent models, repository implementations.

Controllers are thin; policies guard access. All examples are anonymized.
