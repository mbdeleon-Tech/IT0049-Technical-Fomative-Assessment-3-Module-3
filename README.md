# Northstar POS Forms and Uploads Edition

Northstar POS is a CodeIgniter 4 application for IT0049 Technical Formative Assessment 3. It extends the separate TFA2 project with validated create and edit forms, persistent MySQL records, and prepared user avatar uploads.

## Live website

The TFA3 hosted link will be added after deployment.

## Pages

- `/` - landing page and system overview
- `/about` - project background and database-backed MVC flow
- `/customers`, `/customers/new`, `/customers/{id}/edit` - list, create, and edit customers
- `/users`, `/users/new`, `/users/{id}/edit` - list, create, and edit users with avatar upload

## Requirements

- PHP 8.1 or newer with MySQLi enabled
- Composer 2
- MySQL 5.7 or newer, or MariaDB 10.4 or newer

## Local setup

1. Clone the repository and open the project folder.
2. Run `composer install`.
3. Create a MySQL database named `tfa3_pos`.
4. Import `database/tfa3_pos.sql` into that database.
5. Copy `.env.example` to `.env` and update the database username and password if needed.
6. Run `php spark serve`.
7. Open `http://localhost:8080`.

## Database design

The SQL export creates the required tables and inserts six records into each table.

- `customers`: `id`, `full_name`, `email`, `phone`, `created_at`
- `users`: `id`, `username`, `full_name`, `avatar`, `created_at`

The controllers do not contain record arrays. They call `findAll()` through their respective CodeIgniter Models, which use Query Builder internally.

## Project structure

- `app/Models/CustomerModel.php` maps to the `customers` table.
- `app/Models/UserModel.php` maps to the `users` table.
- `app/Controllers/Customers.php` retrieves customers through `CustomerModel`.
- `app/Controllers/Users.php` retrieves users through `UserModel`.
- `app/Views` preserves the four-page TFA1 interface with database-aware copy.
- `database/tfa3_pos.sql` is the complete database export and sample dataset.
- `public/uploads` stores prepared 160 × 160 avatars and the placeholder image.
- `.env.example` documents the local MySQL connection settings without exposing credentials.

## Run tests

```bash
composer test
```

## Student

- Marco Arsenio B. De Leon
- Section TC33
- Professor: Mr. Von Erick Magbitang
