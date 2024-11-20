# Инструкция по запуску
## git clone
     https://github.com/kkatyalight/EnemerPhpTest.git
## cd / --> в главной папке проекта
    npm install
    composer install
## Скопируйте .env.example в .env
# Билд
    npm run dev
    php artisan key:generate
    php artisan migrate
    php artisan server
