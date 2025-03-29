Lookin Dharamshala - Laravel Project
Introduction
Lookin Dharamshala is a Laravel-based web application designed to showcase tourist places, blogs, and IT services. The platform allows users to explore various destinations, read informative blogs, and access IT solutions. The project includes an admin panel for managing content dynamically.

Features
1. Tourist Places
Add, edit, and delete tourist places.

Categorization of places based on themes (e.g., adventure, spiritual, nature).

Image gallery for each place.

Google Maps integration for location display.

2. Blogs
Create and manage blog posts.

Rich-text editor for content formatting.

SEO-friendly URL structure.

Categorization and tagging of blogs.

3. IT Services
Showcase IT services with descriptions and images.

Service categorization for easy navigation.

Inquiry form for users to request services.

4. Admin Panel
Role-based authentication using Laravel Breeze.

Dashboard for managing content.

Media management system for handling images and files.

SEO settings customization.

5. Contact & Feedback
Contact form with OTP-based email verification.

User feedback and rating system.

Email notifications for inquiries and feedback.

Installation
Prerequisites
PHP 8.3+

Composer

MySQL or MariaDB

Node.js & npm

Laravel 11

Steps to Install
Clone the repository:

sh
Copy
Edit
git clone https://github.com/your-repo/lookinDharamshala.git
cd lookinDharamshala
Install dependencies:

sh
Copy
Edit
composer install
npm install
Configure environment variables:

sh
Copy
Edit
cp .env.example .env
Set up the database credentials in the .env file.

Generate the application key:

sh
Copy
Edit
php artisan key:generate
Run database migrations and seeders:

sh
Copy
Edit
php artisan migrate --seed
Serve the application:

sh
Copy
Edit
php artisan serve
Deployment
Steps for Production Deployment
Use Nginx or Apache for serving the application.

Set file permissions properly (storage and bootstrap/cache).

Configure a cron job for scheduled tasks.

Use AWS CAPTCHA in production and Google CAPTCHA in development.

Technologies Used
Laravel 11

MySQL

Tailwind CSS

JavaScript (AJAX for frontend interactions)

Materialize (for UI components)

Laravel Breeze (for authentication)

License
This project is licensed under the MIT License.

Contact
For any queries, contact Sidharth Guleria.
