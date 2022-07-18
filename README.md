CRUD de Support

# Support Tasks Status

id: primary key, auto increment;
name: varchar(20), required; ('Aberto', 'Inconsistente', 'Solucionado', 'Recusado');

# Support Tasks

ControllerName = SupportTaskController;
Model Name = SupportTask
Table name = support_tasks

id: primary key, auto increment;
status_id: integer, foreign key on 'support_task_status', required;
user_id: integer, foreign key on 'users', required;
subject: varchar(30), required;
description: text, required;
is_urgent: boolean, default false;
created_at: timestamps;
updated_at: timestamps;


# Relations

SupportTasks (N)  X  (1) SupportTasksStatus
SupportTasks (N)  X  (1) Users
