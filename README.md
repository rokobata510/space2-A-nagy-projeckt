<h1 align="center"> Space2 - A nagyprojeckt </h1>

### A futtatáshoz szügséges terminal adatok

#### Terminal #1
    cd kód
    cd app  
    composer update  VAGY composer update --ignore-platform-reqs VAGY composer install --ignore-platform-reqs
    npm install
    npm run dev

#### Terminal #2
    cd kód
    cd app
    npx vite build
    php artisan key:generate
    php artisan route:clear
    php artisan migrate
    php artisan serve   

### Egyéb infók
+xampp fusson és a .env másolat legyen meg

Undefined array key 0-hiba esetén az adat bázis üres:
phpMyAdmin -> laravel -> imagines -> kép hozzáadása
