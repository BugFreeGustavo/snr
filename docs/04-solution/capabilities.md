# Capabilities

**Status:** Accepted

**Version:** 1.0

**Document Type:** Solution

**Owner:** Product Team

**Last Updated:** 2026-07-30

---

## Purpose

This document defines the capabilities that SNR provides to the Professional.

A capability describes something the Professional must be able to achieve through the product.

Capabilities are independent of technology, user interface and implementation.

They express the value that SNR delivers by enabling the Professional to make better decisions, reduce administrative effort and preserve reusable professional knowledge.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `README.md`
- `../02-domain/ubiquitous-language.md`
- `../02-domain/domain-concepts.md`
- `../02-domain/business-rules.md`
- `../03-architecture/bounded-contexts.md`
- `../03-architecture/architectural-principles.md`

---

## Why Capabilities Matter

Business concepts describe reality.

Architecture organises responsibilities.

Capabilities describe the value that the Professional receives from the product.

They bridge the gap between domain understanding and future implementation without introducing technical decisions.

Every capability should exist because it solves a recurring professional problem.

---

## Capability Principles

Every capability documented in SNR follows the same principles.

- A capability describes an outcome rather than an action.
- A capability exists to support the Professional.
- A capability improves a professional decision or reduces cognitive effort.
- A capability remains valid regardless of implementation or technology.
- A capability builds upon existing domain concepts rather than introducing new ones.

Capabilities describe what the Professional can achieve.

They never describe how the software achieves it.

---

# Core Capabilities

The following capabilities represent the current understanding of the value that SNR provides.

As the product evolves, additional capabilities may be introduced when they represent genuinely new professional outcomes.

---

# Preserve Professional Relationships

## Purpose

Enable the Professional to preserve the commercial, operational and historical context of every Client relationship.

---

## Business Value

Professional relationships often span multiple Projects.

Preserving their history reduces uncertainty, strengthens future collaborations and prevents the Professional from repeatedly rediscovering previously acquired knowledge.

---

## Professional Decision Improved

- Should I work with this Client again?
- What do I already know about this relationship?

---

## Related Domain Elements

- Professional
- Client
- Project

---

# Recover Professional Context

## Purpose

Enable the Professional to quickly recover the knowledge accumulated from previous professional engagements.

---

## Business Value

Before beginning a new Project, the Professional should be able to understand previous experiences, decisions and outcomes without searching across multiple external systems.

---

## Professional Decision Improved

- What happened the last time I worked with this Client?
- What should I remember before starting again?

---

## Related Domain Elements

- Client
- Project
- Business Events
- Historical Knowledge

---

# Support Commercial Decisions

## Purpose

Enable the Professional to make informed commercial decisions using previous experience.

---

## Business Value

Past Projects provide valuable context for pricing, estimation and negotiation.

Rather than starting from zero, the Professional builds upon accumulated knowledge.

---

## Professional Decision Improved

- How much should I charge?
- Is this opportunity worth accepting?
- How long is this likely to take?

---

## Related Domain Elements

- Client
- Project
- Deliverable

---

# Preserve Professional Resources

## Purpose

Enable the Professional to preserve reusable resources required throughout professional work.

---

## Business Value

Credentials, Technical Assets and administrative information should remain accessible independently of individual Projects.

Their preservation reduces operational friction and supports future engagements.

---

## Professional Decision Improved

- What resources do I need before work begins?
- Do I already have everything required?

---

## Related Domain Elements

- Credential
- Technical Asset
- Client

---

# Preserve Reusable Knowledge

## Purpose

Enable the Professional to preserve knowledge considered valuable for future work.

The Professional determines what knowledge is worth preserving.

---

## Business Value

Knowledge accumulated during one Project should remain available whenever similar situations arise in the future.

SNR preserves knowledge.

The Professional determines its value.

---

## Professional Decision Improved

- Have I encountered this situation before?
- What did I learn from previous experience?

---

## Related Domain Elements

- Historical Knowledge
- Project
- Business Events

---

## Cross-Capability Observations

Although each capability addresses a different aspect of professional work, together they fulfil a single objective.

The Professional should never have to rediscover knowledge that already exists.

Every capability contributes to reducing cognitive effort, preserving professional experience and improving future decision-making.

The capabilities define the value delivered by SNR rather than the functionality implemented by the software.

---

## Capabilities Before Features

Capabilities describe professional outcomes independently of implementation.

Features are one possible way of realising those capabilities within the product.

As the solution evolves, individual features may change while the underlying capabilities remain stable.

---

## Guiding Principle

Knowledge should improve the next decision.

> The Professional should never have to rediscover knowledge that already exists.