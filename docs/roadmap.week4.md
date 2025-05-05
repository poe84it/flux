# Week 4: Refinement, Extensibility & Communication Hooks

## Day 16: Refactor Models & Relationships

- [ ] Review all Eloquent relationships for naming consistency
- [ ] Add scopes (e.g., `->onlyUnassigned()`, `->latestStatus()`)
- [ ] Validate that eager loading is correctly applied to avoid N+1 queries
- [ ] Add `withDefault()` where appropriate to avoid null assumptions

## Day 17: Observers & Events

- [ ] Define TaskAssigned event
  - [ ] Triggered on new assignment creation
- [ ] Define TaskStatusChanged event
  - [ ] Triggered on new status change
- [ ] Create observers if needed for logging or side effects
- [ ] Begin emitting basic events for integrations or logging

## Day 18: Notifications & Hookable Points (Optional)

- [ ] Define notifiable users (e.g., assignee on assignment)
- [ ] Send basic Laravel notifications (DB or mail) on:
  - [ ] Task assignment
  - [ ] Task status change
- [ ] Keep notification logic decoupled using events

## Day 19: Role & Permission Planning (Not Implemented Yet)

- [ ] Document possible roles for future (admin, operator, manager)
- [ ] Define policy entry points (e.g., who can assign tasks)
- [ ] Stub Laravel policies without enforcing yet

## Day 20: Documentation, Cleanup, and Final Review

- [ ] Cleanup of unused code, comments, and debug logic
- [ ] Write developer README with setup and conventions
- [ ] Generate UML from model relationships (optional)
- [ ] Document where logic is implemented (models, observers, policies)
- [ ] Changelog for Week 4
