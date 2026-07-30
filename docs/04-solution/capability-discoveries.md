# Capability Discoveries

**Status:** Accepted

**Version:** 1.0

**Document Type:** Solution

**Owner:** Product Team

**Last Updated:** 2026-07-30

---

## Purpose

This document records the discoveries that led to the capabilities defined within the SNR solution.

Rather than introducing new business concepts or implementation details, these discoveries explain how the Professional derives value from the product.

Each discovery represents an observation about professional work that influenced the design of the solution.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `README.md`
- `capabilities.md`
- `../02-domain/domain-concepts.md`
- `../02-domain/business-workflows.md`
- `../03-architecture/domain-discoveries.md`
- `../03-architecture/bounded-contexts.md`

---

## Why Capability Discoveries Matter

Capabilities should not originate from assumptions or implementation preferences.

They should emerge from observing how Professionals work, what problems they repeatedly encounter and how accumulated knowledge influences future decisions.

This document preserves the reasoning behind those capabilities.

---

# Discovery 001

## Professional Knowledge Exists to Improve Future Decisions

### Observation

Professionals do not preserve information simply to remember the past.

They preserve knowledge because it helps them make better decisions when similar situations arise in the future.

### Outcome

Capabilities should improve future decision-making rather than simply storing information.

---

# Discovery 002

## Professional Relationships Outlive Individual Projects

### Observation

Projects begin and end.

Professional relationships often continue for years.

The value accumulated throughout those relationships should remain available whenever new opportunities emerge.

### Outcome

Capabilities should preserve the continuity of professional relationships rather than treating every Project as an isolated engagement.

---

# Discovery 003

## Recovering Context Precedes Starting Work

### Observation

When a new opportunity arises, the Professional first attempts to recover previous context.

Only after understanding the existing relationship does planning or execution begin.

### Outcome

The solution should prioritise recovering professional context before supporting operational work.

---

# Discovery 004

## Reusable Knowledge Is More Valuable Than Isolated Information

### Observation

Passwords, contacts, pricing history, delivery preferences and technical resources only become valuable when understood within their professional context.

Information without context provides limited value.

### Outcome

Capabilities should preserve contextual knowledge rather than isolated records.

---

# Discovery 005

## The Professional Determines What Knowledge Is Worth Preserving

### Observation

Only the Professional can decide which experiences, observations and practices deserve to become reusable knowledge.

The software should preserve that knowledge without attempting to determine its importance.

### Outcome

The solution supports knowledge preservation.

The Professional determines its value.

---

# Discovery 006

## Reducing Cognitive Effort Creates Professional Value

### Observation

Professionals repeatedly spend time searching for information they have already discovered.

Reducing the need to rediscover existing knowledge saves time, improves consistency and supports better decision-making.

### Outcome

Every capability should reduce cognitive effort or improve a professional decision.

---

# Discovery 007

## Administrative Knowledge Supports Professional Work

### Observation

Administrative information is often viewed as a necessary burden rather than valuable professional knowledge.

However, preserving commercial agreements, credentials, invoicing information and operational details allows the Professional to focus on delivering value instead of repeatedly handling administrative tasks.

### Outcome

The solution should reduce administrative friction while preserving the information required to support future engagements.

---

# Discovery 008

## Commercial Experience Improves Future Decisions

### Observation

Before accepting a new Project, Professionals often rely on previous commercial experience with the same Client.

Past pricing, project scope, delivery effort and previous commercial outcomes provide valuable context for estimating future work and evaluating new opportunities.

Commercial knowledge accumulates over time and should remain available whenever the Professional engages with the Client again.

### Outcome

The solution should preserve commercial knowledge so that future commercial decisions are informed by previous professional experience.

---

## Cross-Discovery Observations

Together, these discoveries explain why SNR exists.

The product does not simply organise professional work.

It preserves reusable knowledge so that Professionals can make better decisions, reduce cognitive effort and strengthen long-term professional relationships.

The capabilities defined within the solution are direct consequences of these discoveries.

---

## Discoveries Before Capabilities

Capabilities should emerge from observed professional behaviour.

They should never originate from interface design, implementation constraints or technology choices.

Every capability introduced into SNR should be justifiable through one or more documented discoveries.

---

## Guiding Principle

Knowledge creates value when it improves future decisions.

> The Professional should never have to rediscover knowledge that already exists.