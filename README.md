# Frontend Mentor Challenge: News Homepage + Laravel Project

## Overview

This project is a combination of two tasks: building a news website homepage and creating a Laravel-based system for user registration, login, and article management. This challenge was proposed during my internship and served as an excellent opportunity to apply what I've learned during the Web Dev course and gain practical experience in frontend and backend development using the Laravel framework.

## Demo

[<img src="https://res.cloudinary.com/dz209s6jk/image/upload/f_auto,q_auto,w_700/Challenges/ydwlkxtdt2ocf5lfr8gf.jpg" width="100%"/>](https://babsobrinho.github.io/news-homepage-demo/)
[Go to demo page](https://babsobrinho.github.io/news-homepage-demo/)

## Features

### News Website Homepage
- Responsive design for various screen sizes
- Interactive elements with hover and focus states
- HTML, CSS, and JavaScript were used to create the frontend
- Frontend Mentor challenge project

### User Management with Laravel
- User registration and login functionality
- Users can create, edit, and delete their own articles
- Laravel framework for backend development

## Installation

To run the Laravel project locally, follow these steps:

1. Clone the repository to your local machine: `git clone <repository-url>`
2. Navigate to the project directory: `cd <project-directory>`
3. Install the project dependencies using Composer: `composer install`
4. Create a `.env` file by copying the `.env.example` file: `cp .env.example .env`
5. Generate a new application key: `php artisan key:generate`
6. Configure your database connection in the `.env` file. You'll need to set the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` variables
7. Run database migrations to create the necessary tables: `php artisan migrate`
8. Start the development server: `php artisan serve`
9. Access the application in your web browser at `http://localhost:8000`

## Usage

- Access the news website homepage
- Register a new user account
- Log in with your credentials
- Navigate to the "Articles" section to create, edit, or delete articles

## License

This project is licensed under the [MIT License](LICENSE).
