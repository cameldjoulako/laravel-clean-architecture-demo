# Clean Architecture Notes

-   Entities are at the core, free from framework dependencies.
-   Application layer orchestrates domain logic through use cases.
-   Infrastructure provides implementations (Eloquent, services, APIs).
-   The goal: high testability, maintainability, and scalability.

Example:
Controller → UseCase → Repository Interface → Eloquent Implementation → Database
