# Business Events

**Status:** Accepted

**Version:** 1.1

**Document Type:** Domain

**Owner:** Product Team

**Last Updated:** 2026-07-29

---

## Purpose

This document defines the significant events that occur throughout a Professional's activities.

Business Events represent facts that have already happened within the domain.

They describe meaningful changes in business state rather than user actions, technical operations or implementation details.

Understanding these events allows SNR to preserve professional history, explain business behaviour and maintain a consistent understanding of how work evolves over time.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `README.md`
- `ubiquitous-language.md`
- `domain-concepts.md`
- `business-workflows.md`
- `business-rules.md`
- `glossary.md`

---

## Why Business Events Matter

Professional work evolves through meaningful business events.

A Client relationship begins.

A Project is planned.

Production material arrives.

A Deliverable is submitted.

Feedback is received.

Knowledge is accumulated.

Business Events describe these facts independently of any software implementation.

---

## Event Principles

Every Business Event follows the same principles.

- Events represent facts that have already occurred.
- Events describe business reality rather than software behaviour.
- Events are independent of user interface interactions.
- Events preserve professional history.
- Events contribute to organisational knowledge.

Business Events document what happened.

They never describe how the software performs an operation.

---

# Core Business Events

---

# Client Events

## Client Onboarded

### Description

A professional relationship has been established with a Client.

---

### Why It Happens

Both parties have agreed to begin working together.

---

### Business Impact

- Commercial history begins.
- Projects may now be created.
- Long-term knowledge starts accumulating.

---

### Related Concepts

- Client

---

# Project Events

## Project Planned

### Description

A professional engagement has been defined and prepared for execution.

---

### Why It Happens

Scope, expectations and commercial conditions have been agreed.

---

### Business Impact

- Planning becomes possible.
- Deliverables may be defined.
- Resources can be prepared.

---

### Related Concepts

- Project
- Client

---

## Project Activated

### Description

Professional work has officially started.

---

### Why It Happens

The required information and resources are available.

---

### Business Impact

- Active work begins.
- Deliverables become actionable.
- Dependencies may emerge.

---

### Related Concepts

- Project
- Deliverable

---

## Project Put On Hold

### Description

Professional work has temporarily stopped.

---

### Why It Happens

Examples include:

- awaiting Client feedback;
- missing production material;
- external dependencies;
- scheduling conflicts.

---

### Business Impact

- Progress pauses.
- Historical context is preserved.
- Work may resume later.

---

### Related Concepts

- Project
- Dependency

---

## Project Archived

### Description

Professional work is no longer expected to continue.

---

### Why It Happens

Examples include:

- work completed;
- project cancelled;
- long-term inactivity;
- commercial relationship concluded.

---

### Business Impact

- Historical knowledge is preserved.
- Commercial history remains available.
- Previous experience becomes reusable.

---

### Related Concepts

- Project
- Client

---

# Deliverable Events

## Deliverable Planned

### Description

A business commitment has been defined within the Project.

---

### Why It Happens

Expected outcomes have been agreed.

---

### Business Impact

- Work can be organised.
- Expectations become explicit.

---

### Related Concepts

- Deliverable
- Project

---

## Material Received

### Description

Required production material has become available.

---

### Why It Happens

Clients or third parties have supplied the necessary material.

---

### Business Impact

- Work may begin.
- Dependencies may be resolved.

---

### Related Concepts

- Deliverable
- Dependency

---

## Deliverable Submitted

### Description

Professional work has been delivered for review.

---

### Why It Happens

The expected outcome has been completed.

---

### Business Impact

- Review begins.
- Client feedback becomes possible.

---

### Related Concepts

- Deliverable

---

## Revision Requested

### Description

Additional work has been requested following a review.

---

### Why It Happens

The delivered work requires refinement.

---

### Business Impact

- New work is created.
- Delivery timelines may change.
- Professional knowledge increases.

---

### Related Concepts

- Deliverable
- Client

---

## Revision Completed

### Description

Requested changes have been implemented.

---

### Why It Happens

All requested revisions have been completed.

---

### Business Impact

- Review can continue.
- Delivery quality improves.

---

### Related Concepts

- Deliverable

---

## Deliverable Approved

### Description

The Client has accepted the Deliverable.

---

### Why It Happens

Business expectations have been satisfied.

---

### Business Impact

- Commitment fulfilled.
- Historical record completed.
- Project may progress or conclude.

---

### Related Concepts

- Deliverable
- Client

---

# Dependency Events

## Dependency Identified

### Description

A condition preventing progress has been discovered.

---

### Why It Happens

Required information, approvals or resources are unavailable.

---

### Business Impact

- Planning changes.
- Progress slows.
- Uncertainty increases.

---

### Related Concepts

- Dependency
- Project

---

## Dependency Resolved

### Description

The blocking condition has been removed.

---

### Why It Happens

Required information or resources have become available.

---

### Business Impact

- Work resumes.
- Planning confidence improves.

---

### Related Concepts

- Dependency
- Project

---

# Milestone Events

## Milestone Reached

### Description

A significant business objective has been achieved within a Project.

Milestones capture important moments in the progression of professional work rather than work itself.

---

### Why It Happens

Examples include:

- production materials received;
- production started;
- internal review completed;
- Client approval received;
- final delivery accepted.

---

### Business Impact

- Project progression becomes visible.
- Historical context is preserved.
- Future Projects benefit from accumulated knowledge.

---

### Related Concepts

- Milestone
- Project

---

# Technical Asset Events

## Technical Asset Acquired

### Description

The Professional has obtained a new Technical Asset.

This may include software, hardware, subscriptions, cloud services or professional tools.

---

### Why It Happens

Professional work requires additional resources.

---

### Business Impact

- Professional capability expands.
- Future Projects may reuse the asset.

---

### Related Concepts

- Technical Asset

---

## Technical Asset Updated

### Description

A Technical Asset has changed.

Examples include software updates, licence renewals or hardware replacements.

---

### Why It Happens

Professional resources evolve over time.

---

### Business Impact

- Professional readiness is maintained.
- Existing Projects may benefit.

---

### Related Concepts

- Technical Asset

---

## Technical Asset Retired

### Description

A Technical Asset is no longer available for professional use.

---

### Why It Happens

Examples include expired licences, obsolete hardware or discontinued services.

---

### Business Impact

- Future work may require alternatives.
- Historical records remain valuable.

---

### Related Concepts

- Technical Asset

---

# Credential Events

## Credential Created

### Description

A new professional Credential has been established.

It may provide access to software, cloud services or Client environments.

---

### Why It Happens

Professional work requires authenticated access.

---

### Business Impact

- New systems become accessible.
- Administrative readiness improves.

---

### Related Concepts

- Credential

---

## Credential Updated

### Description

A Credential has changed.

Examples include password rotations, permission updates or authentication method changes.

---

### Why It Happens

Security requirements evolve over time.

---

### Business Impact

- Secure access is maintained.
- Compliance improves.

---

### Related Concepts

- Credential

---

## Credential Revoked

### Description

Professional access has been permanently removed.

---

### Why It Happens

Projects end, permissions change or security policies require access removal.

---

### Business Impact

- Security posture improves.
- Historical access information is preserved.

---

### Related Concepts

- Credential

---

## Cross-Event Observations

Business Events describe how professional work evolves over time.

Client Onboarded begins a professional relationship.

Project Planned, Activated, Put On Hold and Archived trace a Project's lifecycle.

Material Received, Deliverable Submitted, Revision Requested, Revision Completed and Deliverable Approved trace how a commitment gets fulfilled.

Dependency Identified and Dependency Resolved explain why progress slows and resumes.

Milestone Reached marks progress without describing the work itself.

Technical Asset and Credential events keep the Professional ready to work.

Together, these events preserve the professional history of the Professional's career.

---

## Business Events Represent Facts

Business Events always describe facts that have already happened.

They never describe interface interactions, software operations or implementation details.

The software records these events.

The business creates them.

---

## Guiding Principle

Reality Before Implementation.

> Business Events describe what happened.
>
> Professional knowledge explains why it matters.