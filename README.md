# Overview

Welcome to my API app made with Apiato (Laravel). I am trying to create a sample as a quick start to any robust ReactJs web app. I chose Apiato as the main framework to work on because it offers a well-organized and simple-to-read software architecture pattern named Porto.

For this part of the project, I configured Apiato and created a container named SampleForm. It holds all the business logic to be consumed with my other initial project [sample_form_react](https://github.com/bos21001/sample_form_react) to give power to easier consume APIS which allows it to perform a CRUD operation.

This project is meant to be used with the Laradock framework. It creates the necessary dockers such as PostgreSQL, Nginx, and PHP-fpm as the initial development environment.

## To run this application locally follow the steps bellow:

1. Clone the following repositories in the same directory:

> `git clone git@github.com:bos21001/sample_form_integration.git`

> `git clone https://github.com/Laradock/laradock.git`

2. Copy the the `.env` and `default.conf` from sample_form_integration directory to laradock directory:

> `cp sample_form_integration/laradock/.env.example laradock/.env && cp sample_form_integration/laradock/nginx/sites/default.conf laradock/nginx/sites/default.conf`

3. Go to laradock directory:

> `cd laradock/`

4. Build and initialize the following dockers from laradock:

> `docker-compose build nginx php-fpm workspace postgres && docker-compose up -d nginx php-fpm workspace postgres`

5. Find and copy the ipaddress setted to your postgres docker:

> `docker inspect laradock_postgres_1`

6. Edit your hosts file:

> `sudo nano /etc/hosts`

- Paste the following in the last line:

> 127.0.0.1 sample-form.local api.sample-form.local admin.sample-form.local\
> **[paste your postgres ipAddress here]** db.sample-form.local

```diff
- Make sure to execute all the following commands within the workspace container generated with laradock. Use the following command to acces this container:

docker-compose exec --user=laradock workspace bash
```
7. Go to sample_form_integration directory and copy `.env-example` in the root directory renaming it to `.env`:

> `cd ../sample_form_integration/`

> `cp .env.example .env`

8. Install all composer and npm dependencies:

> `composer install`

> `npm install`

9. Create your KEY_APP:

> `php artisan key:generate`

10. Install passport and add the generated keys to your `.env` file:

> `php artisan passport:install`

> Copy an `Client ID` generated and paste in `CLIENT_WEB_ID` in the `.env`file:
> Copy the `Client Secret` of the `Client ID`you copied and paste in `CLIENT_WEB_SECRET`

11. Set the database:

> `php artisan migrate`

> `php artisan db:seed`

This will generate all the tables and will create an admin user with the following credentials:

email: admin@admin.com\
password: admin

12. Finally Create the documentations of the API endpoints with ApiDocJs using the artisan command:

> `php artisan apiato:apidoc`

[Software Demo Video](http://youtube.link.goes.here) - Coming soon!!

# Relational Database

This project uses PostgreSQL as the Relational Database

It has only one database and make use of the following tables that are generated by the laravel migrations:

### Mainly used in this repository:

- sample_forms
- oauth_auth_codes
- users

### Passive used in this repository:

- failed_jobs
- migrations
- model_has_permissions
- model_has_roles
- notifications
- oauth_access_tokens
- oauth_clients
- oauth_personal_access_clients
- oauth_refresh_tokens
- password_resets
- permissions
- role_has_permissions
- roles

# Development Environment

- Frameworks:
    - Apiato v11
    - Laravel v9
    - Laradock
- Libraries:
    - ApiDocJs

# Useful Websites

* [Porto (Software Architectural Pattern)](https://github.com/Mahmoudz/Porto)
* [Apiato](http://apiato.io/)
* [Laravel](https://laravel.com/)
* [Laradock](https://laradock.io/)
* [ApiDocJs](https://apidocjs.com/#install)

# Future Work

* Create relational tables were users have sample-forms
* Create a home view instead of Apiato home page
