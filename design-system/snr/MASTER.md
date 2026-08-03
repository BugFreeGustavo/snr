# Design System Master File

> **LOGIC:** When building a specific page, first check `design-system/pages/[page-name].md`.
> If that file exists, its rules **override** this Master file.
> If not, strictly follow the rules below.

---

**Project:** SNR
**Generated:** 2026-08-03 22:39:31
**Category:** Magazine/Blog

---

## Customization Note

**Revision 2 (2026-08-03):** the light "Swiss Modernism" version below read as generic/dated to the user. Replaced with a dark, layered surface system matched from the tool's **"Modern Dark (Cinema Mobile)"** style (`styles.csv` — Linear/Vercel/Raycast-class aesthetic: layered near-blacks, hairline `rgba(255,255,255,0.08)` borders, glassmorphism, no pure `#000000` to avoid OLED smear, `border-radius: 16px`, `Inter`). Structure kept; accent swapped from that style's stock indigo (`#5E6AD2`) to the warm "spotlight gold" (`#F5A524`, tuned from the earlier Theater/Cinema `#CA8A04` match for visibility on near-black) — the deliberate film/TV nod, used for CTAs, active nav state, focus rings, and a soft glow on primary actions. Headings use **Calistoga** for an editorial/premium feel; body/forms stay on **Inter** for legibility. Layout moved from top nav to a persistent left sidebar with inline SVG icons (Heroicons outline), matching current (2025/2026) SaaS dashboard convention.

*(Revision 1 — light Swiss Modernism + navy/gold — is left below for history; superseded.)*

### Color Palette

| Role | Hex | CSS Variable | Utility prefix |
|------|-----|--------------|-----------------|
| Deep background (page) | `#020203` | `--color-deep` | `bg-deep` |
| Base surface (sidebar) | `#0A0A0C` | `--color-base` | `bg-base` |
| Elevated surface (cards, inputs) | `#131316` | `--color-elevated` | `bg-elevated` |
| Foreground (text) | `#EDEDEF` | `--color-foreground` | `text-foreground` |
| Foreground muted | `#8A8F98` | `--color-foreground-muted` | `text-foreground-muted` |
| Accent/CTA (spotlight gold) | `#F5A524` | `--color-accent` | `bg-accent` / `text-accent` |
| On Accent | `#1A1006` | `--color-on-accent` | `text-on-accent` |
| Destructive | `#F87171` | `--color-destructive` | `text-destructive` |
| Ring (focus) | `#F5A524` | `--color-ring` | `ring-ring` |

Borders use Tailwind's built-in `white/8` opacity utility (`border-white/8`) rather than a dedicated token — no need to name what's already expressible.

**Color Notes:** Layered near-black (never pure `#000000`) + spotlight gold accent, used sparingly. See Customization Note above.

### Typography

- **Heading/Display Font:** Calistoga
- **Body Font:** Inter
- **Mood:** editorial, premium, warm (headings) + neutral, functional, legible (body)
- **Google Fonts:** [Calistoga + Inter](https://fonts.googleapis.com/css2?family=Calistoga&family=Inter:wght@300;400;500;600;700&display=swap)

**CSS Import:**
```css
@import url('https://fonts.googleapis.com/css2?family=Calistoga&family=Inter:wght@300;400;500;600;700&display=swap');
```

### Spacing Variables

| Token | Value | Usage |
|-------|-------|-------|
| `--space-xs` | `4px` / `0.25rem` | Tight gaps |
| `--space-sm` | `8px` / `0.5rem` | Icon gaps, inline spacing |
| `--space-md` | `16px` / `1rem` | Standard padding |
| `--space-lg` | `24px` / `1.5rem` | Section padding |
| `--space-xl` | `32px` / `2rem` | Large gaps |
| `--space-2xl` | `48px` / `3rem` | Section margins |
| `--space-3xl` | `64px` / `4rem` | Hero padding |

### Shadow Depths

| Level | Value | Usage |
|-------|-------|-------|
| `--shadow-sm` | `0 1px 2px rgba(0,0,0,0.05)` | Subtle lift |
| `--shadow-md` | `0 4px 6px rgba(0,0,0,0.1)` | Cards, buttons |
| `--shadow-lg` | `0 10px 15px rgba(0,0,0,0.1)` | Modals, dropdowns |
| `--shadow-xl` | `0 20px 25px rgba(0,0,0,0.15)` | Hero images, featured cards |

---

## Component Specs

### Buttons

```css
/* Primary Button */
.btn-primary {
  background: #CA8A04;
  color: #0F172A;
  padding: 12px 24px;
  border-radius: 8px;
  font-weight: 600;
  transition: all 200ms ease;
  cursor: pointer;
}

.btn-primary:hover {
  opacity: 0.9;
  transform: translateY(-1px);
}

/* Secondary Button */
.btn-secondary {
  background: transparent;
  color: #0F172A;
  border: 2px solid #0F172A;
  padding: 12px 24px;
  border-radius: 8px;
  font-weight: 600;
  transition: all 200ms ease;
  cursor: pointer;
}
```

### Cards

```css
.card {
  background: #F8FAFC;
  border-radius: 12px;
  padding: 24px;
  box-shadow: var(--shadow-md);
  transition: all 200ms ease;
  cursor: pointer;
}

.card:hover {
  box-shadow: var(--shadow-lg);
  transform: translateY(-2px);
}
```

### Inputs

```css
.input {
  padding: 12px 16px;
  border: 1px solid #E2E8F0;
  border-radius: 8px;
  font-size: 16px;
  transition: border-color 200ms ease;
}

.input:focus {
  border-color: #CA8A04;
  outline: none;
  box-shadow: 0 0 0 3px #CA8A0433;
}
```

### Modals

```css
.modal-overlay {
  background: rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(4px);
}

.modal {
  background: white;
  border-radius: 16px;
  padding: 32px;
  box-shadow: var(--shadow-xl);
  max-width: 500px;
  width: 90%;
}
```

---

## Style Guidelines

**Style:** Swiss Modernism 2.0

**Keywords:** Grid system, Helvetica, modular, asymmetric, international style, rational, clean, mathematical spacing

**Best For:** Corporate sites, architecture, editorial, SaaS, museums, professional services, documentation

**Key Effects:** display: grid, grid-template-columns: repeat(12 1fr), gap: 1rem, mathematical ratios, clear hierarchy

### Page Pattern

**Pattern Name:** Real-Time / Operations Landing

- **Conversion Strategy:** For ops/security/iot products. Demo or sandbox link. Trust signals.
- **CTA Placement:** Primary CTA in nav + After metrics
- **Section Order:** 1. Hero (product + live preview or status), 2. Key metrics/indicators, 3. How it works, 4. CTA (Start trial / Contact)

---

## Anti-Patterns (Do NOT Use)

- ❌ Poor typography
- ❌ Slow loading

### Additional Forbidden Patterns

- ❌ **Emojis as icons** — Use SVG icons (Heroicons, Lucide, Simple Icons)
- ❌ **Missing cursor:pointer** — All clickable elements must have cursor:pointer
- ❌ **Layout-shifting hovers** — Avoid scale transforms that shift layout
- ❌ **Low contrast text** — Maintain 4.5:1 minimum contrast ratio
- ❌ **Instant state changes** — Always use transitions (150-300ms)
- ❌ **Invisible focus states** — Focus states must be visible for a11y

---

## Pre-Delivery Checklist

Before delivering any UI code, verify:

- [ ] No emojis used as icons (use SVG instead)
- [ ] All icons from consistent icon set (Heroicons/Lucide)
- [ ] `cursor-pointer` on all clickable elements
- [ ] Hover states with smooth transitions (150-300ms)
- [ ] Light mode: text contrast 4.5:1 minimum
- [ ] Focus states visible for keyboard navigation
- [ ] `prefers-reduced-motion` respected
- [ ] Responsive: 375px, 768px, 1024px, 1440px
- [ ] No content hidden behind fixed navbars
- [ ] No horizontal scroll on mobile
