![Cover Image](.github/images/cover.png)


<div align="center">

![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-orange?style=flat-square&labelColor=0a192f&color=e6f1ff)
![Open Source Love](https://img.shields.io/badge/Open%20Source-%E2%9D%A4-red?style=flat-square&labelColor=0a192f&color=e6f1ff)
![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen?style=flat-square&labelColor=0a192f&color=e6f1ff)
[![GitHub issues](https://img.shields.io/github/issues/semikolan-co/blog.semikolan.co?style=social&labelColor=0a192f&color=a8b2d1)](https://github.com/semikolan-co/blog.semikolan.co/issues)
[![GitHub forks](https://img.shields.io/github/forks/semikolan-co/blog.semikolan.co?style=social&labelColor=0a192f&color=a8b2d1)](https://github.com/semikolan-co/blog.semikolan.co/network)
[![GitHub stars](https://img.shields.io/github/stars/semikolan-co/blog.semikolan.co?style=social&labelColor=0a192f&color=a8b2d1)](https://github.com/semikolan-co/blog.semikolan.co/stargazers)
  
![Hactoberfest](https://img.shields.io/badge/Hactoberfest-%E2%9D%A4-red?style=for-the-badge&labelColor=0a192f&color=64ffda)
![DWoC](https://img.shields.io/badge/DWoC-%E2%9D%A4-red?style=for-the-badge&labelColor=0a192f&color=64ffda)
</div>


# Semikolan Blogs
This Repository contains the source code of Semikolan Blogs at  [blog.semikolan.co](blog.semikolan.co)
Some links for Semikolan blog:
Website: [Semikolan Blog](https://blog.semikolan.co)
Login Page: [Login](https://blog.semikolan.co/login)
Register Page: [Register](https://blog.semikolan.co/register)

You can also join the [Semikolan Discord Server](https://discord.semikolan.co) to have a discussion about the project or ask out about any other queries.

### Table of Contents
- [Installation](#installation)
- [Codebase Structure](#codebase-structure)
- [Contributing Guidelines](CONTRIBUTING.md)
- [Join Us](#join-us)
- [Contributers](#code-contributers)

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

 
Fork this repository and clone it to your local machine.

    git clone https://github.com/<your_username>/blog.semikolan.co.git

Switch to the repo folder

    cd blog.semikolan.co

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate



Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php -S localhost:8000

You can now access the server at http://localhost:8000


### Database seeding

**Populate the database with seed data with relationships which includes users, blogs, categories, subcategories, reports and subscribers. This can help you to quickly start testing  and start using it with ready content.**

Open the DatabaseSeeder and set the property values as per your requirement

    database/seeds/DatabaseSeeder.php

Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh
    

### Codebase Structure

- `app/Http/Models` - Contains all the Eloquent models
- `app/Http/Controllers` - Contains all Controllers
- `app/Http/Middleware` - Contains the  middleware
- `config` - Contains all the application configuration files
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeder
- `routes` - Contains all the routes defined in web.php file
- `tests` - Contains all the application tests (Currently not in use)
- `vendor` - Contains all the third party libraries
- `public` - Contains all the public assets
- `resources/views` - Contains all the views
- `resources/views/layouts` - Contains the layouts



### Environment variables

- `.env` - Environment variables can be set in this file

> ***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.



## Join Us

Be a part of the SemiKolan Developer's Community by joining our [Discord Server](https://discord.semikolan.co). Here you can discuss about the project or ask any other queries and there will be a lot of folks to help

[![](https://img.shields.io/discord/849036512045039637?color=5865F2&logo=Discord&style=flat-square)](https://discord.semikolan.co)




## Code Contributers

This project exists thanks to all the people who contribute. [[Contribute](CONTRIBUTING.md)].

<a href="https://github.com/semikolan-co/blog.semikolan.co/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=semikolan-co/blog.semikolan.co" />
</a>
