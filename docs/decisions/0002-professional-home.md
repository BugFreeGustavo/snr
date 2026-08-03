# Decision 0002 — Where the Professional Model Lives

**Status:** Accepted

**Version:** 1.0

**Document Type:** Decision

**Owner:** Product Team

**Last Updated:** 2026-08-03

---

## Purpose

`../03-architecture/bounded-contexts.md` (v1.1) now states explicitly that the Professional is not owned by either Bounded Context — it is the central actor both Contexts exist to serve. This Decision records where that concept physically lives in the codebase.

---

## Related Documentation

- `../03-architecture/bounded-contexts.md`
- `0001-project-structure.md`

---

## Context

Increment 001 mapped the two Bounded Contexts to `app/ProfessionalOperations/` and `app/ProfessionalResources/`, and reserved `app/Shared/` for cross-cutting technical utilities with no business responsibility. The Professional does not fit either place: it is a business concept (it has responsibilities, per `../02-domain/domain-concepts.md`), but it belongs to neither Context.

## Decision

The Professional gets its own top-level namespace, structured the same way as a Bounded Context for consistency, but not documented as one:

```
app/Professional/
├── Domain/
│   ├── Models/
│   ├── ValueObjects/
│   └── Enums/
├── Application/
│   ├── Actions/
│   └── DTOs/
├── Infrastructure/
└── Presentation/
    ├── Http/
    │   ├── Controllers/
    │   ├── Requests/
    │   └── Resources/
    └── Policies/
```

The default Laravel `User` model becomes `App\Professional\Domain\Models\Professional`, backed by a `professionals` table. This is the same "Eloquent Model = Domain Entity" decision already made in `0001-project-structure.md`, applied here for the first time.

## Consequences

- `app/Shared/` keeps its original meaning (technical-only, no exceptions) — the Professional is not treated as an exception to that rule, it simply lives elsewhere.
- Authentication (Increment 002) is implemented entirely under `app/Professional/`.
- If SNR ever needs to model more than one Professional, this Decision — not `bounded-contexts.md` — is the first place to revisit.

---

## Guiding Principle

Reality Before Implementation.

> The central actor of the domain deserves an obvious home, even without being a Bounded Context.
