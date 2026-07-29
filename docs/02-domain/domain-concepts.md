# Domain Concepts

**Status:** Accepted

**Version:** 1.0

**Document Type:** Domain

**Owner:** Product Team

**Last Updated:** 2026-07-29

---

## Purpose

This document defines the fundamental concepts that exist within the SNR domain.

Rather than describing technical structures or implementation details, it identifies the business concepts that independent professionals interact with throughout their work.

These concepts form the conceptual foundation of the product and represent the language shared between business and software.

Every future capability, architectural decision and implementation should originate from these concepts.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `README.md`
- `ubiquitous-language.md`
- `business-workflows.md`
- `business-events.md`
- `business-rules.md`
- `glossary.md`

---

## Why Domain Concepts Matter

Software should model reality rather than replace it.

Before designing databases, APIs or user interfaces, it is essential to understand the concepts that naturally exist within the freelancer's professional world.

A concept exists because it has business meaning, not because the software requires it.

The purpose of this document is to define those concepts independently of any implementation.

---

## Domain Philosophy

The SNR domain is centred around professional relationships rather than isolated records.

Projects organise work.

Clients create opportunities.

Deliverables represent commitments.

Dependencies introduce uncertainty.

Milestones measure progress.

Technical Assets enable execution.

Credentials provide access.

Together, these concepts preserve professional knowledge accumulated throughout a freelancer's career.

---

# Core Concepts

The following concepts represent the core of the SNR domain.

Every future capability should build upon these concepts rather than introducing new ones unnecessarily.

---

# Client

## Purpose

A Client represents the individual or organisation that requests professional work.

The relationship with a Client often extends beyond a single project and becomes an important source of historical knowledge.

---

## Responsibilities

A Client:

- commissions professional work;
- defines business objectives;
- establishes commercial relationships;
- participates in approvals and feedback;
- creates future business opportunities.

---

## Relationships

A Client:

- owns one or more Projects;
- may define multiple Contacts;
- accumulates commercial history;
- generates long-term professional knowledge.

---

## Lifecycle

A Client relationship evolves continuously.

Projects may begin and end, but the Client relationship usually persists.

Historical information should remain available even when no active projects exist.

---

## Business Knowledge

Examples include:

- pricing history;
- preferred communication style;
- approval behaviour;
- invoicing information;
- recurring business opportunities;
- long-term collaboration history.

---

# Project

## Purpose

A Project represents a professional engagement performed for a Client.

It provides the organisational context in which work is planned, executed and remembered.

Projects exist to organise professional work while preserving the knowledge generated throughout their lifecycle.

---

## Responsibilities

A Project:

- defines the scope of work;
- groups Deliverables;
- records operational history;
- captures commercial context;
- preserves accumulated knowledge.

---

## Relationships

A Project:

- belongs to one Client;
- contains one or more Deliverables;
- may contain Milestones;
- may contain Dependencies;
- may require Credentials;
- may require Technical Assets.

---

## Lifecycle

Projects typically evolve through the following business states:

- Planned
- Active
- On Hold
- Archived

Projects are archived rather than completed because their historical knowledge remains valuable.

---

## Business Knowledge

Examples include:

- project timeline;
- pricing history;
- client expectations;
- delivery cadence;
- lessons learned;
- technical decisions;
- reusable experience.

---

# Deliverable

## Purpose

A Deliverable represents a business commitment made to the Client.

It describes work that produces measurable value rather than individual technical tasks.

---

## Responsibilities

A Deliverable:

- defines expected outcomes;
- communicates progress;
- supports approvals;
- records delivery history.

---

## Relationships

A Deliverable:

- belongs to one Project;
- may depend on other Deliverables;
- may generate Business Events;
- contributes to Project progress.

---

## Lifecycle

Deliverables evolve independently according to the freelancer's workflow.

They may be planned, in progress, awaiting review, revised, delivered or archived.

The exact progression is intentionally flexible.

---

## Business Knowledge

Examples include:

- delivery frequency;
- approval history;
- revision patterns;
- turnaround times;
- recurring delivery expectations.

---

# Dependency

## Purpose

A Dependency represents work or information required before progress can continue.

Dependencies explain why work cannot always proceed immediately.

---

## Responsibilities

A Dependency:

- identifies external constraints;
- explains blocked work;
- documents waiting periods;
- improves planning visibility.

---

## Relationships

A Dependency:

- belongs to a Project;
- may affect multiple Deliverables;
- may originate from Clients or third parties.

---

## Lifecycle

Dependencies appear and disappear throughout a project's lifetime.

Resolving one dependency may expose another.

---

## Business Knowledge

Examples include:

- recurring bottlenecks;
- approval delays;
- supplier responsiveness;
- production scheduling patterns.

---

# Milestone

## Purpose

A Milestone represents a significant business achievement within a Project.

Unlike Deliverables, Milestones measure progress rather than output.

---

## Responsibilities

A Milestone:

- marks important achievements;
- improves planning visibility;
- communicates project progression.

---

## Relationships

A Milestone:

- belongs to one Project;
- may reference multiple Deliverables;
- contributes to Project history.

---

## Lifecycle

Milestones are reached as work progresses.

Once achieved, they become permanent historical records.

---

## Business Knowledge

Examples include:

- production phases;
- internal review points;
- release schedules;
- major approvals.

---

# Technical Asset

## Purpose

A Technical Asset represents a professional resource owned or managed by the Professional.

It exists independently of any individual Project and may support one or many professional engagements throughout its lifetime.

---

## Responsibilities

A Technical Asset:

- enables professional work;
- represents software, services, equipment or subscriptions;
- exists independently of Projects;
- may be reused across multiple Projects;
- contributes to professional readiness.

---

## Relationships

A Technical Asset:

- belongs to one Professional;
- may support multiple Projects;
- may require one or more Credentials;
- may be referenced by Projects when required.

---

## Lifecycle

Technical Assets evolve independently of Projects.

Licences may expire.

Subscriptions may renew.

Software versions change.

Hardware is replaced.

Throughout their lifecycle, Technical Assets continue to support different professional engagements.

---

## Business Knowledge

Examples include:

- software licences;
- plugin collections;
- cloud subscriptions;
- development tools;
- production hardware;
- reusable professional resources.

---

# Credential

## Purpose

A Credential represents secure access owned or managed by the Professional.

Credentials exist independently of Projects and may be reused across multiple professional engagements.

---

## Responsibilities

A Credential:

- grants authorised access;
- documents external services;
- reduces administrative friction.

---

## Relationships

A Credential:

- belongs to one Professional;
- may support multiple Projects;
- may provide access to Technical Assets;
- may be referenced whenever professional work requires authentication.

---

## Lifecycle

Credentials change over time.

Passwords rotate.

Permissions evolve.

Access may be revoked.

Historical audit information remains valuable.

---

## Business Knowledge

Examples include:

- service ownership;
- access history;
- credential usage;
- authentication methods.

---

## Cross-Concept Observations

Although each concept fulfils a distinct responsibility, together they describe a single professional ecosystem.

Clients create opportunities.

Projects organise engagements.

Deliverables represent commitments.

Dependencies explain uncertainty.

Milestones measure progress.

Technical Assets enable execution.

Credentials provide secure access.

The relationships between these concepts are more important than the concepts themselves.

---

## Concepts Before Structures

Business concepts exist independently of software.

Implementation should adapt to the domain rather than forcing the domain to adapt to technical constraints.

Every technical structure introduced into SNR should represent an existing business concept.

---

## Guiding Principle

Reality Before Implementation.

> Great software models business concepts.
>
> Great products preserve professional knowledge.