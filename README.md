# Vue from Laravel Backend

This repository demonstrates how to build a Laravel backend (MVC + API) to power a Vue.js frontend. It serves as a foundational example for integrating Laravel with Vue.

## Features

- Laravel MVC architecture
- Basic CRUD functionality
- API endpoint to support Vue.js frontend

## Getting Started

### Prerequisites

- PHP >= 8.0
- Composer
- Node.js & npm
- MySQL or another supported database

### Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/marvinobig/vue-from-laravel-be.git
   cd vue-from-laravel-be
   ```

2. **Install PHP dependencies:**

   ```bash
   composer install
   ```

3. **Install JavaScript dependencies:**

   ```bash
   npm install
   ```

4. **Copy `.env` file and generate application key:**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your database settings in `.env`.**

6. **Run migrations:**

   ```bash
   php artisan migrate
   ```

7. **Run Seeding:**

   ```bash
   php artisan db:seed
   ```

7. **Build frontend assets:**

   ```bash
   npm run dev
   ```

8. **Start the development server:**

   ```bash
   php artisan serve
   ```

