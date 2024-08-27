# Ticketly

![image](https://github.com/user-attachments/assets/aa87785c-9d15-4bf4-9daa-0ae4ef543e99)
![image](https://github.com/user-attachments/assets/01d13b96-050b-4a49-a2b1-1bbb194a7de9)
![image](https://github.com/user-attachments/assets/3f26b799-2e43-42b0-8f4f-5090b928a977)
![image](https://github.com/user-attachments/assets/5eb294e7-d0da-4811-822e-15f89f1d6cfa)
![image](https://github.com/user-attachments/assets/b5ff12ba-e914-4546-a362-9144561d486a)


**Ticketly** is a simple ticketing system implemented in Laravel that allows users to manage their support tickets efficiently. This project demonstrates key functionalities such as ticket management for employees and administrators, notifications, and user authentication, leveraging modern tools and technologies.

## Project Overview

**Ticketly** is designed to facilitate the management of support tickets within an organization. The application distinguishes between regular users and administrators, providing specific features and capabilities to each role:

-   **Employees / Regular Users**:

    -   Create new tickets
    -   View details of their own tickets
    -   Delete their own tickets

-   **Administrators**:
    -   Update the status of tickets (e.g., Open, Processing, Closed)

## Features

-   **User Management**:

    -   Secure authentication with Laravel Breeze
    -   Role-based access control (employees and admins)

-   **Ticket Management**:

    -   Create, view, and delete tickets for regular users
    -   Update ticket status for administrators

-   **Notifications**:
    -   Email notifications via Mailtrap when admins update or delete tickets


-   **Filtering**:
    -   You may filter tickets by priority ( low, medium, high ) for both admins and users

## Tech Stack

-   **Backend & Frontend**: Laravel (Blade Templating Engine)
-   **Database**: MySQL
-   **Authentication**: Laravel Breeze
-   **Styling**: Tailwind CSS
-   **Email**: Mailtrap (for testing purposes)

## Getting Started

To get started with Ticketly, follow these instructions:

### Prerequisites

-   PHP (version 8.0 or higher)
-   Composer
-   MySQL (Install XAMPP for Windows)

### Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/EngMohammedKareem/Ticketly.git
    cd ticketly
    ```

2. **Install dependencies:**

    ```bash
    composer install
    ```

3. **Set up the environment file:**

    ```bash
    cp .env.example .env
    ```

4. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

5. **Configure your database:**

    Edit the `.env` file and set your database connection settings:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ticketly
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. **Run the migrations:**

    ```bash
    php artisan migrate
    ```

7. **Seed the database (optional):**

    ```bash
    php artisan db:seed
    ```

8. **Start the development server:**

    ```bash
    php artisan serve
    ```

### Usage

-   **Access the application:** Open your browser and navigate to `http://localhost:8000`.
-   **Register and log in:** Use Laravel Breeze's authentication system to register and log in.
-   **Create and manage tickets:** Use the application to create, view, and manage your tickets based on your role (employee or admin).

## Laravel Topics Covered

This project provides practical experience with the following Laravel features and concepts:

-   **Routing and Controllers**: Define routes and handle HTTP requests using controllers.
-   **Authentication**: Implement secure user authentication with Laravel Breeze.
-   **Authorization and Policies**: Control access based on user roles and permissions.
-   **Eloquent ORM**: Manage database interactions and relationships using Eloquent models.
-   **Migrations and Seeders**: Define and apply database schema changes and seed initial data.
-   **Blade Templating**: Build dynamic user interfaces using Blade templates.
-   **Styling with Tailwind CSS**: Apply modern styling using Tailwind CSS.
-   **Email Notifications**: Send email notifications for critical actions using Mailtrap (or other mail services).

## Contributing

Contributions are welcome Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License

## Acknowledgements

-   Laravel and its ecosystem
-   Tailwind CSS
-   Mailtrap for email testing
