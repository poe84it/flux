# Road map

## Phase 1: MVP Roadmap – Core Task Management & Markdown Editing (6 Weeks)

### [Week 1](./roadmap.week1.md): Foundations & Data Model

- [x] Design the data model diagram
- [ ] Define migrations for `tasks`, `task_statuses`, `task_status_history`, `task_assignment_history`
- [ ] Define all models and Eloquent relationships
- [ ] Ensure model naming conventions align with Laravel best practices
- [ ] Establish a clean and extensible base schema

### [Week 2](./roadmap.week2.md): Status & Assignment Logic

- [ ] Implement logic for task assignment to users
- [ ] Implement task status history and current status retrieval
- [ ] Create history-aware logic for assignment and status tracking
- [ ] Validate integration with authenticated users
- [ ] Seed basic statuses (e.g., "Received", "In Progress", "Forwarded")

### [Week 3](./roadmap.week3.md): Order View & Markdown Editing

- [ ] Develop the Order Detail View (Inertia/Vue or Blade as needed)
- [ ] Integrate a basic Markdown editor (textarea-based)
- [ ] Render Markdown securely within the task detail page
- [ ] Display linked PDF or document references (where available)
- [ ] Focus on lightweight and accessible UX

### [Week 4](./roadmap.week4.md): Refinement & Hooks

- [ ] Add useful Eloquent scopes, defaults, and refactors
- [ ] Setup Task events (`TaskAssigned`, `StatusChanged`)
- [ ] Enable optional notification hooks (via events, not enforced)
- [ ] Stub policies for assignment or status change rules
- [ ] Cleanup, document, and prepare for extensibility

### [Week 5](./roadmap.week5.md): Communication & Mentions

- [ ] Implement internal comment/communication field in task/order
- [ ] Enable `@mentions` via frontend JS in the Markdown text
- [ ] Detect mentioned users and emit events for future notifications
- [ ] Parse mentions into links to user profiles or filters
- [ ] Optionally store tag relations in dedicated tables for analysis

### [Week 6](./roadmap.week6.md): Final Testing & Stability

- [ ] Unit test all models, relationships, and assignment logic
- [ ] Feature test status changes, history logging, and Markdown content
- [ ] Ensure UI is reactive to assignment and status updates
- [ ] Review for edge cases (e.g., race conditions on task claims)
- [ ] Prepare first deploy to staging or internal UAT

## Phase 2: Enhancements (Ongoing - 4-6 weeks after MVP)

- High Priority:
  - Implement notification system (emails based on task status changes or mentions).
  - Simple Reporting - Order status summary.

- Medium Priority:
  - Create a basic dashboard for incoming/outgoing orders.

- Lower Priority:
  - Implement a Kanban-style visualization of tasks.

## Phase 3:  Future Development (Dependent on Feedback & Complexity)

- Advanced Reporting & Analytics
- Inventory Integration
- Quality Assurance Workflow

---

## Tools & Tech

- Database: MariaDB in Docker Compose.
- Frontend: Laravel Inertia/Vue with Vuex (for state management).
- Editor: Basic Text Area with Markdown Escaping inside Inertia component.

## Key Considerations

- Prioritization: Focus relentlessly on the core task management and operator notes.
- Scope Management: Resist the urge to add every "idea." Deliver a working, valuable MVP.
- Automation: Leverage CI/CD setup for automated deployments – this will be critical.
- Inertia/Vue: lean heavily on Vue.js for the frontend and Vuex for state management
- State Management: Start simple with Vuex and scale up as needed, prioritizing maintainability.
- Markdown Editor: Let’s focus on a minimal implementation — a standard text area with basic Markdown escaping. We can consider a more sophisticated library later.
