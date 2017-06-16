## Prerequisites

- Composer

  For more information, check [Install Composer](https://getcomposer.org/doc/00-intro.md)
  
- MySQL

  On how to install, read [Install MySQL](https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-14-04)

## Installation
- Create a database and set the database configuration in .env file, using MySQL.
  
```
DB_HOST=localhost
DB_USERNAME='database_user'
DB_PASSWORD='database_password'
DB_DATABASE='database_name'
```

- Then follow the below steps to get digital fortress up and running

1. `git clone https://github.com/sumedharani12/glug_event.git`
2. `sudo chmod 777 -R glug_event`
3. `composer install`
4. `php artisan migrate`


## Accessing the Admin Panel and adding entries
- Register as admin by going to localhost:8000/register
- To access the admin panel goto url localhost:8000/admin
