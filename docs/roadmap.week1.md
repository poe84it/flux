# Week 1: Foundations & Data Model

## Day 1: Database Schema Design

- [x] Design the data model diagram (ERD in Mermaid)

> ```mermaid
> ---
>   config:
>     layout: elk
> ---
> erDiagram
> 
>   users {
>     int id PK
>     string username
>   }
> 
>   users ||--o{ task_status_history : changes
>   users ||--o{ task_assignment_history : assigned_by
>   users ||--o{ task_assignment_history : assigned_task
> 
>   tasks {
>     int id PK
>     string title
>     timestamp created_at
>   }
> 
>   tasks ||--o{ task_status_history : has_history
>   tasks ||--o{ task_assignment_history : assigned_to
> 
>   task_statuses {
>     int id PK
>     string name "e.g. Received, In Progress"
>     string slug "e.g. received, in_progress"
>     int sort_order
>     timestamp created_at
>   }
> 
>   task_statuses ||--o{ task_status_history : is_status
> 
>   task_status_history {
>     int id PK
>     int task_id FK
>     int status_id FK
>     int user_id FK
>     timestamp created_at "status change timestamp"
>   }
> 
>   task_assignment_history {
>     int id PK
>     int task_id FK
>     int assigned_to_user_id FK
>     int assigned_by_user_id FK
>     timestamp created_at
>   }
> ```

## Day 2: Database Migrations Definition

- [ ] Create the `tasks` table (includes `title`, timestamps)
- [ ] Create the `task_statuses` table (includes `slug`, `sort_order`)
- [ ] Create the `task_status_history` table (tracks status changes over time)
- [ ] Create the `task_assignment_history` table (tracks assignment events)
- [ ] Update `users` table if necessary (ensure `username` is available)

## Day 3: Model Definition and Relationships

- [ ] Create the `Task` model with Relations:
  - [ ] `statusHistory` : hasMany(TaskStatusHistory)
  - [ ] `assignHistory` : hasMany(TaskAssignHistory)
  - [ ] `latestStatusHistory` : hasOne(TaskStatusHistory).latestOfMany()
  - [ ] `latestAssignHistory` : hasOne(TaskAssignHistory).latestOfMany()

- [ ] Create the `TaskStatus` model with Relations:
  - [ ] `history` : hasMany(TaskStatusHistory)
  - [ ] `tasks` : hasManyThrough(Task, TaskStatusHistory) *(Optional/Later)*

- [ ] Create the `TaskStatusHistory` model with Relations:
  - [ ] `task` : belongsTo(Task)
  - [ ] `status` : belongsTo(TaskStatus)
  - [ ] `user` : belongsTo(User)

- [ ] Create the `TaskAssignHistory` model with Relations:
  - [ ] `task` : belongsTo(Task)
  - [ ] `assignedTo` : belongsTo(User, 'assigned_to_user_id')
  - [ ] `assignedBy` : belongsTo(User, 'assigned_by_user_id')

- [ ] Update `User` model with Relations:
  - [ ] `assignedTasks` : hasMany(TaskAssignHistory, 'assigned_to_user_id')
  - [ ] `assignmentsMade` : hasMany(TaskAssignHistory, 'assigned_by_user_id')
  - [ ] `statusChanges` : hasMany(TaskStatusHistory)

### Future Considerations (do not implement yet)

- [ ] Add `note` or `comment` field to `TaskStatusHistory` and `TaskAssignHistory` to support audit trails.
- [ ] Consider `roles` as many-to-many (User–Role–Pivot with policy logic).
- [ ] Use `created_at` in `task_statuses` only if needed for filtering/sorting/history.

## Day 4: Factories & Seeders

- [ ] Create Factory & Seeder for `TaskStatus`:
  - [ ] Define statuses: `received`, `assigned`, `in_progress`, `forwarded`, etc.
  - [ ] Ensure sort order reflects real-world workflow
- [ ] Create Factory & Seeder for `Task`

## Day 5: Sanity Check & Integration Prep

- [ ] Test Eloquent relationships via tinker or seeders
- [ ] Prepare artisan commands or factories (optional) for testing status/assignment updates
- [ ] Plan how authentication will be integrated with status and assignment logs
- [ ] Document known edge cases:
  - [ ] Self-assignment (assigned_to == assigned_by)
  - [ ] Unassigned tasks (latest assignment missing)
  - [ ] Incomplete status history
