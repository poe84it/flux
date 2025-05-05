# Week 6: Testing & Stability

## Day 1: Unit Testing for Models & API

- [ ] Write **unit tests** for all models and relationships:
  - [ ] `Task`
  - [ ] `TaskStatus`
  - [ ] `TaskStatusHistory`
  - [ ] `TaskAssignHistory`
  - [ ] `TaskComment` (if implemented)
- [ ] Test API endpoints for:
  - [ ] Task creation and retrieval
  - [ ] Task assignment and status change
  - [ ] Task comment creation and mention parsing (if implemented)
- [ ] Ensure validation rules and relationships are covered in tests

## Day 2: Frontend Testing & User Interactions

- [ ] Test frontend components for **task detail** page:
  - [ ] Correct rendering of task information
  - [ ] Markdown editor functionality (task description, comments, mentions)
  - [ ] Task assignment UI and status updates
- [ ] Ensure **mentions** functionality is working:
  - [ ] Check user parsing and correct display in Markdown rendering
  - [ ] Verify no JavaScript errors in browser console during comment posting

## Day 3: Cross-Browser Testing

- [ ] Test app in **multiple browsers** (Chrome, Firefox, Edge, Safari):
  - [ ] Ensure compatibility and consistent behavior across browsers
  - [ ] Check responsiveness (mobile/tablet/desktop)
- [ ] Address any **UI/UX issues** specific to certain browsers
- [ ] Test Markdown rendering in various environments (e.g., Chrome, Safari)

## Day 4: Bug Fixing & Refinement

- [ ] **Address all reported bugs** from testing:
  - [ ] Focus on **critical bugs** that impact task assignment, status history, and comment functionality
  - [ ] Fix any issues with mentions not parsing correctly or leading to errors
- [ ] Polish frontend:
  - [ ] Improve form submission and feedback
  - [ ] Refine comment section UI (scrolling, avatars, timestamps)
- [ ] Test edge cases for assignment and status update flows

## Day 5: Final Deploy Preparation

- [ ] Prepare the system for **deployment**:
  - [ ] Verify database migrations are up to date
  - [ ] Check configuration settings (e.g., environment variables)
- [ ] Generate production build of frontend (if applicable)
- [ ] **Deploy to staging** or **production environment** (depending on the setup)
- [ ] Perform a smoke test in staging (if available) to verify the system after deploy

## Day 6: Documentation & Next Steps

- [ ] Write final documentation for the MVP:
  - [ ] API endpoints (basic usage)
  - [ ] Frontend structure and task assignment flow
  - [ ] How to use Markdown editor and mentions
- [ ] Plan for **Phase 2** (Post-MVP):
  - [ ] Prioritize improvements based on feedback (e.g., notifications, analytics, advanced features)

## Notes

- The focus is on **stability** and **user-facing issues** for the MVP.
- Testing includes functional, UI, and performance aspects, ensuring minimal bugs during the initial deployment.
- **Deployment readiness** is key — this is the last phase before going live, so ensure everything works properly in a production-like environment.
