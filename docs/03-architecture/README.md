# Architecture

**Status:** Accepted

**Version:** 1.0

**Document Type:** Architecture

**Owner:** Product Team

**Last Updated:** 2026-07-29

---

## Purpose

This section documents the strategic architectural decisions that shape SNR.

Unlike the Domain documentation, which describes business reality, the Architecture documentation explains how that reality is organised into independent architectural responsibilities.

The goal is not to describe implementation, but to explain the architectural thinking that guides future technical decisions.

---

## Philosophy

The architecture exists to protect the domain.

Business understanding comes first.

Architectural decisions exist to preserve that understanding as the software evolves.

Every document in this section explains **why** architectural decisions were made before describing **what** they are.

---

## Contents

### Domain Discoveries

Documents the discoveries that emerged while exploring the business domain and explains how they influenced the architecture.

- `domain-discoveries.md`

---

### Architectural Principles

Defines the architectural principles that guide design decisions throughout the system.

- `architectural-principles.md`

---

### Bounded Contexts

Defines the architectural responsibilities that partition the domain into independent areas of responsibility.

- `bounded-contexts.md`

---

## Deferred Documentation

The following documents have been intentionally deferred until the architecture requires them.

### Context Map

Will document the relationships between Bounded Contexts once inter-context communication becomes sufficiently complex.

- `context-map.md`

---

## Relationship with the Domain

The Domain documentation explains **what exists**.

The Architecture documentation explains **how those responsibilities are organised**.

Implementation decisions should always be traceable back through Architecture to the Domain.

```
Implementation
      ↑
Architecture
      ↑
Domain
```

Every implementation decision should ultimately be justified by the business domain.

---

## Guiding Principle

Reality Before Implementation.

> Good architecture protects good domain understanding.