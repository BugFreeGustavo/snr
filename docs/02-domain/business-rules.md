# Business Rules

**Status:** Accepted

**Version:** 1.0

**Document Type:** Domain

**Owner:** Product Team

**Last Updated:** 2026-07-29

---

## Purpose

This document defines the business rules that govern the SNR domain.

Business Rules describe constraints, relationships and behaviours that exist independently of software implementation.

Their purpose is to preserve consistency, protect professional knowledge and ensure that software accurately reflects business reality.

Business Rules describe reality.

Software validates them.

Software does not create them.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `README.md`
- `domain-concepts.md`
- `business-events.md`
- `business-workflows.md`
- `ubiquitous-language.md`
- `glossary.md`

---

## Why Business Rules Matter

Professional work follows predictable patterns and constraints.

Projects belong to Clients.

Deliverables belong to Projects.

Professional resources exist independently of Projects.

Historical knowledge accumulates over time.

These rules exist regardless of how software is implemented.

Their purpose is to ensure that the domain remains internally consistent and faithfully represents professional reality.

---

## Rule Categories

Business Rules are organised into the following categories:

- Relationship Rules
- Lifecycle Rules
- Professional Resource Rules
- Knowledge Preservation Rules
- Planning Rules

---

# Relationship Rules

### BR-001

A Project must always belong to exactly one Client.

---

### BR-002

A Deliverable must always belong to exactly one Project.

---

### BR-003

A Dependency cannot exist independently of a Project.

---

### BR-004

A Milestone must always belong to exactly one Project.

---

### BR-005

A Client relationship may span multiple Projects over time.

---

### BR-006

A Deliverable may reference one or more Dependencies.

---

### BR-007

Business relationships must remain explicit and understandable.

---

# Lifecycle Rules

### BR-010

Projects may evolve through different business states during their lifecycle.

---

### BR-011

Projects placed On Hold may become Active again.

---

### BR-012

Archived Projects remain part of the Professional's historical knowledge.

---

### BR-013

Deliverables may undergo multiple revisions before approval.

---

### BR-014

Dependencies may appear and disappear throughout a Project.

---

### BR-015

Business Events permanently record significant business changes.

---

### BR-016

Historical Business Events must not be altered once they have been recorded.

---

# Professional Resource Rules

### BR-020

Technical Assets belong to the Professional rather than individual Projects.

---

### BR-021

Technical Assets may support multiple Projects simultaneously.

---

### BR-022

Projects reference Technical Assets whenever they are required.

---

### BR-023

Credentials belong to the Professional rather than individual Projects.

---

### BR-024

Credentials may support multiple Projects simultaneously.

---

### BR-025

Credentials may provide access to Technical Assets, Client environments and external services.

---

### BR-026

Professional resources exist independently of any individual Project.

---

### BR-027

The same Professional resource may be reused across unrelated Clients and Projects.

---

# Knowledge Preservation Rules

### BR-030

Historical knowledge must never be intentionally discarded.

---

### BR-031

Completed Projects remain valuable sources of professional knowledge.

---

### BR-032

Commercial history forms part of professional knowledge.

---

### BR-033

Past Deliverables contribute to future planning and estimation.

---

### BR-034

Past Dependencies improve future risk assessment.

---

### BR-035

Lessons learned should remain accessible after Project completion.

---

### BR-036

Business knowledge increases with every completed professional engagement.

---

# Planning Rules

### BR-040

Professional work may depend on external information before progress can continue.

---

### BR-041

Dependencies may influence planning, scheduling and delivery expectations.

---

### BR-042

A Project may contain multiple Deliverables.

---

### BR-043

Multiple Projects may be active at the same time.

---

### BR-044

Professional resources may be shared across multiple Projects.

---

### BR-045

Deliverables represent business commitments rather than technical tasks.

---

### BR-046

Planning should minimise uncertainty by making Dependencies visible.

---

## Cross-Rule Observations

Business Rules preserve the integrity of the SNR domain.

Relationship Rules define how concepts are connected.

Lifecycle Rules describe how concepts evolve.

Professional Resource Rules define ownership and reuse.

Knowledge Preservation Rules protect accumulated experience.

Planning Rules improve predictability and reduce uncertainty.

Together, these rules ensure that implementation remains aligned with professional reality.

---

## Business Rules Describe Reality

Business Rules exist independently of software.

Implementation enforces them.

Technology may change.

Business reality should not.

---

## Guiding Principle

Reality Before Implementation.

> Business Rules describe reality.
>
> Software validates them.
>
> Software does not create them.