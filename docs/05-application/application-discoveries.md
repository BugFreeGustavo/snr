# Application Discoveries

**Status:** Accepted

**Version:** 1.0

**Document Type:** Discovery

**Owner:** Product & Engineering

**Last Updated:** 2026-07-31

---

## Purpose

This document captures the key discoveries that define how the Professional interacts with SNR.

Rather than describing implementation details or user interface behaviour, these discoveries explain why the application exists, how it supports the Professional throughout the client relationship and the principles that emerge from observing real professional work.

These discoveries provide the foundation for the Application layer and guide future implementation decisions.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `../01-product/vision.md`
- `../01-product/principles.md`
- `../02-domain/domain-concepts.md`
- `../02-domain/business-workflows.md`
- `../03-architecture/architectural-principles.md`
- `../04-solution/capabilities.md`

---

# Discovery 001

## Professionals Use SNR to Support Decisions, Not to Record Information

### Observation

Professionals do not interact with SNR to record administrative information.

They use SNR when they need confidence to make a professional decision.

Whether evaluating a new opportunity, reviewing an existing agreement, tracking project progress or concluding a project, the Professional first seeks the context required to make an informed decision.

Recording information is a consequence of professional work, not the primary purpose of the interaction.

### Outcome

The application should prioritise presenting relevant context before requesting administrative input, ensuring that preserved knowledge supports future professional decisions.

### Traceability

**Product Principle**

- Experience Over Information

**Solution Capability**

- Recover Professional Context

**Application Principle**

- Principle 01 – Decisions Before Actions

---

# Discovery 002

## Context Precedes Every Professional Decision

### Observation

Before making a professional decision, the Professional first recovers the available context.

For existing Clients, this includes previous projects, commercial history, established workflows and accumulated knowledge.

For new Clients, the Professional relies on experience to ask the right questions and establish the initial context that will support future work.

Professional decisions are made using the best context available at that moment.

### Outcome

The application should make existing context immediately available whenever a Professional prepares to make a decision, while allowing new knowledge to be captured naturally when no previous context exists.

### Traceability

**Product Principle**

- Preserve Context

**Solution Capability**

- Recover Professional Context

**Application Principle**

- Principle 02 – Context Before Input

---

# Discovery 003

## Professional Decisions Always Belong to the Professional

### Observation

SNR does not make professional decisions on behalf of the Professional.

Instead, it preserves and presents the knowledge required for the Professional to evaluate each situation with confidence.

Whether deciding to accept a Project, renegotiate an agreement or conclude a professional relationship, responsibility for the decision always remains with the Professional.

### Outcome

The application should support professional judgement by providing relevant context without attempting to automate or replace professional decision-making.

### Traceability

**Product Principle**

- Support, Don't Dictate

**Solution Capability**

- Support Commercial Decisions

**Application Principle**

- Principle 03 – Professionals Make the Decisions

---

# Discovery 004

## Professional Work Naturally Creates Knowledge

### Observation

Professional knowledge is not created through dedicated documentation activities.

It emerges naturally while the Professional performs everyday work, such as discussing requirements, negotiating agreements, delivering work or concluding Projects.

Capturing this knowledge should require as little additional effort as possible, allowing the Professional to remain focused on creative and commercial work.

### Outcome

The application should capture reusable knowledge as a natural consequence of professional interactions rather than introducing administrative tasks whose sole purpose is maintaining the system.

### Traceability

**Product Principle**

- Reduce Friction

**Solution Capability**

- Preserve Reusable Knowledge

**Application Principle**

- Principle 04 – Knowledge Should Be Captured Naturally

---

# Discovery 005

## Reused Knowledge Increases Professional Confidence

### Observation

Knowledge becomes more valuable each time it is reused.

Every previous Client, Project, agreement and outcome contributes to the Professional's confidence when approaching similar situations in the future.

The value of SNR grows over time because preserved knowledge continuously reduces the effort required to understand new opportunities and ongoing work.

### Outcome

The application should prioritise making reusable knowledge easy to discover and access whenever it can support a professional decision.

### Traceability

**Product Principle**

- Knowledge Compounds

**Solution Capability**

- Preserve Reusable Knowledge

**Application Principle**

- Principle 05 – Reusable Knowledge Is the Primary Asset

---

## Cross-Discovery Observations

The discoveries reveal a consistent behavioural pattern.

The Professional interacts with SNR to recover context before making a decision. Professional work naturally generates knowledge, which is preserved by the application and reused to support future decisions with greater confidence.

The application therefore exists to reduce the effort required to make professional decisions by ensuring that previously acquired knowledge is available whenever it is needed.

---

## Guiding Principle

> **The application exists to support professional decisions by delivering the right context at the right moment, allowing knowledge from previous work to continuously improve future professional judgement.**