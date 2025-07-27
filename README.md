# Online Shop Laravel Project

This is a Laravel-based online shop project.

Clone the repository:  git clone https://github.com/OgShas/online-shop.git

composer install

Update .env file with your database credentials. 

run the migrations : php artisan migrate 

## Admin Login

To log in as an admin, update the `users` table:

- Set the `is_admin` column to `1` for the user you want to grant admin access.
