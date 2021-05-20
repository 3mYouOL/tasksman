# tasksman

Cloned project from [https://github.com/ammezie/tasksman](https://github.com/ammezie/tasksman) implementing Laravel + React

## Getting Started

Clone the project repository by running the command below if you use SSH

```bash
git clone git@github.com:3myouol/tasksman.git
```

If you use https, use this instead

```bash
git clone https://github.com/3myouol/tasksman.git
```

After cloning, run:

```bash
composer install
```

```bash
npm install
```

Duplicate `.env.example` and rename it `.env`

Then run:

```bash
php artisan key:generate
```

### Prerequisites

Be sure to fill in your database details in your `.env` file before running the migrations:

```bash
php artisan migrate
```

And finally, start the application:

```bash
php artisan serve
```

and visit [http://127.0.0.1:8000](http://127.0.0.1:8000) to see the application in action.

## Built With

* [Laravel](https://laravel.com) - The PHP Framework For Web Artisans
* [React](https://reactjs.org) - A JavaScript library for building user interfaces
* [Tailwind CSS](https://tailwindcss.com) - A utility-first CSS framework for rapid UI development (Pending)
