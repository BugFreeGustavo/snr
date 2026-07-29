# Architectural Principles

**Status:** Accepted

**Version:** 1.0

**Document Type:** Architecture

**Owner:** Product Team

**Last Updated:** 2026-07-29

---

## Purpose

This document defines the architectural principles that guide decision-making throughout the SNR project.

Architectural Principles are not implementation rules or technology choices.

They represent the fundamental beliefs that shape how the architecture evolves as the domain grows.

Whenever multiple architectural solutions are possible, these principles should guide the decision.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `README.md`
- `bounded-contexts.md`
- `domain-discoveries.md`
- `../02-domain/domain-concepts.md`
- `../02-domain/business-rules.md`
- `../02-domain/business-events.md`
- `../02-domain/business-workflows.md`

---

## Why Architectural Principles Matter

Architecture should evolve consistently over time.

Without shared principles, architectural decisions become subjective and gradually lose coherence.

Architectural Principles provide a stable foundation for making decisions independently of technologies, frameworks or implementation details.

They ensure that the software continues to reflect the domain as it evolves.

---

# Principle 01

## Reality Before Implementation

Business reality always takes precedence over implementation.

Technology exists to support the domain.

The domain must never be altered to accommodate technical limitations.

Implementation should adapt to reality.

Reality should never adapt to implementation.

---

# Principle 02

## The Professional Is the Centre of the Domain

Every business concept exists because it supports the Professional.

Clients, Projects, Deliverables, Technical Assets and Credentials are not independent goals.

They exist to help the Professional organise work, preserve knowledge and improve future decision-making.

Architectural decisions should always reinforce this perspective.

---

# Principle 03

## The Domain Leads the Architecture

Architecture should emerge from understanding the domain.

Business concepts are discovered before architectural boundaries.

Architectural boundaries are established before implementation begins.

Implementation follows architecture.

Architecture follows the domain.

---

# Principle 04

## Responsibilities Before Structures

Architectural boundaries exist to protect business responsibilities.

They are not created to group similar entities or implementation components.

New structures should only emerge when the domain reveals a new independent responsibility.

---

# Principle 05

## Knowledge Is an Outcome

Professional Knowledge is not an isolated business responsibility.

It emerges naturally from organising Clients, Projects, Deliverables, Technical Assets and Credentials throughout the Professional's work.

The purpose of SNR is to preserve this knowledge rather than manage it as an independent concept.

---

# Principle 06

## References Before Ownership

Architectural boundaries collaborate through references rather than shared ownership.

Each Bounded Context remains responsible for its own business concepts.

Information may be referenced across Contexts when required, but ownership must remain clear and consistent.

---

# Principle 07

## Simplicity Over Speculation

Architecture should reflect the domain as it exists today.

Future possibilities should not justify additional complexity.

New architectural structures should only be introduced when supported by real business discovery.

The domain should grow naturally.

The architecture should grow with it.

---

# Principle 08

## Documentation Justifies Implementation

Every significant implementation decision should be traceable to a documented business or architectural decision.

Documentation explains why the software exists.

Implementation explains how it operates.

Code should be the consequence of documented understanding rather than the source of architectural decisions.

---

# Principle 09

## Discover Before Deciding

Architectural decisions should emerge through domain discovery.

Understanding precedes design.

Design precedes implementation.

This process ensures that architectural decisions are based on business understanding rather than assumptions.

---

## Applying These Principles

Architectural Principles should be consulted whenever significant design decisions are made.

If multiple solutions appear valid, the solution that best respects these principles should be preferred.

When a principle no longer reflects the reality of the domain, the domain should be re-evaluated before the principle is changed.

---

## Guiding Principle

Architecture should preserve understanding before it preserves structure.

---

> **Reality Before Implementation.**