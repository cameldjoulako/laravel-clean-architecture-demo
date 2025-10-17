# Security Guidelines

-   Never commit `.env` files or credentials.
-   Always validate and sanitize all input via **FormRequests**.
-   Protect API routes with authentication middleware (`auth`, `auth:api`, or your custom guard).
-   Apply **Policies** to enforce fine-grained access control (principle of least privilege).
-   Use `throttle:api` to rate-limit requests and prevent abuse.
-   Always serve your API over HTTPS.
-   Encrypt sensitive data at rest (e.g. Laravel Crypt, MySQL AES_ENCRYPT).
-   Log authentication and authorization events.
-   Regularly review access tokens, sessions, and password policies.
