# Decision 0003 — Factory Resolution for Domain Models

**Status:** Accepted

**Version:** 1.0

**Document Type:** Decision

**Owner:** Product Team

**Last Updated:** 2026-08-03

---

## Purpose

Records why every Eloquent Model placed under a Bounded Context or under `app/Professional/` must explicitly override `newFactory()`, instead of relying on Laravel's default factory discovery.

---

## Related Documentation

- `0001-project-structure.md`

---

## Context

Laravel resolves a Model's factory by convention: it mirrors the Model's namespace, with `App\` replaced by `Database\Factories\`, and appends `Factory` to the class name. This convention assumes Models live in the default flat `App\Models` namespace.

`0001-project-structure.md` places Domain Models under `app/{Context}/Domain/Models/`, not `App\Models`. The first Domain Model created (`App\Professional\Domain\Models\Professional`) exposed this: Laravel looked for `Database\Factories\Professional\Domain\Models\ProfessionalFactory`, which does not exist — the factory lives at the flat, predictable `database/factories/ProfessionalFactory.php`.

## Decision

The convention is broken in both directions, so both must be fixed explicitly, on every Domain Model / Factory pair.

**Model → Factory.** Every Domain Model overrides `newFactory()` to point directly at its flat factory class:

```php
protected static function newFactory(): ProfessionalFactory
{
    return ProfessionalFactory::new();
}
```

**Factory → Model.** The reverse guess is also wrong — `Factory::modelName()` strips `Factory` from the class name and guesses a model namespace that doesn't match ours either. Every Factory declares its Model explicitly instead of relying on that guess:

```php
protected $model = Professional::class;
```

`database/factories/` stays flat — one file per Model, named `{Model}Factory.php` — regardless of which Context the Model belongs to. The alternative (mirroring the full `app/` namespace under `database/factories/`) was rejected: it would nest factories several directories deep for no benefit, since factory class names are already unique per Model across the whole application.

## Consequences

- Every new Domain Model needs both the `newFactory()` override and the Factory's `protected $model` declaration. It is boilerplate, but explicit and easy to spot in review — a missing override fails loudly (`Class ... not found`) rather than silently.

---

## Guiding Principle

Reality Before Implementation.

> A flat, predictable `database/factories/` is worth three lines of boilerplate per Model.
