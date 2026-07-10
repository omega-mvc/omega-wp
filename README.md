<p align="center">
    <a href="https://omega-mvc.github.io" target="_blank">
        <img src="https://github.com/omega-mvc/omega-assets/blob/main/images/logo-omega.png" alt="Omega Logo">
    </a>
</p>

<!--
<p align="center">
    <a href="https://omega-mvc.github.io">Documentation</a> |
    <a href="https://github.com/omega-mvc/omega-mvc.github.io/blob/main/README.md#changelog">Changelog</a> |
    <a href="https://github.com/omega-mvc/omega-wp/blob/main/CONTRIBUTING.md">Contributing</a> |
    <a href="https://github.com/omega-mvc/omega-wp/blob/main/CODE_OF_CONDUCT.md">Code Of Conduct</a> |
    <a href="https://github.com/omega-mvc/omega-wp/blob/main/LICENSE">License</a>
</p>
-->

# Omega WP Application

Omega WP Application is a modern WordPress application built on Omega WP Framework, providing a lightweight MVC architecture with dependency injection, service providers, routing, controllers, Eloquent integration, and a structured approach for scalable WordPress plugin development.

## Overview

Omega WP Application is an example project that demonstrates how to build WordPress plugins using a modern PHP application structure.

Instead of placing all logic inside WordPress hooks and procedural files, the application follows an organized architecture based on:

- Application lifecycle management
- Service providers
- Dependency injection
- PSR-4 autoloading
- Controllers
- Routing
- Models and database abstraction
- Separation between framework and application logic

WordPress remains the underlying platform, while the application layer follows modern PHP development practices.

## Requirements

- PHP >= 8.4
- WordPress >= X.X
- Composer

## Installation

Clone the repository inside the WordPress plugins directory:

```bash
cd wp-content/plugins

git clone https://github.com/omega-mvc/omega-wp.git
```

## Install dependencies:

```bash
composer install
```

Activate the plugin from the WordPress administration panel.

## Project Structure

```bash
omega-wp/
│
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Providers/
│   └── ...
│
├── routes/
│
├── resources/
│
├── database/
│
├── composer.json
└── omega-wp.php
```

## Architecture

The application boot process is managed by Omega WP Framework.
The main plugin file only initializes the application and delegates the lifecycle management to the framework.

Example:
```php
$app = ApplicationFactory::createPlugin(
    'omega-wp',
    __DIR__
);
```

Application services are registered through service providers:

```php
$app->register(SomeServiceProvider::class);
```

This keeps the application modular and allows components to be replaced or extended without modifying the core application.

## Features

Currently demonstrated features:

- MVC application structure
- Dependency injection container
- Service providers
- WordPress plugin lifecycle integration
- Eloquent ORM support
- Routing system
- Controllers
- Validation layer
- Composer PSR-4 autoloading

## Relationship with Omega WP Framework

Omega WP Application depends on Omega WP Framework:

omega-wp
    |
    └── omega-mvc/wp-framework

The framework provides the application foundation, while this repository contains the implementation examples and application-specific code.

## Development

Install development dependencies in your framework directory.

```bash
composer install
```

Run code analysis:


```bash
vendor/bin/phpcs
```
## Official Documentation

The official documentation for Omega is available [here](https://omega-mvc.github.io)

## Contributing

If you'd like to contribute to the Omega example application package, please follow our [contribution guidelines](CONTRIBUTING.md).

## License

This project is open-source software licensed under the [GNU General Public License v3.0](LICENSE).