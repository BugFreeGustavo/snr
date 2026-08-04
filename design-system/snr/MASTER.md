# Design System Master File

> **LOGIC:** When building a specific page, first check `design-system/pages/[page-name].md`.
> If that file exists, its rules **override** this Master file.
> If not, strictly follow the rules below.

---

**Project:** SNR
**Generated:** 2026-08-03 22:39:31
**Last revised:** 2026-08-03 (Revision 3)

---

## Customization Note

**Revision 3 (2026-08-03) — current, authoritative.** Superseded by a real product brief: `uxui-direction.md` (repo root, gitignored — local planning doc, not part of version control). That document is now the source of truth for SNR's visual language; this file translates it into concrete tokens. Explicit rejections in the brief: no dark-mode drama, no gradients without strong reason, no "dashboard-obsessed" or "futuristic" feel, no generic SaaS blue/purple. Palette derived from the brief's own named references — charcoal, warm off-white, stone, muted sage, restrained amber, subtle terracotta. Typography collapsed to a single family (Plus Jakarta Sans) with hierarchy by weight/size, per the brief's "sans-serif with personality, not decorative" instruction — no second display face. Reviewed with the user via an artifact mockup before implementation (brief's own §23 process) and confirmed.

**Revision 2** (dark, near-black, spotlight-gold, Calistoga/Inter, Linear/Vercel-style sidebar) and **Revision 1** (light Swiss Modernism, navy/green) are both superseded — kept out of this file for length; see git history on this file if needed.

### Color Palette

Named exactly as in `uxui-direction.md` §5.

| Role | Hex | CSS Variable | Utility prefix |
|------|-----|--------------|-----------------|
| Background | `#FAF7F2` (warm off-white) | `--color-background` | `bg-background` |
| Surface | `#FFFFFF` | `--color-surface` | `bg-surface` |
| Surface elevated | `#F3EEE6` (stone) | `--color-surface-elevated` | `bg-surface-elevated` |
| Text primary | `#2A2724` (charcoal) | `--color-text-primary` | `text-text-primary` |
| Text secondary | `#5C554C` | `--color-text-secondary` | `text-text-secondary` |
| Text muted | `#8C8377` | `--color-text-muted` | `text-text-muted` |
| Border | `#E4DDD1` | `--color-border` | `border-border` |
| Accent | `#B8863B` (restrained amber) | `--color-accent` | `bg-accent` / `text-accent` |
| Accent hover | `#A3752F` | `--color-accent-hover` | `bg-accent-hover` |
| Success | `#6B8F5C` (muted sage) | `--color-success` | `text-success` / `bg-success` |
| Warning | `#B7952E` (ochre) | `--color-warning` | `text-warning` / `bg-warning` |
| Danger | `#B65C45` (subtle terracotta) | `--color-danger` | `text-danger` / `bg-danger` |
| Info | `#7B8A94` (stone-blue) | `--color-info` | `text-info` / `bg-info` |

Button/accent text uses `text-text-primary` directly (charcoal on amber has better contrast than white on amber) — no separate `on-accent` token needed.

**Naming choice:** token names mirror the brief's own vocabulary verbatim (`text-primary`, `text-secondary`, `text-muted`) even though this produces stuttering utility classes (`text-text-primary`). Traceability back to the brief a developer can grep for was judged more valuable than avoiding the stutter.

### Typography

- **Font:** Plus Jakarta Sans — single family, all weights (400/500/600/700). No second display face.
- **Mood:** modern, professional, slightly more character than Inter without becoming decorative.
- **Hierarchy:** via weight and size only — e.g. `text-2xl font-bold` for page headings, `font-semibold` for section headings, `font-medium` for labels, regular weight for body.
- **Google Fonts:** [Plus Jakarta Sans](https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap)
- Loaded via `laravel-vite-plugin/fonts` (`bunny()`, see `vite.config.js`), not a `@import` in CSS.

### Spacing, radii, shadows

Use Tailwind's default scale directly (`p-4`, `p-6`, `rounded-md`, `rounded-lg`, `rounded-xl`) — the brief calls for restraint, not a bespoke scale. No custom `--space-*`/`--shadow-*` tokens; introducing them without a real need contradicted the brief's own §21 ("prefer the simplest technology that satisfies the UX requirements").

---

## Style Guidelines (from `uxui-direction.md`)

- Calm, intelligent, understated, professional, human, slightly editorial. Not corporate, not gamified, not dashboard-obsessed.
- Avoid: gradients (unless a very strong reason exists), decorative UI, excessive cards/badges, visual noise.
- Layout principle: **Context → Relevant knowledge → Decision → Action → Knowledge captured** — not Menu → Form → Submit → Database.
- Navigation stays visually quiet; the main content area gets the visual attention, not the chrome.
- Forms show only what the Professional needs now; defer the rest.
- Errors are human and actionable, never technical (no stack traces, no `SQLSTATE`).

---

## Pre-Delivery Checklist

Before delivering any UI code, verify:

- [ ] No emojis used as icons (use inline SVG)
- [ ] `cursor-pointer` on all clickable elements
- [ ] Hover states with smooth transitions (150–300ms)
- [ ] Text contrast 4.5:1 minimum
- [ ] Focus states visible for keyboard navigation
- [ ] `prefers-reduced-motion` respected
- [ ] No gradients without a specific, strong reason
- [ ] Screen communicates context before asking for input
