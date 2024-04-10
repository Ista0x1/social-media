# Social Media 

This is a simple social media platform built with Laravel 10 where users can view threads filtered based on various criteria like followers count, likes count, language, and distance.

## Features

- User Authentication: Users can sign in and access the platform.
- Thread Display: Users can view threads sorted and filtered based on different parameters.
- Basic UI: Simple UI built using Laravel's Blade templating engine.

## Requirements

- PHP (>= 8.0)
- Laravel 10

## Installation

1. Clone the repository:

git clone https://github.com/ista0x1/social-media.git

css
Copy code

2. Navigate to the project directory:

cd social-media


3. Start the Laravel development server:

php artisan serve


4. Access the application in your browser at `http://127.0.0.1:8000`.

5. Run database migrations and seeders to populate the database with fake data:

php artisan migrate --seed

## Usage

1. Access the login page by navigating to `http://127.0.0.1:8000`.
2. Sign in using the following credentials:
   - Email: admin@multividas.com
   - Password: password
3. Once logged in, you'll be redirected to the threads page 
