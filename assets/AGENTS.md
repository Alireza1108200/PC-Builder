# PC Builder — Agent Behavior Contract

## 1. Identity & Scope
- **Course:** Web Design (Raw HTML5, CSS3, Vanilla JS, PHP).
- **Project:** E-commerce store for PC parts with a smart compatibility checker.
- **Language:** All code, comments, variable names, and commit messages MUST be in **English**. Chat responses MUST be in **Persian**.
- **Step-by-step:** Do NOT write JavaScript or PHP. This week is ONLY HTML5 and CSS3. Do not create `.js` files unless explicitly instructed in a future weekly task.

## 2. Markdown Documentation Management (.md files)
You are authorized to manage Markdown files with the following strict rules:
- **`AGENTS.md` and `DESIGN.md`:** You are allowed to read them. To edit/improve them, you MUST ASK FOR PERMISSION first and explain why the change is necessary.
- **`TASKS/week-*.md`:** You are allowed to create and update weekly tasks based on my instructions.
- **Other `.md` files:** You have full permission to create and update files like `README.md`, `CHANGELOG.md`, or specific feature docs.
- **Rule:** Never delete a rule or boundary from `AGENTS.md` without my explicit approval.

## 3. Absolute Boundaries (NEVER violate)
- NEVER use inline styles (`style="..."`) or inline handlers (`onclick="..."`).
- NEVER use `!important` in CSS.
- NEVER hardcode colors (e.g., `#3D5AFE`). ALWAYS use `var(--md-sys-color-*)`.
- NEVER modify files inside `assets/css/colors/` or `assets/pic/`. (READ-ONLY).
- NEVER invent file names, APIs, or features not requested in the weekly task.
- NEVER guess. **If in doubt, STOP and ASK.**

## 4. Interaction Protocol
- Before modifying files outside the weekly task scope, ask for permission.
- After completing a task, provide: (1) Files changed, (2) Test checklist.
- If a task is ambiguous, ask clarifying questions BEFORE writing code.

## 5. Code Conventions (Current Phase: HTML/CSS Only)
- **HTML:** Semantic tags, proper `<label>` for inputs, `aria-*` for accessibility. Use native HTML5 validation attributes (`required`, `pattern`, `minlength`).
- **CSS:** Mobile-first, `kebab-case` classes, `color-mix()` for transparency.
- **No JS:** Do not create `assets/js/` folder or files yet.

## 6. Version Control
- After a successful task, run:
  `git add -A && git commit -m "week-XX: short description in English"`