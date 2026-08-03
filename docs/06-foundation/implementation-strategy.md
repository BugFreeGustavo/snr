# Implementation Strategy

**Status:** Draft

**Version:** 1.0

**Document Type:** Strategy

**Owner:** Engineering

**Last Updated:** 2026-08-03

---

## Purpose

This document defines the implementation strategy for SNR.

The previous documentation establishes the product vision, domain model, architecture, solution capabilities and application behaviour. This document explains how those decisions will be translated into a maintainable Laravel codebase.

Its purpose is not to redefine the system, but to provide implementation guidelines that preserve the integrity of the documented architecture while allowing the application to evolve through incremental development.

---

## Related Documentation

- `../../README.md`
- `../../MANIFESTO.md`
- `../01-product/README.md`
- `../02-domain/README.md`
- `../03-architecture/README.md`
- `../04-solution/README.md`
- `../05-application/README.md`

---

# Strategy 01 — The Domain Drives the Codebase

## Strategy

The implementation should reflect the domain model rather than the structure of the framework.

The organisation of the Laravel application should preserve the language, responsibilities and boundaries established throughout the previous waves.

Framework conventions should support that organisation rather than determine it.

## Rationale

The documented domain represents the most stable part of SNR.

Frameworks, libraries and implementation techniques will evolve over time, but the concepts that describe the Professional's world should remain consistent.

By allowing the domain to drive the organisation of the codebase, implementation decisions become easier to understand, maintain and extend without introducing technical structures that obscure the business model.

## Traceability

**Derived From**

- Architecture — Architectural Principle 03 (The Domain Leads the Architecture)
- Architecture — Bounded Contexts

## Implications

- The codebase should be organised around the documented Bounded Contexts.
- Domain terminology should be preserved throughout the implementation.
- Classes should express business responsibilities before technical responsibilities.
- Laravel conventions should be adopted whenever they reinforce the documented architecture.
- Technical abstractions should support the domain rather than define it.
- New functionality should extend the existing domain model before introducing new technical structures.

---

# Strategy 02 — Build the Core Before the Edges

## Strategy

Implementation should begin with the core domain and progressively expand towards supporting capabilities.

The first iterations of SNR should establish the concepts that define the Professional's world before expanding into supporting functionality.

## Rationale

The core domain represents the foundation upon which every other capability depends.

Professional relationships, Projects, Deliverables and accumulated knowledge provide the context required for future functionality. Implementing these concepts first creates a stable foundation that reduces rework and allows later features to integrate naturally with the existing model.

This approach allows every implementation increment to build upon an increasingly complete domain model while continuously strengthening the application's foundation.

## Traceability

**Derived From**

- Domain — Domain Concepts (Professional, Client, Project, Deliverable)
- Solution — Capabilities

## Implications

- The implementation roadmap should prioritise the core domain before supporting features.
- New functionality should build upon previously implemented concepts rather than introduce parallel models.
- Infrastructure concerns should emerge from the needs of the domain instead of driving its design.
- Features that depend on established knowledge should be implemented only after the underlying knowledge model exists.
- Supporting capabilities should extend the core domain rather than compete with it.

---

# Strategy 03 — Deliver Complete Increments

## Strategy

Each implementation increment should deliver a complete and usable piece of functionality.

An increment should include every layer required for the capability to be usable in practice, including the domain model, application logic, infrastructure, presentation and automated tests where applicable.

## Rationale

Incomplete implementations create technical debt and make it difficult to validate whether the documented model actually supports real professional work.

Delivering complete increments allows implementation decisions to be validated continuously while keeping the application usable throughout development.

Each completed increment also becomes a stable foundation for subsequent work, reducing integration effort and simplifying future changes.

## Traceability

**Derived From**

- Solution — Capabilities
- Application — Application Principles

## Implications

- Every increment should be functional from end to end.
- Domain, application, infrastructure and presentation concerns should evolve together.
- Automated tests should accompany every completed increment.
- New increments should integrate with existing functionality instead of leaving unfinished technical layers.
- The application should remain in a functional and testable state after every completed increment.

---

# Strategy 04 — Prefer Simplicity Over Abstraction

## Strategy

Implementation should favour the simplest solution that satisfies the current requirements while preserving the integrity of the documented architecture.

Technical abstractions should emerge only when they solve demonstrated problems or enable meaningful improvements to the implementation.

## Rationale

SNR is being developed incrementally.

Introducing architectural patterns, generic abstractions or extension points before they are required increases cognitive complexity without delivering immediate value.

By allowing complexity to emerge naturally from real implementation needs, the codebase remains easier to understand, maintain and evolve while preserving the flexibility to introduce additional abstractions when they become justified.

## Traceability

**Derived From**

- Product — Product Principle (Simplicity Over Features)
- Architecture — Architectural Principle 07 (Simplicity Over Speculation)

## Implications

- Existing framework capabilities should be preferred before introducing custom abstractions.
- New architectural patterns should be introduced only when they solve recurring implementation problems.
- Generalisation should follow proven repetition rather than anticipated future needs.
- Code should be optimised for clarity and maintainability before flexibility.
- Every abstraction should solve an existing problem rather than anticipate a future one.

---

# Strategy 05 — Documentation Follows Discovery

## Strategy

Implementation should lead the evolution of the documentation.

Documentation should be updated when implementation reveals new knowledge about the domain, architecture or application behaviour, ensuring that it remains an accurate reflection of the system rather than a prediction of future development.

## Rationale

The first five documentation waves established the conceptual foundation of SNR.

From this point onwards, implementation becomes the primary source of discovery. Maintaining the documentation as a reflection of validated implementation decisions preserves its accuracy while avoiding unnecessary design speculation.

## Traceability

**Derived From**

- Product — Product Principle (Documentation Before Implementation)
- Architecture — Domain Discoveries

## Implications

- Documentation should evolve alongside implementation rather than ahead of it.
- New discoveries should be documented only after they have been validated through implementation.
- Documentation updates should clarify implementation decisions rather than predict future ones.
- The documented architecture should remain the reference point for implementation unless a validated discovery requires it to evolve.

---

## Implementation Roadmap

Implementation should progress by establishing the application's foundation before incrementally introducing the capabilities that depend upon it.

Each phase should build upon the previous one, ensuring that new functionality extends an already stable and validated foundation.

| Phase | Objective |
|--------|-----------|
| Foundation | Establish the project's development workflow, testing strategy and architectural structure. |
| Authentication | Allow the Professional to securely access the application. |
| Professional Workspace | Implement the Professional as the central actor of the system and establish the personal workspace from which all business activities are managed. |
| Client Management | Allow the Professional to create, manage and build long-term knowledge about Clients. |
| Project Management | Introduce Projects and their relationship with Clients, providing the foundation for professional work. |
| Deliverable Management | Implement Deliverables, Milestones and Dependencies to support project execution. |
| Knowledge Preservation | Capture and surface reusable knowledge generated throughout professional work. |
| Commercial Management | Support the commercial activities that emerge from professional relationships and completed Projects. |
| Resource Management | Introduce Technical Assets, Credentials and supporting operational resources. |

---

## Guiding Principle

> **Every implementation decision should preserve the integrity of the documented domain while allowing the application to evolve through simple, complete and continuously validated increments.**