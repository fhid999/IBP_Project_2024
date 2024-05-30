# Football Academy System

The Football Academy System is a web application built using Laravel and Bootstrap. This application features an administration panel and provides an interface for managing football academy information, announcements, and communication between users. It is fully responsive, ensuring compatibility with desktop, tablet, and mobile devices.

## Features

### Administration Interface

* Secure login system using e-mail and password.
* Functionality for adding, editing, and deleting users.
* Functionality for registering students.
* Ability to save, update, and delete announcements.
* A built-in messaging system for reading and replying to messages from standard users.

### Standard User Interface

* Secure login system using e-mail and password.
* Functionality for updating the user's own password.
* Ability to view and search students data entered by the administrator.
* Access to administrator announcements from the home page.
* A built-in messaging system for sending messages to the administrator.

## Installation

To get the project up and running on your local machine, follow these steps:

1. Clone the repository to your machine.
2. Navigate to the project directory.
3. Install all the dependencies using `composer install`.
4. Rename `.env.example` file to `.env` inside your project root and fill the database information.
5. Run `php artisan key:generate` to generate the app key.
6. Run `php artisan migrate` to set up the database.
7. Run `php artisan db:seed` to set up the database.
8. Run `php artisan serve` to start the application.

## Project Managers

*Fuhaid Arafat, ogrenci numara: 2210213596
