# Product Principles

**Status:** Accepted

**Version:** 1.0

**Document Type:** Strategy

**Owner:** Product Team

**Last Updated:** 2026-07-28

---

## Purpose

This document defines the principles that guide product decisions throughout the lifetime of SNR.

Principles exist to support decision-making.

Whenever multiple implementation options are available, these principles should be used to evaluate which solution best aligns with the long-term vision of the product.

Unlike features or implementation details, product principles are expected to remain stable over time.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `README.md`
- `vision.md`
- `positioning.md`

---

## Core Principle

Every completed project should make the next project easier.

Every product decision should contribute towards preserving operational experience and reducing unnecessary administrative effort.

If a proposed feature does not strengthen this objective, its value should be questioned.

---

## Product Principles

### Experience Over Information

SNR exists to preserve experience, not simply to store information.

Information becomes valuable when it can improve future decisions.

The product should always prioritise knowledge that helps users work more effectively over collecting additional data.

---

### Project First

Projects represent the central unit of work.

Clients, deliverables, assets, credentials and dependencies all exist because a project exists.

The domain model should therefore be organised around projects rather than around administrative entities.

---

### Preserve Context

Information without context quickly loses its value.

Relationships between entities are often more important than the entities themselves.

The product should always preserve the operational context in which information was created.

---

### Simplicity Over Features

Every new feature introduces complexity.

Complexity should only be accepted when it creates meaningful value.

The simplest solution capable of solving the problem should always be preferred.

---

### Support, Don't Dictate

Freelancers work in different ways.

SNR should provide structure without imposing a fixed methodology.

The product should support different workflows rather than enforcing a single "correct" way of working.

---

### Knowledge Compounds

The value of SNR should increase over time.

Each completed project should enrich the user's operational knowledge and improve future work.

Historical information should become progressively more useful rather than simply accumulating.

---

### Integrate Rather Than Replace

SNR is not designed to replace specialised software.

Where appropriate, the product should integrate with existing tools instead of duplicating their capabilities.

Focus creates better products than feature accumulation.

---

### Documentation Before Implementation

Understanding the problem always precedes implementing the solution.

Business knowledge should be documented before domain modelling.

Domain modelling should precede software architecture.

Architecture should precede implementation.

---

### Consistency Creates Trust

Users should never need to guess how the product behaves.

Terminology, workflows, navigation and interactions should remain consistent throughout the application.

Consistency reduces cognitive effort and increases confidence.

---

### Decisions Must Be Intentional

Every feature, workflow and interface should exist for a clearly defined reason.

Convenience is not sufficient justification for adding complexity.

If a decision cannot be explained, it should be reconsidered.

---

## Decision Framework

Whenever a significant product decision is made, it should be evaluated against the following questions:

1. Does this preserve operational experience?
2. Does this reduce administrative friction?
3. Does this preserve context?
4. Does this maintain product simplicity?
5. Does this strengthen the project as the central domain entity?
6. Does this respect different freelancer workflows?

If the answer to most of these questions is "no", the proposal should be reconsidered.

---

## Closing Statement

The purpose of these principles is not to restrict creativity.

Their purpose is to ensure that every decision contributes towards the same long-term vision.

Products become coherent when decisions are guided by consistent principles rather than individual preferences.

---

> **Great products are shaped by consistent decisions, not isolated features.**
