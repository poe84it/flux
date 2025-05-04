# Week 2: Enhanced Task Assignment & Workflow

## Day 6: Task Assignment Mechanics

- [ ] Implement service method or action to assign a task to a user
  - [ ] Record in `task_assignment_history`
  - [ ] Update `assigned_to_user_id` via latest history
  - [ ] Allow self-assignment from "unassigned" pool
- [ ] Define `Task::isAssigned()` helper
- [ ] Define `Task::currentAssignee()` accessor

## Day 7: Task Status Management

- [ ] Implement service method or action to change task status
  - [ ] Append to `task_status_history`
  - [ ] Enforce immutability of history records
- [ ] Define `Task::currentStatus()` accessor
- [ ] Define `Task::hasStatus(string $slug)` helper

## Day 8: Constraints, Validation & Auth Integration

- [ ] Add validation:
  - [ ] Ensure assignment targets valid users
  - [ ] Ensure status transitions follow business logic (optional in MVP)
- [ ] Integrate with authentication:
  - [ ] Track `auth()->user()` in assignment and status changes
  - [ ] Respect `auth` guards if applicable
- [ ] Define policies (if needed) for:
  - [ ] Who can assign a task
  - [ ] Who can change the status

## Day 9: Task Pools & Retrieval Logic

- [ ] Implement query scopes:
  - [ ] `Task::scopeUnassigned()`
  - [ ] `Task::scopeInProgress()`
  - [ ] `Task::scopeRecentlyUpdated()`
- [ ] Enable filtering/sorting by:
  - [ ] Current status
  - [ ] Current assignee
  - [ ] Task age (creation timestamp)
- [ ] Define eager loading strategy for related data

## Day 10: Review & Internal Testing

- [ ] Smoke test:
  - [ ] Create task → Assign task → Change status → Reassign
- [ ] Verify task history is consistent and correctly ordered
- [ ] Clean up: ensure consistent naming in methods and relations
- [ ] Document helper methods and relationships in code
- [ ] Write basic feature test stubs (optional)
