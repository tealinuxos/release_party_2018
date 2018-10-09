# Release Party 2018
> Web Project __Release Party - TeaLinuxOSX__ : **Dandelion**


## Server Requirement
* Laravel 5.1
* PHP v.5.5.9^
* Apache2
* Smtp Gmail

## Installation
### Cloning Repository
```
git clone {{REPO_URL}}
``` 

### Configure

open your webserver database like example `localhost/phpmyadmin` then make a database __named__ : **release_party_2018** after creating database, open your project with `cd {{release_party_2018}}` directory then configure some file below

> environment file : `.env`

copy the `.env.ex` to `.env` then open `.env` then edit on line below

#### Database Configure
```
DB_HOST=localhost
DB_DATABASE={{DB_NAME}}
DB_USERNAME={{DB_USER}}
DB_PASSWORD={{DB_PASS}}
```

change the {{DB_NAME}} with you database was created, {{DB_USER}} with your database user and {{DB_PASS}} as the password of your user

#### Email Configure
on this below configuration created is to make this Apps can do send Email to Participant 
```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME={{EMAIL_USER}}
MAIL_PASSWORD={{EMAIL_PASS}}
MAIL_ENCRYPTION=tls
MAIL_FROM={{EMAIL_USER}}
MAIL_NAME={{SUBJECT}}
```
as like on above configuration, you must change all variable with your own

##### Note:
* delete {{}} symbol, ex {{DB_USER}} to DB_USER
* if your database user is root, change the DB_USER to root. ex : `DB_USERNAME=root`
* always run `php artisan config:cache` after update `.env` file 

### Vendor Install
laravel build with the packages that use from vendor, for next configuration we must download the packages with command line below
```
composer install
```

after `composer install` we can see the folder `vendor`, and if you can see inside you'll see so many packages from many vendor. just go on, and you'll see the magic happen

### Generating key
if you see `.env` file, that was line at `APP_KEY=` was empty value, this Apps Can't __RUN__ when the key was empty, so you must insert the key value, just type command like below
```
php artisan key:generate
```
and cek file `.env` again, you'll see the key was generated automatically.

### Migrating Table
in **Laravel** you can simply migrate the table that you was created on `database/migrations` folder to your own `database`, simply command
```
php artisan migrate
```
and you'll see `output`
> Migration table created successfully.

this mean you successfully migrate your table to your database

### Seeding Data
seeding data mean you insert data to your database table, config file on `database/seeds` folder, so if you was set the dataset on your table you can simply seed the table like command below
```
php artisan db:seed
```
open your database, and see the table `record`

## Running Server Locally
```
php artisan serve
```
open in your browser `localhost:8000`