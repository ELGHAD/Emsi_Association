# EMSI Association — Student Life Management Platform

A Laravel-based web application designed to centralize the management of student associations, clubs, events, and campus news at EMSI Rabat.

<p align="left">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white" alt="Laravel" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white" alt="MySQL" />
  <img src="https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=flat&logo=tailwindcss&logoColor=white" alt="Tailwind CSS" />
  <img src="https://img.shields.io/badge/Vite-646CFF?style=flat&logo=vite&logoColor=white" alt="Vite" />
</p>

## Overview

EMSI Association is a web platform built to simplify student life management at EMSI Rabat. It provides a centralized environment for organizing student clubs, managing memberships, coordinating events, and sharing campus news.

The application offers distinct interfaces for students and administrators, helping organize association activities and make information easier to access.

## Key Features

- **User Management:** User registration, login, and role-based access for students and administrators.
- **Club Management:** Create and manage student clubs and organize their memberships.
- **Event Management:** Publish events, manage registrations, and track participation.
- **Campus News:** Publish and browse news related to student and association activities.
- **Role-Based Interfaces:** Provide different dashboards and functionality according to user roles.
- **Responsive Interface:** Build user-facing pages with Blade templates, Tailwind CSS, and JavaScript.

## Technology Stack

| Category | Technologies |
|---|---|
| Backend | PHP, Laravel |
| Architecture | Model-View-Controller (MVC) |
| Frontend | Blade, Tailwind CSS, JavaScript |
| Database | MySQL |
| ORM | Laravel Eloquent |
| Authentication | Laravel Sanctum, where configured in the application |
| Asset Bundling | Vite |
| Dependency Management | Composer, npm |
| Testing | PHPUnit configuration |

## Architecture

The application follows Laravel's MVC architecture to separate data models, request handling, and presentation.

```text
Browser
   |
   v
Laravel Routes
   |
   v
Controllers and Middleware
   |
   +------> Models (Eloquent ORM)
   |                 |
   |                 v
   |              MySQL
   |
   v
Blade Views
   |
   v
HTML / Tailwind CSS / JavaScript
```

This structure provides a foundation for maintaining the application and extending its business functionality.

## Screenshots

The following screenshots illustrate the main interfaces. Ensure that the referenced image files exist in the repository and that their filenames match exactly.

<p align="center">
  <img src="public/home.jfif" alt="Application home page" width="45%" />
  <img src="public/login.jfif" alt="Login page" width="45%" />
</p>

<p align="center">
  <img src="public/dashboard.jfif" alt="Administrator dashboard" width="45%" />
  <img src="public/dashboaard.jfif" alt="Student dashboard" width="45%" />
</p>

<p align="center">
  <img src="public/users.jfif" alt="User management page" width="45%" />
  <img src="public/evenements.jfif" alt="Event management page" width="45%" />
</p>

## Getting Started

### Prerequisites

Install the following tools before running the application:

- PHP version compatible with the project's Laravel dependencies
- Composer
- Node.js and npm
- MySQL

### 1. Clone the repository

```bash
git clone https://github.com/ELGHAD/Emsi_Association.git
cd Emsi_Association
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Configure the environment

Create a local environment file:

```bash
cp .env.example .env
```

Configure the database connection in `.env`:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=emsi_association
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Create the database in MySQL, then generate the application key:

```bash
php artisan key:generate
```

Run the database migrations and seeders if the project provides the required seed data:

```bash
php artisan migrate --seed
```

### 4. Start the application

In one terminal, start the Laravel development server:

```bash
php artisan serve
```

In another terminal, start the frontend asset development server:

```bash
npm run dev
```

Open the URL displayed by Laravel, usually:

`http://127.0.0.1:8000`

## Project Structure

```text
Emsi_Association/
├── app/                 # Models, controllers, middleware
├── bootstrap/           # Application bootstrap
├── config/              # Laravel configuration
├── database/            # Migrations, seeders, factories
├── public/              # Public entry point and static assets
├── resources/
│   ├── views/           # Blade templates
│   ├── css/             # Frontend styles
│   └── js/              # JavaScript assets
├── routes/              # Application routes
├── tests/               # Automated tests
├── composer.json        # PHP dependencies
├── package.json         # Frontend dependencies
└── vite.config.js       # Vite configuration
```

The directory contents may vary depending on the current repository version.

## Security and Engineering Considerations

The project uses Laravel's application structure and Eloquent ORM to support organized request handling and database access.

Before deploying the application publicly, verify the following:

- Authentication and authorization are enforced on protected routes and actions.
- Role-based permissions are validated on the server, not only in the user interface.
- Form inputs are validated and sensitive actions use appropriate authorization checks.
- Database credentials and application secrets are stored in environment variables.
- Production settings disable debug mode and use secure session and cookie configuration.
- Automated tests cover authentication, permissions, club membership, and event registration.
- Laravel Sanctum is configured for the authentication flow actually used by the application.

Using an authentication package does not, by itself, guarantee that every route or operation is properly protected.

## Potential Improvements

- Add comprehensive feature tests for the main user workflows.
- Improve event registration and participation tracking.
- Add notifications for event updates and membership requests.
- Improve validation and error handling across the application.
- Introduce continuous integration and deployment checks.
- Document the database schema and provide reliable development seed data.

## Author

**ELGHAD**

- GitHub: https://github.com/ELGHAD
- Portfolio: https://elghad.github.io/hamza-elrhadiouini-portfolio

## License

No license is specified here. Add the appropriate license file if you intend to distribute the project under an open-source license.
