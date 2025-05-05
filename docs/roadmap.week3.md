# Week 3: Task Interaction Layer & Reporting Foundations

## Day 11: Admin or API Task Overview

- [ ] Create route/controller to view task list
  - [ ] Include latest status and assignment via eager loading
  - [ ] Include filters: by status, assignee, creation date
- [ ] Create task detail view
  - [ ] Show full assignment and status history
  - [ ] Display current status and current assignee
- [ ] Ensure pagination and query performance

## Day 12: Basic Task Actions (From UI or API)

- [ ] Implement API or form to assign task
  - [ ] Validate and store assignment history
- [ ] Implement API or form to change task status
  - [ ] Validate and store status history
- [ ] Protect actions with auth (e.g., middleware or policy)

## Day 13: Historical Browsing & Audit Tools

- [ ] Implement task timeline rendering (status & assignment combined)
- [ ] Provide utility to export task history (JSON or CSV)
- [ ] Display timestamp and actor (user) for each action

## Day 14: Operator Dashboard (Minimal)

- [ ] List unassigned tasks (prioritized)
- [ ] List user’s currently assigned tasks
- [ ] Show “assign to me” button for unassigned tasks
- [ ] Show “mark as in progress / complete” button per task

## Day 15: QA & Documentation

- [ ] Manual QA: simulate full flow from task creation to completion
- [ ] Test edge cases (e.g., rapid reassignments, multiple status changes)
- [ ] Finalize API/UI documentation
- [ ] Internal changelog or devlog entry for this sprint
