# Portfolio

Personal portfolio project with features such as membership, admin panel and blog.

Tech:

**Frontend:**  [TailwindCSS](https://tailwindcss.com/) , [Livewire](https://laravel-livewire.com/) , [AlpineJS](https://alpinejs.dev/)


**Backend:** [Laravel](https://laravel.com/) , [Breeze](https://github.com/laravel/breeze) , [Eloquent Sluggable](https://github.com/cviebrock/eloquent-sluggable)

## Documentation

- [Portfolio](#portfolio)
  - [Documentation](#documentation)
  - [Requires](#requires)
  - [Installation](#installation)
  - [Configuration](#configuration)
  - [Run Locally](#run-locally)





## Requires


- PHP ^8.0
- MySql / MariaDB
- Apache
- Composer
## Installation

Clone the project:

```bash
git clone https://github.com/fhrvrdr/Portfolio.git
```
Go to the project directory:
```bash
cd Portfolio
```
Install dependencies:
```bash
composer install
```

## Configuration

Create .env file:
```bash
cp .env.example .env
```

Update Database Configration:
```bash
...
DB_DATABASE=laravel_demo
DB_USERNAME=demo
DB_PASSWORD=demo123456
...
```

## Run Locally
Install npm dependencies:
```bash
npm install
npm run dev
```
Run Migrations:
```bash
php artisan migrate
```
Start the server:
```bash
php artisan serve
```