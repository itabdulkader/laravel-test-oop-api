# Laravel Test OOP API

This project is a Laravel-based API that demonstrates object-oriented programming concepts.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/itabdulkader/laravel-test-oop-api.git
    cd laravel-test-oop-api
    ```
 
2. Copy the `.env.example` file to `.env` and configure the database settings:

    ```bash
    cp .env.example .env
    ```

   Update the `.env` file with your database settings:

    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

3. Generate an application key:

    ```bash
    php artisan key:generate
    ```

4. Run the database migrations to create the database schema:

    ```bash
    php artisan migrate
    ```

5. Seed the database with sample data (optional):

    ```bash
    php artisan db:seed
    ```

## Usage

Ensure you import the provided Postman collection file `Laravel Table API.postman_collection.json` into Postman. After importing, you can try sending requests and examining the responses.

## API Documentation

For API documentation, refer to the imported Postman collection. It contains all the available endpoints along with their descriptions and request/response formats.
