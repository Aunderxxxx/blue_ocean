## Project Guide
0. You must need php version is 7.6 + (Now i developed my php version is 8.1.6)
1. Create new .env file ,copy env example
3. Mysql in db create
3. .env in DB_DATABASE=create_your_mysql_db_name , DB_PASSWORD=
4. composer install
5. php artisan key:generate
6. php artisan migrate
7. php artisan db:seed
6. php artisan serve (Poject is starting )

## Project Feature
1. Admin Login (http://localhost:8000/admin/login)
    - **[email = admin@admin.com]**
    - **[password = password]**
    - **[Admin Feature are (Admin, User)]**
2. User Panel (Register- http://localhost:8000/register) / (Login- http://localhost:8000/login)
