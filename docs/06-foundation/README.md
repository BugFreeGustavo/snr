# Foundation

**Status:** Draft

**Version:** 1.0

**Document Type:** Overview

**Owner:** Engineering

**Last Updated:** 2026-08-03

---

## Purpose

The Foundation layer defines how SNR should be implemented.

While the previous documentation establishes the product vision, domain model, architecture, solution capabilities and application behaviour, this wave defines the engineering strategy that guides implementation.

Its purpose is not to introduce new business concepts or technical architecture, but to establish a disciplined approach for translating the documented model into a maintainable software system.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `../01-product/README.md`
- `../02-domain/README.md`
- `../03-architecture/README.md`
- `../04-solution/README.md`
- `../05-application/README.md`

---

## Documentation Structure

| Document | Purpose |
|----------|---------|
| `implementation-strategy.md` | Defines the implementation strategies, engineering principles and implementation roadmap that guide the development of SNR. |

---

## Relationship to Previous Waves

The Foundation layer builds upon the work established in the previous documentation.

- **Wave 1 – Product** defines why SNR exists.
- **Wave 2 – Domain** defines the Professional's world.
- **Wave 3 – Architecture** organises that world into coherent structures.
- **Wave 4 – Solution** identifies the capabilities required to deliver value.
- **Wave 5 – Application** defines how those capabilities are experienced through professional interactions.
- **Wave 6 – Foundation** defines how the documented model should be implemented.

Together, these layers create a continuous path from product vision to working software.

---

## Relationship with the Product Vision

The implementation strategy exists to preserve the Product Promise established in Wave 1.

> **Every completed project should make the next project easier.**

Every implementation decision should reinforce the documented domain, ensuring that the software continues to support the Professional through preserved knowledge and progressively better decision-making.

---

## Scope

The Foundation layer focuses on implementation strategy rather than implementation details.

It defines the principles that guide engineering decisions, implementation order and development workflow while leaving specific technical solutions to emerge from the needs of the documented domain.

---

## Guiding Principle

> **Every implementation decision should preserve the integrity of the documented domain while allowing the application to evolve through simple, complete and continuously validated increments.**