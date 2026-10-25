# Week 01 — Forms & Theme

## Scope (ONLY these files)
- `contact.html`
- `login.html`
- `register.html`
- `assets/css/style.css` (create or extend)
- `assets/css/colors.css` (create)

## Requirements
1. **Theme (CSS only):** Configure light/dark mode using CSS `@media (prefers-color-scheme: dark)`. Do NOT use JavaScript. Ensure all colors use `var(--md-sys-color-*)`.
2. **Contact Page:** Full name, Phone (`09[0-9]{9}`), Email, Subject (`<select>`), Message (min 20 chars). Use native HTML5 validation (`required`, `pattern`, `minlength`). No JS.
3. **Login Page:** Email/Phone, Password (min 8). Use native HTML5 validation.
4. **Register Page:** First/Last name, Email, Phone, Password, Confirm Password. Use native validation.
5. **Logo:** Use inline SVG with `fill="var(--md-sys-color-primary-container)"`.
6. **Layout:** Use CSS Grid/Flexbox for a clean, modern layout. Follow `DESIGN.md`.

## Constraints
- Raw HTML/CSS only.
- No `.js` files. No inline CSS. No hardcoded colors.
- All comments in English.