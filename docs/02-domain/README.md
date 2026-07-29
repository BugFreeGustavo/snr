# Domain Documentation

**Status:** Accepted

**Version:** 1.0

**Document Type:** Repository

**Owner:** Product Team

**Last Updated:** 2026-07-29

---

## Purpose

This section documents the business domain of SNR.

Its purpose is to describe how independent professionals work in the real world, the language they use, the entities they interact with and the business rules that govern their daily activities.

The documents contained here intentionally describe the business itself rather than its software implementation.

Understanding the domain is considered a prerequisite for designing the system.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `../01-product/README.md`
- `../01-product/vision.md`
- `../01-product/principles.md`
- `../01-product/positioning.md`

---

## Scope

The Domain documentation defines the shared understanding of the business before any architectural or implementation decisions are made.

It answers questions such as:

- What problems does the freelancer solve?
- What activities happen during a project?
- Which concepts exist in the business?
- How are those concepts related?
- Which business rules must always remain true?

These answers establish the foundation upon which the software will be designed.

---

## Documents

| Document | Purpose |
|----------|---------|
| **ubiquitous-language.md** | Defines the official vocabulary used throughout the product and documentation. |
| **business-workflows.md** | Describes real-world workflows performed by independent professionals. |
| **business-events.md** | Identifies the significant events that occur within the business domain. |
| **domain-model.md** | Defines the core entities, value objects and their relationships. |
| **business-rules.md** | Documents the business rules and invariants that govern the domain. |
| **glossary.md** | Provides concise definitions for important domain terminology. |

---

## Reading Order

The documents in this section are intended to be read in the following order:

1. Ubiquitous Language
2. Business Workflows
3. Business Events
4. Domain Model
5. Business Rules
6. Glossary

Each document builds upon the concepts introduced by the previous ones.

---

## Design Philosophy

The domain describes reality, not implementation.

This documentation intentionally avoids discussing programming languages, frameworks, databases or software architecture.

Its purpose is to capture how the business actually operates.

Only after the domain is fully understood should technical solutions be designed.

---

## Guiding Principle

Software should adapt to the business.

The business should never be simplified to accommodate the software.

---

> **We are not designing software. We are discovering a business.**