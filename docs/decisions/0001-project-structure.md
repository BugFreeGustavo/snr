# Decision 0001 — Project Structure Mapping

**Status:** Accepted

**Version:** 1.0

**Document Type:** Decision

**Owner:** Product Team

**Last Updated:** 2026-08-03

---

## Purpose

This document records how the architecture defined in `../03-architecture/` is mapped onto the physical structure of the Laravel codebase.

It is not a change to the documented domain or architecture. Waves 1 through 6 remain frozen. This Decision only translates an already-accepted model into directories and conventions.

This is the first entry in `docs/decisions/`. Unlike `../03-architecture/domain-discoveries.md`, which records discoveries that change the understanding of the *domain*, this folder records decisions that refine the *architecture or process* once implementation begins — see the "Applying These Principles" section of `../03-architecture/architectural-principles.md`.

---

## Related Documentation

- `../03-architecture/bounded-contexts.md`
- `../03-architecture/architectural-principles.md`
- `../03-architecture/domain-discoveries.md`

---

## Context

Implementation of SNR started with a Laravel scaffold at the repository root. Before writing any domain code, the two documented Bounded Contexts — Professional Operations and Professional Resources — needed a concrete mapping to directories, so that hundreds of future files follow a single, consistent convention rather than accumulating ad-hoc structure.

---

## Decision

### Bounded Contexts become top-level namespaces

Each Bounded Context maps to one directory under `app/`, named after the Context exactly as it appears in `bounded-contexts.md`:

```
app/
├── ProfessionalOperations/
├── ProfessionalResources/
└── Shared/
```

### Each Context is organised into four layers

```
{Context}/
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

- **Domain** — Eloquent Models act as the Domain Entities. No separate persistence layer or Repository abstraction is introduced. There is no documented discovery today that requires isolating the domain from Eloquent, and introducing that indirection now would be speculative complexity (Architectural Principle 07, *Simplicity Over Speculation*).
- **Application** — Actions orchestrate use cases and depend on the Domain. DTOs are the data contract between Presentation and Application, keeping each layer independent of the other's shape.
- **Infrastructure** — reserved for integrations with things outside the domain (external services, file storage, etc.). Empty until a real need appears.
- **Presentation** — Controllers, Form Requests, API Resources and Policies. Form Requests validate the shape of a request, not business rules. Policies answer "is this request allowed right now," which is an access-control concern, not a domain invariant — so neither belongs inside Domain.

### `app/Shared/` is not a Bounded Context

It exists only for cross-cutting technical utilities (base classes, traits, generic helpers). It must never hold business responsibility. If a concept placed there starts to look like it owns a business responsibility, that is a signal of a domain discovery, not a reason to expand this folder — and should be raised against `../03-architecture/bounded-contexts.md`, following Architectural Principle 04, *Responsibilities Before Structures*.

### Tests mirror the `app/` structure

```
tests/
├── Feature/{Context}/...
└── Unit/{Context}/Domain/...
```

Pest is used instead of raw PHPUnit for readability; PHPUnit-style test classes remain fully compatible if ever needed.

### `App\Models\User` is untouched, for now

The default Laravel `User` model, its controller and provider scaffolding stay where Laravel puts them. Deciding how `User` relates to the documented `Professional` concept is a domain-modelling question that belongs to the Authentication increment, not to this structural foundation. Moving it now would smuggle a business decision into what is meant to be a structure-only increment.

---

## Consequences

- Every future file has exactly one obvious home, traceable back to a Bounded Context and a layer.
- Adopting a Repository pattern later, if a real discovery justifies it, is a follow-up Decision, not a reversal of this one — only the Domain layer's internals would change; the directory shape stays.
- `docs/decisions/` now exists and will grow only when a future increment produces another genuine architecture or process decision.

---

## Guiding Principle

Reality Before Implementation.

> Structure should make the domain easy to find, not the other way around.
