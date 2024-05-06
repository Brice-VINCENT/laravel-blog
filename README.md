# Laravel Demo Blog Site

This repository contains the source code for a demo blog site built with Laravel and Vue.js. Below you will find the instructions to set up and run the project locally.

## Prerequisites

Before you begin, make sure you have the following installed:

-   PHP (version required by Laravel)
-   Composer
-   Node.js and npm
-   A database supported by Laravel (e.g., MySQL, PostgreSQL)

## Getting Started

Follow these steps to get your development environment set up:

### 1. Clone the Repository

Start by cloning the repository to your local machine:

<pre>
git clone https://github.com/HC-Brice/laravel-blog.git
cd path-to-your-project
</pre>

### 2. Install Dependencies

Once you have the project locally, install the PHP and JavaScript dependencies:

<pre>
composer install
npm install
</pre>

### 3. Build the Frontend

Build the frontend assets using npm. This will compile and minimize your Vue.js files:

<pre>
npm run prod
</pre>

### 4. Set Up Environment

Create a `.env` file by copying the example provided in the project:

<pre>
cp .env.example .env
</pre>

Edit the `.env` file to match your local environment settings, especially the database connection details.

### 5. Generate App Key

Generate a unique application key with Artisan:

<pre>
php artisan key:generate
</pre>

### 6. Run Migrations and Seeders

Migrate the database and seed it with initial data provided by the seeders:

<pre>
php artisan migrate
php artisan db:seed --class=postSeeder
</pre>

## Running the Application

After completing the setup, you should now be able to run the application using Laravel's built-in server:

<pre>
php artisan serve
</pre>

This will start the server, and you should be able to access your application at `http://localhost:8000`.

## Conclusion

You now have a fully functional demo blog site running on your local machine. Explore the functionalities provided and adapt the project as needed for further development.
