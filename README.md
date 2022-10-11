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


## File Structure

```
blog.semikolon.co
├── app\
│   │
│   ├── Actions\
│   │   ├── Fortify\
│   │   │   ├── CreateNewUser.php
│   │   │   ├── PasswordValidationRules.php
│   │   │   ├── ResetUserPassword.php
│   │   │   ├── UpdateUserPassword.php
│   │   │   └── UpdateUserProfileInformation.php
│   │   │
│   │   └── Jetstream\
│   │       ├── AddTeamMember.php
│   │       ├── CreateTeam.php
│   │       ├── DeleteTeam.php
│   │       ├── DeleteUser.php
│   │       ├── InviteTeamMember.php
│   │       ├── RemoveTeamMember.php
│   │       └── UpdateTeamName.php
│   │
│   ├── Console\
│   │   └── Kernel.php
│   │
│   ├── Exceptions\
│   │   └── Handler.php
│   │
│   ├── Http\
│   │   ├── Controllers\
│   │   │   ├── APIController.php
│   │   │   ├── AdminController.php
│   │   │   ├── Controller.php
│   │   │   ├── GitHubController.php
│   │   │   ├── GoogleController.php
│   │   │   ├── HomeController.php
│   │   │   ├── LinkedinController.php
│   │   │   └── UserController.php
│   │   │
│   │   ├── Middleware\
│   │   │   ├── Authenticate.php
│   │   │   ├── EncryptCookies.php
│   │   │   ├── IsUserAdmin.php
│   │   │   ├── PreventRequestsDuringMaintenance.php
│   │   │   ├── RedirectIfAuthenticated.php
│   │   │   ├── TrimStrings.php
│   │   │   ├── TrustHosts.php
│   │   │   ├── TrustProxies.php
│   │   │   └── VerifyCsrfToken.php
│   │   │
│   │   └── Kernel.php
│   │
│   ├── Models\
│   │   ├── Giveaway.php
│   │   ├── Membership.php
│   │   ├── Message.php
│   │   ├── Team.php
│   │   ├── TeamInvitation.php
│   │   ├── User.php
│   │   ├── blog.php
│   │   ├── blog_category.php
│   │   ├── blog_subcategory.php
│   │   ├── report.php
│   │   └── subscriber.php
│   │
│   ├── Policies\
│   │   └── TeamPolicy.php
│   │
│   ├── Providers\
│   │   ├── AppServiceProvider.php
│   │   ├── AuthServiceProvider.php
│   │   ├── BroadcastServiceProvider.php
│   │   ├── EventServiceProvider.php
│   │   ├── FortifyServiceProvider.php
│   │   ├── JetstreamServiceProvider.php
│   │   └── RouteServiceProvider.php
│   │
│   └── View\
│       └── Components\
│           ├── AppLayout.php
│           └── GuestLayout.php
│
├── assets\
│   │
│   ├── css\
│   │   │
│   │   ├── maps\
│   │   │   └── style.css.map
│   │   │
│   │   ├── custom-styles.css
│   │   └── style.css
│   │
│   ├── fonts\
│   │   ├── Assistant\
│   │   │   ├── ..Font files
│   │   │
│   │   └── Rubik\
│   │       ├── Rubik-Black.ttf
│   │       ├── Rubik-Bold.ttf
│   │       ├── Rubik-Light.ttf
│   │       ├── Rubik-Medium.ttf
│   │       └── Rubik-Regular.ttf
│   │
│   ├── images\
│   │   ├── auth\
│   │   │
│   │   ├── carousel\
│   │   │
│   │   ├── dashboard\
│   │   │
│   │   ├── faces\
│   │   │
│   │   ├── faces-clipart\
│   │   │
│   │   ├── file-icons\
│   │   │   ├── 128\
│   │   │   │
│   │   │   ├── 256\
│   │   │   │
│   │   │   ├── 512\
│   │   │   │
│   │   │   └── 64\
│   │   │
│   │   │
│   │   ├── lightbox\
│   │   │
│   │   ├── samples\
│   │   │   ├── 1280x768\
│   │   │   │
│   │   │   ├── 300x300\
│   │   │
│   │   ├── screenshots\
│   │   │
│   │   └── sprites\
│   │
│   ├── js\
│   │   ├── ace.js
│   │   ├── alerts.js
│   │   ├── avgrund.js
│   │   ├── bootstrap-table.js
│   │   ├── bt-maxLength.js
│   │   ├── c3.js
│   │   ├── calendar.js
│   │   ├── chart.js
│   │   ├── chartist.js
│   │   ├── circle-progress.js
│   │   ├── clipboard.js
│   │   ├── codeEditor.js
│   │   ├── codemirror.js
│   │   ├── context-menu.js
│   │   ├── cropper.js
│   │   ├── dashboard.js
│   │   ├── data-table.js
│   │   ├── db.js
│   │   ├── desktop-notification.js
│   │   ├── dragula.js
│   │   ├── dropify.js
│   │   ├── dropzone.js
│   │   ├── editorDemo.js
│   │   ├── file-upload.js
│   │   ├── flot-chart.js
│   │   ├── form-addons.js
│   │   ├── form-repeater.js
│   │   ├── form-validation.js
│   │   ├── formpickers.js
│   │   ├── google-charts.js
│   │   ├── google-maps.js
│   │   ├── hoverable-collapse.js
│   │   ├── iCheck.js
│   │   ├── inputmask.js
│   │   ├── ion-range-slider.js
│   │   ├── jq.tablesort.js
│   │   ├── jquery-file-upload.js
│   │   ├── js-grid.js
│   │   ├── just-gage.js
│   │   ├── light-gallery.js
│   │   ├── listify.js
│   │   ├── mapael.js
│   │   ├── mapael_example_1.js
│   │   ├── mapael_example_2.js
│   │   ├── maps.js
│   │   ├── misc.js
│   │   ├── modal-demo.js
│   │   ├── morris.js
│   │   ├── no-ui-slider.js
│   │   ├── off-canvas.js
│   │   ├── owl-carousel.js
│   │   ├── paginate.js
│   │   ├── popover.js
│   │   ├── profile-demo.js
│   │   ├── progress-bar.js
│   │   ├── rickshaw.js
│   │   ├── select2.js
│   │   ├── settings.js
│   │   ├── sparkline.js
│   │   ├── tablesorter.js
│   │   ├── tabs.js
│   │   ├── tight-grid.js
│   │   ├── toastDemo.js
│   │   ├── todolist.js
│   │   ├── tooltips.js
│   │   ├── typeahead.js
│   │   ├── widgets.js
│   │   ├── wizard.js
│   │   └── x-editable.js
│   │
│   ├── scss\
│   │   ├── components\
│   │   │   ├── landing-screens\
│   │   │   │   └── _auth.scss
│   │   │   │
│   │   │   ├── loaders\
│   │   │   │   ├── _bar-loader.scss
│   │   │   │   ├── _circle-loader.scss
│   │   │   │   ├── _colored-balls.scss
│   │   │   │   ├── _dot-opacity-loader.scss
│   │   │   │   ├── _flip-square-loader.scss
│   │   │   │   ├── _glowing-ball.scss
│   │   │   │   ├── _jumping-dots-loader.scss
│   │   │   │   ├── _loaders.scss
│   │   │   │   ├── _moving-square-loader.scss
│   │   │   │   ├── _pixel-loader.scss
│   │   │   │   ├── _square-box.scss
│   │   │   │   ├── _square-path-loader.scss
│   │   │   │   └── _variables.scss
│   │   │   │
│   │   │   ├── mixins\
│   │   │   │   ├── _animation.scss
│   │   │   │   ├── _background.scss
│   │   │   │   ├── _badges.scss
│   │   │   │   ├── _blockqoute.scss
│   │   │   │   ├── _breadcrumbs.scss
│   │   │   │   ├── _buttons.scss
│   │   │   │   ├── _cards.scss
│   │   │   │   ├── _misc.scss
│   │   │   │   ├── _no-ui-slider.scss
│   │   │   │   ├── _pagination.scss
│   │   │   │   ├── _popovers.scss
│   │   │   │   └── _tooltips.scss
│   │   │   │
│   │   │   ├── plugin-overrides\
│   │   │   │   ├── _ace.scss
│   │   │   │   ├── _avgrund.scss
│   │   │   │   ├── _c3.scss
│   │   │   │   ├── _chartist.scss
│   │   │   │   ├── _codemirror.scss
│   │   │   │   ├── _colcade.scss
│   │   │   │   ├── _colorpicker.scss
│   │   │   │   ├── _context-menu.scss
│   │   │   │   ├── _data-tables.scss
│   │   │   │   ├── _datepicker.scss
│   │   │   │   ├── _dropify.scss
│   │   │   │   ├── _dropzone.scss
│   │   │   │   ├── _flot-chart.scss
│   │   │   │   ├── _full-calendar.scss
│   │   │   │   ├── _google-charts.scss
│   │   │   │   ├── _icheck.scss
│   │   │   │   ├── _jquery-file-upload.scss
│   │   │   │   ├── _js-grid.scss
│   │   │   │   ├── _justguage.scss
│   │   │   │   ├── _jvectormap.scss
│   │   │   │   ├── _light-gallery.scss
│   │   │   │   ├── _listify.scss
│   │   │   │   ├── _morris.scss
│   │   │   │   ├── _no-ui-slider.scss
│   │   │   │   ├── _owl-carousel.scss
│   │   │   │   ├── _progressbar-js.scss
│   │   │   │   ├── _pws-tabs.scss
│   │   │   │   ├── _quill.scss
│   │   │   │   ├── _rating.scss
│   │   │   │   ├── _select2.scss
│   │   │   │   ├── _summernote.scss
│   │   │   │   ├── _sweet-alert.scss
│   │   │   │   ├── _switchery.scss
│   │   │   │   ├── _tags.scss
│   │   │   │   ├── _tinymce.scss
│   │   │   │   ├── _toast.scss
│   │   │   │   ├── _typeahead.scss
│   │   │   │   ├── _wizard.scss
│   │   │   │   ├── _wysieditor.scss
│   │   │   │   └── _x-editable.scss
│   │   │   │
│   │   │   ├── _background.scss
│   │   │   ├── _badges.scss
│   │   │   ├── _buttons.scss
│   │   │   ├── _cards.scss
│   │   │   ├── _checkbox-radio.scss
│   │   │   ├── _demo.scss
│   │   │   ├── _dropdown.scss
│   │   │   ├── _fonts.scss
│   │   │   ├── _footer.scss
│   │   │   ├── _forms.scss
│   │   │   ├── _functions.scss
│   │   │   ├── _icons.scss
│   │   │   ├── _misc.scss
│   │   │   ├── _preview.scss
│   │   │   ├── _reset.scss
│   │   │   ├── _tables.scss
│   │   │   ├── _tabs.scss
│   │   │   ├── _todo-list.scss
│   │   │   ├── _typography.scss
│   │   │   ├── _utilities.scss
│   │   │   └── _widget-grid.scss
│   │   │
│   │   ├── vertical\
│   │   │   └── _vertical-wrapper.scss
│   │   │
│   │   ├── _layouts.scss
│   │   ├── _navbar.scss
│   │   ├── _sidebar.scss
│   │   ├── _variables.scss
│   │   └── style.scss
│   │
│   └── vendors\
│       ├── chart.js\
│       │   └── Chart.min.js
│       │
│       ├── codemirror\
│       │   ├── ambiance.css
│       │   ├── codemirror.css
│       │   ├── codemirror.js
│       │   ├── javascript.js
│       │   └── shell.js
│       │
│       ├── css\
│       │   └── vendor.bundle.base.css
│       │
│       ├── flag-icon-css\
│       │   ├── css\
│       │   │   └── flag-icon.min.css
│       │   └── flags\
│       │       ├── 1x1\
│       │       └── 4x3\
│       │
│       ├── js\
│       │   ├── bootstrap.min.js.map
│       │   └── vendor.bundle.base.js
│       │
│       ├── jvectormap\
│       │   ├── jquery-jvectormap-world-mill-en.js
│       │   ├── jquery-jvectormap.css
│       │   └── jquery-jvectormap.min.js
│       │
│       ├── mdi\
│       │   │
│       │   ├── css\
│       │   │   ├── materialdesignicons.min.css
│       │   │   └── materialdesignicons.min.css.map
│       │   │
│       │   └── fonts\
│       │       ├── materialdesignicons-webfont.eot
│       │       ├── materialdesignicons-webfont.ttf
│       │       ├── materialdesignicons-webfont.woff
│       │       └── materialdesignicons-webfont.woff2
│       │
│       ├── owl-carousel-2\
│       │   ├── owl.carousel.min.css
│       │   ├── owl.carousel.min.js
│       │   ├── owl.theme.default.min.css
│       │   └── owl.video.play.png
│       │
│       ├── progressbar.js\
│       │   └── progressbar.min.js
│       │
│       ├── pwstabs\
│       │   ├── jquery.pwstabs.min.css
│       │   └── jquery.pwstabs.min.js
│       │
│       ├── select2\
│       │   ├── select2.min.css
│       │   └── select2.min.js
│       │
│       ├── select2-bootstrap-theme\
│       │   └── select2-bootstrap.min.css
│       │
│       └── typeahead.js\
│           └── typeahead.bundle.min.js
│
├── bootstrap\
│   ├── cache\
│   │   └── .gitignore
│   └── app.php
│
├── config\
│   ├── app.php
│   ├── auth.php
│   ├── broadcasting.php
│   ├── cache.php
│   ├── cors.php
│   ├── database.php
│   ├── filesystems.php
│   ├── fortify.php
│   ├── hashing.php
│   ├── jetstream.php
│   ├── laravel-share.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── sanctum.php
│   ├── services.php
│   ├── session.php
│   └── view.php
│
├── database\
│   ├── factories\
│   │   ├── TeamFactory.php
│   │   └── UserFactory.php
│   │
│   ├── migrations\
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   ├── 2014_10_12_100000_create_password_resets_table.php
│   │   ├── 2014_10_12_200000_add_two_factor_columns_to_users_table.php
│   │   ├── 2019_08_19_000000_create_failed_jobs_table.php
│   │   ├── 2019_12_14_000001_create_personal_access_tokens_table.php
│   │   ├── 2020_05_21_100000_create_teams_table.php
│   │   ├── 2020_05_21_200000_create_team_user_table.php
│   │   ├── 2020_05_21_300000_create_team_invitations_table.php
│   │   ├── 2021_06_11_204447_create_sessions_table.php
│   │   ├── 2021_09_13_182818_create_blogs_table.php
│   │   ├── 2021_09_13_183456_create_blog_categories_table.php
│   │   ├── 2021_09_13_183508_create_blog_subcategories_table.php
│   │   ├── 2021_09_13_183554_create_reports_table.php
│   │   └── 2021_09_13_183614_create_subscriberss_table.php
│   │
│   ├── seeders\
│   │   ├── DatabaseSeeder.php
│   │   └── UserSeeder.php
│   └── .gitignore
│
├── public\
│   ├── css\
│   │   ├── animated.css
│   │   ├── app.css
│   │   ├── fontawesome.css
│   │   ├── owl.css
│   │   ├── sidebar.css
│   │   └── templatemo-space-dynamic.css
│   │
│   ├── images\
│   │
│   ├── img\
│   │   ├── bg\
│   │   └── favicon.png
│   │
│   ├── js\
│   │   ├── animation.js
│   │   ├── app.js
│   │   ├── imagesloaded.js
│   │   ├── isotope.js
│   │   ├── owl-carousel.js
│   │   ├── share.js
│   │   ├── tabs.js
│   │   └── templatemo-custom.js
│   │
│   ├── uploads\
│   │   └── ft_img\
│   │
│   ├── vendor\
│   │   ├── bootstrap\
│   │   │   ├── css\
│   │   │   │   ├── bootstrap.min.css
│   │   │   │   └── bootstrap.min.css.map
│   │   │   │
│   │   │   └── js\
│   │   │       ├── bootstrap.bundle.min.js
│   │   │       ├── bootstrap.bundle.min.js.map
│   │   │       └── bootstrap.min.js
│   │   │
│   │   ├── jquery\
│   │   │   ├── jquery.js
│   │   │   ├── jquery.min.js
│   │   │   ├── jquery.min.map
│   │   │   ├── jquery.slim.js
│   │   │   ├── jquery.slim.min.js
│   │   │   └── jquery.slim.min.map
│   │   │
│   │   └── prism\
│   │       ├── prism.css
│   │       └── prism.js
│   │
│   ├── .htaccess
│   ├── favicon.ico
│   ├── index.php
│   ├── mix-manifest.json
│   ├── robots.txt
│   └── web.config
│
├── resources\
│   │
│   ├── css\
│   │   └── app.css
│   │
│   ├── js\
│   │   ├── app.js
│   │   └── bootstrap.js
│   │
│   ├── lang\
│   │   ├── en\
│   │   │   ├── auth.php
│   │   │   ├── pagination.php
│   │   │   ├── passwords.php
│   │   │   └── validation.php
│   │   │
│   │   └── vendor\
│   │       └── laravel-share\
│   │           └── en\
│   │               └── laravel-share-fa5.php
│   ├── markdown\
│   │   ├── policy.md
│   │   └── terms.md
│   │
│   └── views\
│       ├── api\
│       │   ├── api-token-manager.blade.php
│       │   └── index.blade.php
│       │
│       ├── auth\
│       │   ├── confirm-password.blade.php
│       │   ├── forgot-password.blade.php
│       │   ├── login.blade.php
│       │   ├── loginold.blade.php
│       │   ├── register.blade.php
│       │   ├── registerold.blade.php
│       │   ├── reset-password.blade.php
│       │   ├── two-factor-challenge.blade.php
│       │   └── verify-email.blade.php
│       │
│       ├── components\
│       │   ├── footer.blade.php
│       │   ├── header.blade.php
│       │   └── hero.blade.php
│       │
│       ├── errors\
│       │   └── 404.blade.php
│       │
│       ├── layouts\
│       │   ├── admin.blade.php
│       │   ├── adminold.blade.php
│       │   ├── app.blade.php
│       │   ├── appold.blade.php
│       │   ├── gtags.blade.php
│       │   ├── guest.blade.php
│       │   ├── metatags.blade.php
│       │   ├── scripts.blade.php
│       │   └── styles.blade.php
│       │
│       ├── mail\
│       │   ├── Subscribe.blade.php
│       │   └── contactmail.blade.php
│       │
│       ├── modals\
│       │   ├── bookmark.blade.php
│       │   ├── recentblogs.blade.php
│       │   ├── report.blade.php
│       │   ├── reportnew.blade.php
│       │   └── subscribe.blade.php
│       │
│       ├── pages\
│       │   ├── ablogs.blade.php
│       │   ├── blog.blade.php
│       │   ├── blogs.blade.php
│       │   ├── editblog.blade.php
│       │   ├── email.blade.php
│       │   ├── reports.blade.php
│       │   ├── subscriber.blade.php
│       │   ├── thecategory.blade.php
│       │   └── thesubcategory.blade.php
│       │
│       ├── partials\
│       │   ├── _sidebar.blade.php
│       │   └── _teachersidebar.blade.php
│       │
│       ├── profile\
│       │   ├── delete-user-form.blade.php
│       │   ├── logout-other-browser-sessions-form.blade.php
│       │   ├── show.blade.php
│       │   ├── two-factor-authentication-form.blade.php
│       │   ├── update-password-form.blade.php
│       │   └── update-profile-information-form.blade.php
│       │
│       ├── teams\
│       │   ├── create-team-form.blade.php
│       │   ├── create.blade.php
│       │   ├── delete-team-form.blade.php
│       │   ├── show.blade.php
│       │   ├── team-member-manager.blade.php
│       │   └── update-team-name-form.blade.php
│       │
│       ├── vendor\
│       │   └── jetstream\
│       │       ├── components\
│       │       │   ├── action-message.blade.php
│       │       │   ├── action-section.blade.php
│       │       │   ├── application-logo.blade.php
│       │       │   ├── application-mark.blade.php
│       │       │   ├── authentication-card-logo.blade.php
│       │       │   ├── authentication-card.blade.php
│       │       │   ├── banner.blade.php
│       │       │   ├── button.blade.php
│       │       │   ├── checkbox.blade.php
│       │       │   ├── confirmation-modal.blade.php
│       │       │   ├── confirms-password.blade.php
│       │       │   ├── danger-button.blade.php
│       │       │   ├── dialog-modal.blade.php
│       │       │   ├── dropdown-link.blade.php
│       │       │   ├── dropdown.blade.php
│       │       │   ├── form-section.blade.php
│       │       │   ├── input-error.blade.php
│       │       │   ├── input.blade.php
│       │       │   ├── label.blade.php
│       │       │   ├── modal.blade.php
│       │       │   ├── nav-link.blade.php
│       │       │   ├── responsive-nav-link.blade.php
│       │       │   ├── secondary-button.blade.php
│       │       │   ├── section-border.blade.php
│       │       │   ├── section-title.blade.php
│       │       │   ├── switchable-team.blade.php
│       │       │   ├── validation-errors.blade.php
│       │       │   └── welcome.blade.php
│       │       │
│       │       └── mail\
│       │           └── team-invitation.blade.php
│       │
│       ├── dashboard.blade.php
│       ├── flash.blade.php
│       ├── home.blade.php
│       ├── mail.blade.php
│       ├── navigation-menu.blade.php
│       ├── policy.blade.php
│       ├── terms.blade.php
│       ├── welcome.blade - Copy.php
│       └── welcome.blade.php
│
├── routes\
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
│
├── storage\
│   ├── app\
│   │   └── public\
│   ├── ebooks\
│   │   └── 1626435657\
│   ├── framework\
│   │   ├── cache\
│   │   │   ├── data\
│   │   │   │   └── .gitignore
│   │   │   │
│   │   │   └── .gitignore
│   │   │
│   │   ├── sessions\
│   │   │
│   │   ├── testing\
│   │   │
│   │   └── views\
│   │
│   └── logs\
│
├── tests\
│   ├── Feature\
│   │   ├── ApiTokenPermissionsTest.php
│   │   ├── AuthenticationTest.php
│   │   ├── BrowserSessionsTest.php
│   │   ├── CreateApiTokenTest.php
│   │   ├── CreateTeamTest.php
│   │   ├── DeleteAccountTest.php
│   │   ├── DeleteApiTokenTest.php
│   │   ├── DeleteTeamTest.php
│   │   ├── EmailVerificationTest.php
│   │   ├── ExampleTest.php
│   │   ├── InviteTeamMemberTest.php
│   │   ├── LeaveTeamTest.php
│   │   ├── PasswordConfirmationTest.php
│   │   ├── PasswordResetTest.php
│   │   ├── ProfileInformationTest.php
│   │   ├── RegistrationTest.php
│   │   ├── RemoveTeamMemberTest.php
│   │   ├── TwoFactorAuthenticationSettingsTest.php
│   │   ├── UpdatePasswordTest.php
│   │   ├── UpdateTeamMemberRoleTest.php
│   │   └── UpdateTeamNameTest.php
│   │
│   ├── Unit\
│   │   └── ExampleTest.php
│   │
│   ├── CreatesApplication.php
│   └── TestCase.php
│
├── .editorconfig
├── .env.example
├── .gitattributes
├── .gitignore
├── .htaccess
├── .styleci.yml
├── 0f56a1d58ea6b9e3758adf71116c78bb.html
├── Procfile.txt
├── README.md
├── adminer.php
├── artisan
├── composer.json
├── composer.lock
├── index.php
├── mix-manifest.json
├── package-lock.json
├── package.json
├── phpunit.xml
├── robots.txt
├── server.php
├── tailwind.config.js
├── web.config
└── webpack.mix.js
```

## Join Us

Be a part of the SemiKolan Developer's Community by joining our [Discord Server](https://discord.semikolan.co). Here you can discuss about the project or ask any other queries and there will be a lot of folks to help

[![](https://img.shields.io/discord/849036512045039637?color=5865F2&logo=Discord&style=flat-square)](https://discord.semikolan.co)




## Code Contributers

This project exists thanks to all the people who contribute. [[Contribute](CONTRIBUTING.md)].

<a href="https://github.com/semikolan-co/blog.semikolan.co/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=semikolan-co/blog.semikolan.co" />
</a>
