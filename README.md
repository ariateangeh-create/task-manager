# WAD 2 Final Project – Task Manager System

## Project Title
Task Manager System

## Project Description
The Task Manager System is a web-based Laravel application developed for the WAD 2 Final Project requirement. The system allows authenticated users to manage their personal tasks through complete CRUD operations.

This project demonstrates the proper implementation of Laravel core features including:

* CRUD Operations
* Authentication
* Middleware
* Authorization (Policies/Gates)
* Eloquent Relationships

The application ensures that users can only access and manage their own tasks securely.

# Implemented Features

## CRUD Operations

The system allows users to:

* Create tasks
* View tasks
* Update tasks
* Delete tasks

## Authentication

Implemented using Laravel Breeze:

* User Registration
* User Login
* User Logout

## Middleware

Routes are protected using Laravel middleware:

* Only authenticated users can access the task management system.

## Authorization

Authorization is implemented using Laravel Policies:

* Users can only edit or delete their own tasks.
* Unauthorized access is restricted.

## Eloquent Relationships

Implemented One-to-Many Relationship:

* One User has many Tasks
* One Task belongs to one User

# System Functionalities

## User Functionalities

### Authentication

* Register account
* Login account
* Logout account

### Task Management

* Add Task
* Edit Task
* Delete Task
* View Personal Tasks

# Technologies Used

* Laravel 10
* PHP 8.1
* MySQL
* Blade Template Engine
* Laravel Breeze
* Tailwind CSS

# Database Structure

## Users Table

| Column     | Description              |
| ---------- | ------------------------ |
| id         | User ID                  |
| name       | User Name                |
| email      | User Email               |
| password   | User Password            |
| timestamps | Created and Updated Time |


## Tasks Table

| Column      | Description                  |
| ----------- | ---------------------------- |
| id          | Task ID                      |
| title       | Task Title                   |
| description | Task Description             |
| is_done     | Task Status                  |
| user_id     | Foreign Key from Users Table |
| timestamps  | Created and Updated Time     |

# Eloquent Relationship

## User Model

```php
public function tasks()
{
    return $this->hasMany(Task::class);
}
```

## Task Model

```php
public function user()
{
    return $this->belongsTo(User::class);
}
```

---

# 🔐 Authorization and Security

The system uses Laravel authentication and authorization to ensure security.

### Security Implementations

* Authentication Middleware
* CSRF Protection
* Task Ownership Validation
* Policy-based Authorization


# Installation Guide

## 1. Clone Repository

```bash
git clone https://github.com/ariateangeh-create/task-manager.git
cd task-manager
```

## 2. Install Dependencies

```bash
composer install
npm install
npm run dev
```

## 3. Configure Environment

```bash
cp .env.example .env
php artisan key:generate
```

## 4. Setup Database

Update `.env` file:

```env
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```

## 5. Run Migrations

```bash
php artisan migrate
```

## 6. Start Server

```bash
php artisan serve
```

# 🧪 How to Use the System

1. Register a new account
2. Login using your account
3. Open the dashboard
4. Create a task
5. Edit or delete tasks
6. Logout securely

# 📸 Screenshots

## Login Page
<img width="723" height="488" alt="image" src="https://github.com/user-attachments/assets/266c679c-146b-4410-847a-5ba9db6f9597" />

## Dashboard
<img width="1295" height="295" alt="image" src="https://github.com/user-attachments/assets/33dc302d-fa82-49c0-abbe-ff4f6b88af3b" />

## Task List
<img width="1261" height="608" alt="image" src="https://github.com/user-attachments/assets/e8f2f63a-a85e-4b96-871c-22e493862f25" />

## Create Task Page
<img width="1228" height="434" alt="image" src="https://github.com/user-attachments/assets/1ae1ddac-2f3d-4276-93a0-562f863f5cf2" />

# 🎥 Screen Recording Demonstration
https://drive.google.com/file/d/1u8Hgtwf1MlCDwB9cmtCV98kfdwcnL3yP/view?usp=sharing

# 📌 Evaluation Requirements Coverage

| Requirement            | Status        |
| ---------------------- | ------------- |
| CRUD Operations        | ✅ Implemented |
| Authentication         | ✅ Implemented |
| Middleware             | ✅ Implemented |
| Authorization          | ✅ Implemented |
| Eloquent Relationships | ✅ Implemented |

# Developer Information
| Information | Details |
|---|---|
| Student Name | Angelene Ariate |
| Subject | Web Application Development 2 |
| Project Type | Laravel Final Project |
| System Title | Task Manager System |

# Conclusion
The Task Manager System successfully demonstrates the implementation of core Laravel concepts required in Web Application Development 2.
The project includes authentication, middleware protection, authorization, CRUD functionalities, and Eloquent relationships while
ensuring secure task ownership and access control.

# GitHub Repository
Repository Link:
[https://github.com/ariateangeh-create/task-manager](https://github.com/ariateangeh-create/task-manager)
