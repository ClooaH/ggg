# Alltså vad mycket nytt

Starta windows terminal

https://laravel.com/docs/8.x/installation

```bash
curl -s https://laravel.build/example-app | bash

cd example-app

./vendor/bin/sail up
```

Gör ett nytt fönster och cd in.

```bash
php artisan migrate
```

https://laravel.com/docs/8.x/starter-kits

```bash
composer require laravel/breeze --dev

php artisan breeze:install

npm install

npm run dev
```

Sådär.

Nu körs docker och annat mys med sail.

Fixa ett alias

```bash
alias sail='bash vendor/bin/sail'
```

Nu är det bara att saila alla kommandon

```bash
sail test
```

