# Architecture

**Status:** Accepted

**Version:** 1.0

**Document Type:** Architecture

**Owner:** Product Team

**Last Updated:** 2026-07-29

---

## Purpose

This section documents the strategic architecture of the SNR domain.

While the Domain documentation defines the business concepts that exist within the Professional's world, the Architecture documentation explains how those concepts are organised into coherent and maintainable boundaries.

Its purpose is not to describe technical implementation, but to preserve the architectural decisions that allow the domain to evolve without unnecessary complexity.

Every architectural decision should remain grounded in the business reality documented throughout the Domain section.

---

## Relationship with the Domain

The Domain describes reality.

Architecture organises that reality.

Business concepts are discovered before architectural boundaries are introduced.

Architecture therefore exists to preserve the integrity of the domain rather than reshape it.

Whenever architectural decisions conflict with business reality, the domain takes precedence.

---

## Contents

This section currently contains:

- **Domain Discoveries** — the significant discoveries that shaped the understanding of the domain.
- **Bounded Contexts** — the major business boundaries identified within the domain.
- **Context Map** — the relationships between those business boundaries.
- **Strategic Decisions** — architectural principles that guide long-term evolution.
- **Glossary** — the architectural vocabulary used consistently throughout this section.

Additional documents may be introduced as the architecture evolves.

---

## Guiding Principles

Every architectural decision should follow the same principles.

- Reality Before Implementation.
- The Domain defines the Architecture.
- Architecture should reduce complexity rather than introduce it.
- Business boundaries should emerge through discovery.
- Architectural decisions should remain understandable without implementation knowledge.

---

## Relationship with Other Documentation

This section builds directly upon the Domain documentation found in `../02-domain/`.

It should always be read after understanding the business concepts, workflows, events and rules that define the SNR domain.

Future implementation documentation will build upon both the Domain and Architecture sections.

---

## Evolution

Architecture is expected to evolve as the understanding of the domain grows.

New architectural concepts should only be introduced when they solve problems that emerge naturally from the domain.

Architectural complexity should never be introduced in anticipation of future needs.

---

## Guiding Principle

Architecture should protect the domain.

The domain should never be compromised to satisfy the architecture.

---

> **Reality Before Implementation.**