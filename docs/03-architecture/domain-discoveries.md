# Domain Discoveries

**Status:** Accepted

**Version:** 1.0

**Document Type:** Architecture

**Owner:** Product Team

**Last Updated:** 2026-07-29

---

## Purpose

This document records the significant discoveries made while understanding the SNR domain.

Unlike the Domain documentation, which describes the current understanding of business reality, this document explains how that understanding emerged.

Each Discovery captures an observation that fundamentally changed the way the domain was modelled.

The purpose of this document is not to document decisions, but to preserve the reasoning that led to them.

As the domain evolves, new Discoveries may emerge.

Existing Discoveries should remain as historical records of the evolution of understanding.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `README.md`
- `../02-domain/README.md`
- `../02-domain/domain-concepts.md`
- `../02-domain/business-rules.md`
- `../02-domain/business-events.md`
- `../02-domain/business-workflows.md`
- `../02-domain/glossary.md`

---

## Why Domain Discoveries Matter

Understanding a domain is an iterative process.

Business concepts rarely emerge fully formed.

Instead, they are gradually discovered through observation, discussion and validation against real-world situations.

Capturing these discoveries preserves the reasoning behind the domain model and provides historical context for future architectural and implementation decisions.

Architecture should evolve from understanding.

Understanding should evolve from reality.

---

## Discovery Principles

Every Discovery follows the same principles.

- A Discovery is based on observed business reality.
- A Discovery is supported by real-world evidence.
- A Discovery explains a change in understanding.
- A Discovery may affect multiple domain documents.
- Accepted Discoveries become part of the historical evolution of the domain.

A Discovery records what the domain taught us.

It does not record implementation decisions.

---

# Discovery 001

## Title

The Professional is the centre of the domain.

---

## Observation

Projects initially appeared to be the central concept because professional work is commonly organised around Projects.

Further analysis revealed that many important business concepts exist independently of any individual Project.

---

## Evidence

Examples include:

- A Professional uses the same software across multiple Projects.
- A Professional reuses the same Credentials across different Clients.
- Client relationships often continue across many Projects.
- Professional Knowledge accumulates throughout an entire career rather than within a single Project.

---

## Discovery

The Professional is the central actor of the SNR domain.

Projects organise professional work.

They do not define the Professional's operational world.

---

## Impact

This Discovery reshaped the understanding of the domain and required updates to:

- Ubiquitous Language
- Domain Concepts
- Business Rules
- Business Events
- Business Workflows
- Glossary

---

# Discovery 002

## Title

Professional Resources exist independently of Projects.

---

## Observation

Professional resources are acquired, maintained and reused independently of individual Projects.

Their lifecycle is not determined by the Projects they support.

---

## Evidence

Examples include:

- A Pro Tools subscription is used across multiple audio productions.
- A GitHub account supports many software Projects.
- An Adobe Creative Cloud subscription is reused for different Clients.
- Development tools remain available after Projects have ended.

---

## Discovery

Technical Assets and Credentials belong to the Professional rather than to individual Projects.

Projects reference Professional Resources whenever they are required.

---

## Impact

This Discovery introduced the distinction between Professional Resources and Project Resources and required updates to:

- Domain Concepts
- Business Rules
- Business Events
- Glossary

---

# Discovery 003

## Title

Professional Knowledge is a business asset.

---

## Observation

Every completed engagement leaves behind knowledge that improves future professional work.

This accumulated knowledge often becomes more valuable than the individual Project itself.

---

## Evidence

Examples include:

- Previous pricing improves future quotations.
- Client preferences reduce future communication.
- Historical Dependencies improve planning.
- Past Deliverables improve estimation.
- Lessons learned reduce uncertainty in future Projects.

---

## Discovery

Professional Knowledge is itself a valuable business asset.

Preserving knowledge is therefore a core responsibility of the SNR domain rather than a secondary benefit.

---

## Impact

This Discovery influenced the design of:

- Domain Concepts
- Business Workflows
- Business Rules
- Business Events

---

# Discovery 004

## Title

Projects organise work rather than define the Professional's world.

---

## Observation

Projects provide organisational boundaries for professional engagements.

However, many important aspects of professional life extend beyond the lifetime of any individual Project.

---

## Evidence

Examples include:

- Client relationships continue across Projects.
- Technical Assets support multiple Projects.
- Credentials remain valid after Projects end.
- Professional Knowledge grows continuously throughout a career.

---

## Discovery

Projects are organisational contexts.

The Professional remains the constant element throughout the domain.

---

## Impact

This Discovery reinforced the overall structure of the domain and validated the relationships between its core concepts.

---

## Evolution

The understanding of the domain is expected to evolve over time.

Future Discoveries should only be recorded when repeated observation reveals new business truths that significantly influence the domain model.

Accepted Discoveries should not be rewritten.

New understanding should be captured through additional Discoveries, preserving the historical evolution of the domain.

---

## Guiding Principle

Great domains are discovered, not invented.

---

> **Reality Before Implementation.**