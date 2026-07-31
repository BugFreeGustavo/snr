# SNR

**Status:** Accepted

**Version:** 1.0

**Document Type:** Repository

**Owner:** Product Team

**Last Updated:** 2026-07-28

---

## Purpose

This repository contains the source code and documentation for **SNR** (Signal-to-Noise Ratio).

SNR is a software platform designed to help independent professionals preserve operational knowledge across client projects.

The project follows a **Documentation First** approach, where product strategy, domain knowledge and software architecture are established before implementation.

---

## Related Documentation

- `MANIFESTO.md`
- `docs/01-product/README.md`
- `docs/01-product/vision.md`
- `docs/01-product/principles.md`
- `docs/01-product/positioning.md`

---

## About SNR

Independent professionals complete projects.

Projects generate experience.

Unfortunately, that experience is often scattered across emails, spreadsheets, cloud storage, messaging applications and personal notes.

As time passes, valuable operational knowledge becomes increasingly difficult to recover.

SNR is designed to preserve that knowledge and make it available when it becomes valuable again.

The objective is simple:

> Every completed project should make the next project easier.

---

## Repository Structure

The repository is organised around the different disciplines involved in building the product.

```text
.
├── README.md
├── MANIFESTO.md
├── docs/
│   ├── 01-product/
│   ├── 02-domain/
│   ├── 03-architecture/
│   ├── 04-solution/
│   └── 05-application/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
└── tests/
```

Documentation is intentionally separated from implementation so that business understanding drives technical decisions.

---

## Documentation

The documentation is organised into five major areas.

| Section | Purpose |
|----------|---------|
| **Product** | Defines the identity, philosophy, vision and positioning of SNR. |
| **Domain** | Describes the business language, entities, workflows and business rules. |
| **Architecture** | Documents the strategic architectural decisions that organise the domain into responsibilities. |
| **Solution** | Defines the capabilities SNR must provide to deliver value to the Professional. |
| **Application** | Defines how the Professional experiences those capabilities through interactions. |

Each section contains its own `README.md`, providing an overview of its purpose and the documents it contains.

---

## Development Status

SNR is under active development.

The project follows a **Documentation First** approach, where product strategy, domain modelling and software architecture are established before implementation.

Project progress, planning and implementation milestones are maintained within the project documentation.

---

## Planned Technology Stack

The initial implementation is planned using:

- Laravel 12
- PHP 8.4
- MySQL
- Docker
- Tailwind CSS
- Livewire
- Alpine.js

The product documentation intentionally remains technology-independent whenever possible.

Technologies may evolve over time without changing the product vision or business domain.

---

## Project Roadmap

The development of SNR is organised into successive documentation and implementation waves.

Detailed planning, milestones and project progress are maintained within the project documentation rather than in this repository entry point.

---

> **Less noise. More signal.**
