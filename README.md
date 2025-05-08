# CMS Sederhana

A simple Content Management System built with PHP and AdminLTE.

## Features

- User Authentication
- Dashboard with Statistics
- Post Management
- Category Management
- Responsive Admin Interface
- Modern UI with AdminLTE

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Composer
- Web Server (Apache/Nginx)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/cms_sederhanaa.git
cd cms_sederhanaa
```

2. Install dependencies:
```bash
composer install
```

3. Create a copy of the environment file:
```bash
cp .env.example .env
```

4. Configure your database settings in the `.env` file:
```bash
DB_HOST=localhost
DB_NAME=cms_db
DB_USER=your_username
DB_PASS=your_password
```

5. Create the database:
```sql
CREATE DATABASE cms_db;
```

6. Set up your web server:
   - Point your web server's document root to the `public` directory
   - Make sure the web server has write permissions to the necessary directories

7. Access the application:
   - Open your browser and navigate to `http://localhost/cms_sederhanaa/public`
   - Default login credentials:
     - Email: admin@example.com
     - Password: password

## Directory Structure

```
cms_sederhanaa/
├── app/
│   ├── config/
│   ├── controllers/
│   ├── models/
│   └── views/
├── public/
│   ├── assets/
│   └── index.php
├── vendor/
├── .env
├── .env.example
├── composer.json
└── README.md
```

## Security

- All passwords are hashed using PHP's password_hash()
- SQL injection prevention using PDO prepared statements
- XSS protection through proper output escaping
- CSRF protection on forms

## License

This project is licensed under the MIT License - see the LICENSE file for details.