# Week 5 : Internal Communication & Mentions

## Day 1: Comments Schema & Models

- [ ] Define `task_comments` table:
  - [ ] `id`, `task_id`, `user_id`, `content`, `created_at`, `updated_at`
- [ ] Define `TaskComment` model with relationships:
  - [ ] `task` → belongsTo(Task)
  - [ ] `author` → belongsTo(User)
- [ ] Update `Task` model:
  - [ ] `comments()` → hasMany(TaskComment)
- [ ] Prepare basic seeder for test comments

## Day 2: Markdown Editor Integration

- [ ] Reuse or extend existing Markdown field in Task detail
- [ ] Add new "Comments" section under task detail
- [ ] Render existing comments (Markdown parsed)
- [ ] Allow posting new comments via Inertia + form

## Day 3: Mention Parsing & Highlighting

- [ ] Write basic JS parser for `@username` patterns
- [ ] Auto-link usernames to user profile pages or filters
- [ ] Highlight valid mentions in preview/rendered Markdown
- [ ] Validate mentioned usernames on submit (optional)

## Day 4: Mention Logic & Storage (Optional for MVP)

- [ ] (Optional) Create `task_comment_mentions` table:
  - [ ] `comment_id`, `mentioned_user_id`
- [ ] (Optional) Store resolved mentions on comment creation
- [ ] (Optional) Add `mentions()` relationship on `TaskComment`

## Day 5: UX Polishing & Refactor

- [ ] Clean up comment submission UX
- [ ] Auto-scroll or focus on new comment after posting
- [ ] Minor frontend tweaks (date format, user avatar/initials)
- [ ] Add test coverage for comment relationships and creation

## Notes

- Mentions are **parsed client-side**, not enforced as hard constraints.
- No notifications yet — only visual parsing & future-proof data structure.
- Focus remains on **lightweight**, **internal-use**, **non-blocking** UX.
