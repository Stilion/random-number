# Random Number Generator API

Simple API service for generating random numbers on Laravel 12.

## Requirements

- PHP 8.2+
- Laravel 12
- Composer 2.X

## Installation

1. Clone the repository:
   git clone https://github.com/Stilion/random-number.git

2. Install dependencies:
   composer install

3. Create a .env file
   cp .env.example .env

4. Generate an application key:
   php artisan key:generate

5. Set up the database in .env and run migrations:
   php artisan migrate

## Launch of the project
php artisan serve

The server will be available at: http://localhost:8000

Tested in the .http file (replacement of POSTMAN in PhpStorm). File added to git in the root folder of the project.

## API Endpoints

### Random number generation
http POST /api/numbers/generate

Generates a random number between 1 and 100.

#### Answer
JSON {
"number_value": 27,
"updated_at": "2025-07-23T15:33:53.000000Z",
"created_at": "2025-07-23T15:33:53.000000Z",
"id": 4
}

### Getting a number by ID
http GET /api/numbers/{id}

#### Parameters
| Параметр | Тип    | Описание           |
|----------|--------|-------------------|
| id       | integer| ID числа в базе    |

#### Answer
JSON {
"id": 1,
"number_value": 81,
"created_at": "2025-07-23T14:54:19.000000Z",
"updated_at": "2025-07-23T14:54:19.000000Z"
}

