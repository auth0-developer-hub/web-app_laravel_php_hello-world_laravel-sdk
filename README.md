# Laravel/PHP: Starter Web App Code Sample

This PHP code sample demonstrates how to build web applications using Laravel and Blade Templates. This Laravel code sample uses the Auth0 Laravel SDK.

Visit the ["Laravel/PHP Code Samples: App Security in Action"](https://developer.auth0.com/resources/code-samples/web-app/laravel) section of the ["Auth0 Developer Resources"](https://developer.auth0.com/resources) to explore how you can secure Laravel applications written in PHP by implementing user authentication with Auth0.

## Why Use Auth0?

Auth0 is a flexible drop-in solution to add authentication and authorization services to your applications. Your team and organization can avoid the cost, time, and risk that come with building your own solution to authenticate and authorize users. We offer tons of guidance and SDKs for you to get started and [integrate Auth0 into your stack easily](https://developer.auth0.com/resources/code-samples/full-stack).

## Set Up and Run the Laravel Project

Create a `.env` file under the root project directory:

```bash
touch .env
```

Populate it with the following environment variable:

```bash
APP_KEY=
APP_PORT=4040
```

Next, you need to generate the `APP_KEY` for your application. Run the following command to generate it:

```bash
php artisan key:generate
```

This will populate the `APP_KEY` environment variable on your `.env` file with a valid random key.

Install the project's dependencies running the following command.

```bash
composer install
```

Execute the following command to run the Laravel web application using Sail:

```bash
./vendor/bin/sail up
```

Otherwise, use the following command to run the Laravel web application using Composer:

```bash
php artisan serve --port 4040
```
