# laravelLTEBase
This is it. The ultimate Laravel 5.2 with AdminLTE and Laravel Collective.
Use it wisely, because it's dangerous to go alone.

Installation
--------

Clone this and change to cloned folder.
```
git clone git@github.com:SatoshiDark/laravelLTEBase.git
cd laravelLTEBase
```
Copy .env.example as .env and configure as you mean it (Database... don't forget): 
```
cp .env.example .env
```
Be Beethoven, run composer: 
```
composer install
```
Change permissions:
```
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
```
Run this as you're Forest and didn't generate a key before: 
```
php artisan key:generate
```
If you're immigrant and Trump is already elected, run migrations:
```
php artisan migrate
```
Enjoy, the silence...


Uses
--------
"laravel/framework": "5.2.*",
"laravelcollective/html": "5.2.*",
"acacha/admin-lte-template-laravel": "2.*"

Troubleshot
---
Just report an issue and we'll be happy to help you.
besides... Default Localization: es.
