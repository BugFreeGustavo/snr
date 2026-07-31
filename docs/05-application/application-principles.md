# Application Principles

**Status:** Accepted

**Version:** 1.0

**Document Type:** Principles

**Owner:** Product & Engineering

**Last Updated:** 2026-07-31

---

## Purpose

This document defines the principles that guide how the SNR application should behave.

Derived from the Application Discoveries, these principles ensure that implementation decisions remain aligned with the Professional's way of working and the product's purpose of supporting professional decisions through preserved knowledge.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `application-discoveries.md`
- `../01-product/principles.md`
- `../02-domain/business-rules.md`
- `../03-architecture/architectural-principles.md`
- `../04-solution/solution-principles.md`

---

# Principle 01

## Decisions Before Actions

### Statement

Application interactions should be designed to support professional decisions rather than simply perform administrative actions.

### Rationale

The Professional uses SNR to understand a situation before acting upon it.

Every interaction should therefore provide the context required to make an informed decision instead of focusing solely on creating, editing or managing data.

### Derived From

- Discovery 001 – *Professionals Use SNR to Support Decisions, Not to Record Information*

### Implications

- Interactions should begin by presenting relevant context.
- Administrative actions should support professional decisions, not become the primary objective.
- The application should reflect how Professionals think rather than how data is stored.

---

# Principle 02

## Context Before Input

### Statement

Relevant context should be presented before requesting information from the Professional.

### Rationale

Professionals make better decisions when previous knowledge is immediately available.

Recovering existing context before capturing new information reduces cognitive effort and encourages consistent professional decisions.

### Derived From

- Discovery 002 – *Context Precedes Every Professional Decision*

### Implications

- Existing knowledge should be surfaced before new information is requested.
- Previously established relationships, agreements and project history should be easily accessible.
- Data entry should extend existing knowledge rather than recreate it.

---

# Principle 03

## Professionals Make the Decisions

### Statement

The application should support professional judgement without replacing it.

### Rationale

SNR exists to preserve and present knowledge, allowing the Professional to evaluate each situation with confidence.

Business decisions, commercial negotiations and professional relationships remain the responsibility of the Professional.

### Derived From

- Discovery 003 – *Professional Decisions Always Belong to the Professional*

### Implications

- The application should provide relevant information without prescribing outcomes.
- Recommendations should never replace professional judgement.
- Automation should reduce administrative effort, not professional responsibility.

---

# Principle 04

## Knowledge Should Be Captured Naturally

### Statement

The application should capture professional knowledge as a natural consequence of work rather than through dedicated administrative activities.

### Rationale

Professionals create valuable knowledge while communicating with Clients, negotiating agreements, delivering Projects and resolving day-to-day situations.

Capturing that knowledge should require minimal additional effort, allowing the Professional to remain focused on productive work.

### Derived From

- Discovery 004 – *Professional Work Naturally Creates Knowledge*

### Implications

- Knowledge capture should be integrated into existing workflows.
- The application should minimise unnecessary administrative steps.
- Information entered once should become reusable professional knowledge whenever appropriate.

---

# Principle 05

## Reusable Knowledge Is the Primary Asset

### Statement

The application's primary value lies in making previously acquired knowledge reusable across future professional decisions.

### Rationale

Every completed interaction enriches the Professional's knowledge.

As that knowledge is preserved and reused, the Professional requires less effort to understand similar situations and can make decisions with greater confidence.

### Derived From

- Discovery 005 – *Reused Knowledge Increases Professional Confidence*

### Implications

- Reusable knowledge should be easy to discover.
- Previously captured information should be presented when it provides decision-making value.
- The application should continuously increase its value as professional knowledge grows.

---

## Cross-Principle Observations

The principles establish a consistent model for application behaviour.

Rather than centring interactions around data management, the application is organised around supporting professional decisions. Context is presented before action, professional judgement remains with the Professional, and knowledge is captured naturally as work is performed. As preserved knowledge grows, the application's value increases by continuously improving future decision-making.

---

## Guiding Principle

> **Every application interaction should reduce the effort required for the Professional to make confident decisions by delivering relevant context at the right moment while preserving knowledge for the future.**