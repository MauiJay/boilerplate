# CodeIgniter 4 Admin Boilerplate

[![Official Website](https://img.shields.io/badge/Official_Website-Visit-107516)](https://808.biz)  
[![YouTube Channel](https://img.shields.io/badge/YouTube_Channel-Subscribe-CC0000)](https://youtube.com/@808biz4?si=kBqv93xorggCujLu)

## Overview ***WORK IN PROGRESS**

This package offers a quick setup for your ci4 projects that includes and admin panel, authorization and authentication, cms and a dynamic menu.

This repository includes:

- CodeIgniter <https://github.com/codeigniter4/CodeIgniter4>
- CodeIgniter Shield <https://github.com/codeigniter4/shield>
- Tailwind <https://tailwindcss.com/>

## Features

- back end
- tailwind css
- Font Awesome
- Access control by Shield
- Dynamic Menu
- Language Support

![Dashboard](.github/app-desktop-demo-screenshot.jpg?raw=true)

## Requirements

Ensure you have the following installed before starting:

- **PHP 8.3** or later
- **CI 4.5.5** or later
- **Composer** command (See
  [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos))
- **Git**

## Install Guide

### 1. Add to a fresh ci4 install or your ci4 project

```bash
composer require mauijay/boilerplate
```

And then "composer update" every time there is a new version of the framework.
When updating, check the release notes to see if there are any changes you need to apply to your app folder.

### 2. Update Dependencies

Eevery time there is a new version of the framework, run the following commands to update dependencies and copy required files:

```bash
composer update
cp vendor/codeigniter4/framework/public/index.php public/index.php
cp vendor/codeigniter4/framework/spark spark
```

### 3. Set Up Environment File

Copy the .env file to the root directory:

```bash
cp env .env
```

Customize env for your application, specifically the baseURL and any database settings.

```bash
database.default.hostname = localhost
database.default.database = ci4
database.default.username = root
database.default.password = root
database.default.port = 3306
```

### Database Config

- Before continuing, make sure you have created a database and your db credentials for MySQL or use SQLite3 has been set in <strong>.env</strong> file.
- Skipping this step will make database migration fail.

```console
php spark 808:install
-or-
php spark:key:generate
php spark migrate --all
php spark db:seed mainseeder
php spark serve
```

### 4. Start the Application

Run the app using the built-in server. If you want to use a custom port (e.g., 9000), specify it using the --port option:

```php
php spark serve --port 8081
```

The application should now be accessible at <http://localhost:8081>.

## Code Standards and Fixing

This project follows PHP coding standards. To automatically fix coding standard issues, run the following command:

```php
composer run fix
```

## Troubleshooting

If you encounter any issues during installation, feel free to open a discussion in the community.