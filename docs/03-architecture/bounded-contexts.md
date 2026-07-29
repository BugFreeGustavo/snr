# Bounded Contexts

**Status:** Accepted

**Version:** 1.0

**Document Type:** Architecture

**Owner:** Product Team

**Last Updated:** 2026-07-29

---

## Purpose

This document defines the Bounded Contexts that structure the SNR architecture.

Rather than grouping entities or implementation modules, Bounded Contexts organise the domain according to business responsibilities.

Their purpose is to establish clear ownership boundaries, protect business consistency and guide future architectural decisions.

Every architectural component introduced into SNR should belong to one Bounded Context.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `README.md`
- `domain-discoveries.md`
- `context-map.md`
- `../02-domain/domain-concepts.md`
- `../02-domain/business-rules.md`
- `../02-domain/business-events.md`
- `../02-domain/business-workflows.md`

---

## Why Bounded Contexts Matter

A software system grows by introducing new responsibilities.

Without clear boundaries, responsibilities become mixed, language becomes inconsistent and implementation complexity increases.

Bounded Contexts prevent this by assigning each business responsibility a clearly defined architectural boundary.

The purpose of a Bounded Context is not to group similar data.

Its purpose is to protect a single business responsibility.

---

## Context Discovery Principles

The SNR Bounded Contexts were discovered by observing how independent Professionals organise their work.

They were not derived from entities, database structures or implementation concerns.

A new Bounded Context should only emerge when the domain reveals a new independent business responsibility.

New features or new domain concepts do not automatically justify new Bounded Contexts.

---

# Professional Operations

## Responsibility

Professional Operations is responsible for organising professional engagements.

It captures the business activities performed while working with Clients, delivering Projects and fulfilling professional commitments.

---

## Domain Concepts

This Context is responsible for the following domain concepts:

- Client
- Project
- Deliverable
- Dependency
- Milestone

---

## Business Responsibility

Professional Operations answers the following business question:

> **What professional work is being organised and performed?**

---

## Knowledge Produced

As professional work progresses, this Context naturally produces knowledge about:

- client relationships;
- project history;
- delivery patterns;
- recurring dependencies;
- business milestones.

The knowledge produced remains part of the Professional's accumulated experience rather than becoming a separate business responsibility.

---

# Professional Resources

## Responsibility

Professional Resources is responsible for maintaining the Professional's operational capability.

It manages the resources required to perform professional work independently of any individual Project.

---

## Domain Concepts

This Context is responsible for the following domain concepts:

- Technical Asset
- Credential

---

## Business Responsibility

Professional Resources answers the following business question:

> **What enables the Professional to perform professional work?**

---

## Knowledge Produced

As professional resources evolve, this Context naturally produces knowledge about:

- software and service usage;
- authentication resources;
- operational readiness;
- reusable professional resources.

The knowledge produced contributes to future professional work without becoming an independent business responsibility.

---

## Architectural Principles

The following principles govern every Bounded Context within SNR.

- A Bounded Context owns one business responsibility.
- A Bounded Context protects its own language.
- Domain Concepts belong to one primary Bounded Context.
- Business responsibilities define architectural boundaries.
- Architectural boundaries should remain stable as implementation evolves.

---

## What Is Not a Bounded Context

Some concepts intentionally remain outside the architectural boundaries defined in this document.

### Professional Knowledge

Professional Knowledge is not a Bounded Context.

It is the natural outcome of business activity across multiple Contexts.

Knowledge emerges from professional work rather than owning an independent business responsibility.

---

### Planning

Planning is not a Bounded Context.

Planning belongs to the Professional's personal workflow.

SNR preserves the information that supports planning without prescribing how planning should be performed.

---

## Evolution

The current architecture contains only the Bounded Contexts required by the domain as it is understood today.

Additional Bounded Contexts should only be introduced when the domain reveals a new independent business responsibility.

Architectural evolution should always follow domain discovery rather than implementation convenience.

---

## Guiding Principle

Architecture organises responsibilities.

The domain determines where those responsibilities begin and end.

---

> **Reality Before Implementation.**