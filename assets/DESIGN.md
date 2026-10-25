# PC Builder — Design System

## 1. Color Tokens
Source: `assets/css/colors/` (Material Theme Builder output). DO NOT EDIT.

- Primary: `var(--md-sys-color-primary)`
- On Primary: `var(--md-sys-color-on-primary)`
- Surface: `var(--md-sys-color-surface)`
- On Surface: `var(--md-sys-color-on-surface)`
- Outline: `var(--md-sys-color-outline)`
- Error: `var(--md-sys-color-error)`

**Rule:** No hardcoded hex/rgb in component CSS.

## 2. Shape & Spacing
- Corners: `--md-sys-shape-corner-md` (12px), `--md-sys-shape-corner-xl` (28px)
- Spacing: Base unit 4px (use multiples: 8, 12, 16, 24, 32).

## 3. Typography
- Font: Vazirmatn (Google Fonts).
- Base: 15px / line-height 1.9.
- Direction: RTL (`<html lang="fa" dir="rtl">`).

## 4. Anti-Patterns (NEVER do)
- Hardcoded colors, `!important`, inline styles.
- `<div>` with click handler instead of `<button>`.
- Missing `<label>`.
- Importing external CSS/JS libraries.