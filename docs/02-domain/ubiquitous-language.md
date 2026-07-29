# Ubiquitous Language

**Status:** Accepted

**Version:** 1.0

**Document Type:** Domain

**Owner:** Product Team

**Last Updated:** 2026-07-29

---

## Purpose

This document defines the official language of the SNR domain.

Every business concept described throughout the product, documentation and software must use the terminology established here.

A shared language reduces ambiguity, improves communication and ensures that product decisions are based on consistent business concepts rather than personal interpretations.

This language is shared by everyone involved in the product, including product owners, developers, designers and future contributors.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `README.md`
- `business-workflows.md`
- `business-events.md`
- `domain-concepts.md`
- `business-rules.md`
- `glossary.md`

---

## Why a Ubiquitous Language?

Independent professionals naturally develop their own vocabulary.

Some people speak about "jobs".

Others call them "projects".

Some refer to "deliveries".

Others use "episodes", "tasks", "assignments" or "milestones".

While these terms may appear interchangeable, they often describe different business concepts.

SNR establishes a single, unambiguous vocabulary.

Once a concept receives a name, that name becomes the only accepted term throughout the product.

The software adapts to the language of the business.

The business does not adapt to the language of the software.

---

## Core Domain Concepts

The following concepts form the foundation of the SNR domain.

### Professional

A Professional is the individual whose professional work, knowledge and reusable resources are managed by SNR.

The Professional owns Clients, Projects, Technical Assets, Credentials and accumulated business knowledge.

---

### Client

A Client is the organisation or individual that hires the Professional.

Clients establish professional relationships that often span multiple independent projects over time.

A Client owns projects but does not define how work is performed.

Examples include:

- Television broadcasters
- Production companies
- Marketing agencies
- Software companies
- Private customers

---

### Project

A Project represents a professional engagement performed for a Client.

It provides organisational context for all operational knowledge generated while delivering work.

Projects may reappear over time under new editions or seasons while remaining recognisable as the same business initiative.

Examples include:

- Got Talent 2025
- Got Talent 2026
- Company Website
- Mobile Application
- Feature Film

Projects are organisational containers rather than isolated deliveries.

---

### Deliverable

A Deliverable is a concrete piece of work expected by the Client.

It represents something that can be planned, worked on and delivered.

A Project may contain one or many Deliverables.

Examples include:

- Episode 01
- Episode 02
- Homepage
- Login Feature
- Monthly Maintenance
- Final Mix

Deliverables represent commitments rather than internal tasks.

---

### Dependency

A Dependency represents something outside the Professional's control that influences the ability to complete work.

Dependencies help explain why progress may be delayed.

Examples include:

- Waiting for source materials
- Waiting for client feedback
- Waiting for another contributor
- Waiting for approvals
- Waiting for external assets

Dependencies describe operational constraints rather than personal productivity.

---

### Milestone

A Milestone represents a significant point in the lifecycle of a Project.

Milestones may reference one or more Deliverables as evidence of progress.

Examples include:

- Materials received
- Work started
- Internal review completed
- Client approval received
- Final delivery completed

Milestones provide historical context for future projects.

---

### Technical Asset

A Technical Asset is any resource required to perform professional work.

Without the necessary Technical Assets, work may become impossible or significantly impaired.

Examples include:

- Software licences
- Hardware
- Plugins
- Cloud services
- Local project files
- Shared storage

Technical Assets describe operational capability rather than ownership.

---

### Credential

A Credential grants authorised access to an external service, platform or resource.

Credentials exist to ensure that the Professional can access the tools and information required to perform work.

Examples include:

- Login credentials
- API keys
- VPN access
- Cloud storage accounts
- Production servers
- FTP accounts

Credentials are operational resources and must remain secure.

---

## Language Rules

The following conventions apply throughout the SNR documentation.

- One business concept has one official name.
- The same concept should never appear under different names.
- Technical terminology must never replace business terminology.
- Business language always takes precedence over implementation language.
- New concepts must be introduced here before becoming part of the domain.

---

## Evolution

The Ubiquitous Language is expected to evolve alongside the product.

New concepts may be introduced as the domain grows.

Existing concepts should only change when the understanding of the business itself changes.

Changes in technology should never require changes to the domain language.

---

## Guiding Principle

Clear language produces clear software.

When the business language becomes ambiguous, software complexity inevitably increases.

---

> **Reality Before Implementation.**