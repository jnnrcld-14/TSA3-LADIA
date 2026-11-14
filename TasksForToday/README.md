# Tasks for Today Management System (Laravel)

A Laravel MVC implementation for the TSA1 requirements.

## Requirements
- PHP 8.2 or later
- Composer
- Laravel 11 or 12
- MySQL (or another Laravel-supported database)

## Installation

This package contains the application files for the TSA1 project. To ensure all framework
boilerplate and dependencies match your installed Laravel version:

1. Create a fresh Laravel project:
   ```bash
   composer create-project laravel/laravel TasksForToday
   ```
2. Copy the contents of this package's `app/`, `database/`, `resources/`, and `routes/`
   directories into the corresponding directories in the fresh Laravel project.
   Replace files when prompted. Keep Laravel's other framework files.
3. Configure `.env` for your database. Example:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tasks_for_today
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. Create the database `tasks_for_today` in MySQL/phpMyAdmin.
5. Run:
   ```bash
   php artisan migrate:fresh --seed
   php artisan serve
   ```
6. Visit http://127.0.0.1:8000

## Pages
- `/` — Welcome page; today's tasks only
- `/tasks` — all tasks, ordered by task date
- `/profile` — the single seeded user
- `/about` — static developer information

## Customize
Edit `database/seeders/TasksForTodaySeeder.php` to change the sample tasks and user.
Edit `resources/views/about.blade.php` and the seeded user's `full_name` / `email`
to your own details.

## Notes
- The seeder creates 8 tasks across yesterday, today, and tomorrow, plus exactly one user.
- `User` has timestamps disabled because the requested TSA1 users schema has no timestamps.
- This project is a display-only implementation: task CRUD and authentication are not included.
- `migrate:fresh` deletes existing tables and data before rebuilding the database.
