#JobCity Challenge
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Instalation
- git clone https://github.com/gbelot2003/challenge -b master
- cd ./challenge 
- composer install
- cp .env-example .env
- the database is already loaded in this particular case, so you don't need to trigger php artisan migrate, but this is not a good practice in general.
- php artisan db:seed is available if need to restart the database.
- Beware, the users are faked, but the twitter accounts are real for demostration purpose.
### platform setting (optional)
- install **[docker](https://docs.docker.com/install/linux/docker-ce/ubuntu/)** according with this instructions.
- install **[docker-compose](https://docs.docker.com/compose/install/)** according with this instructions.
- cd ./challenge
- git clone https://github.com/laradock/laradock.git
- cd ./laradock
- cp env-example .env
- docker-compose up -d nginx
- docker-compose exec workspace bash

## Importat twitter
the twitter api now needs Oath2 keys, it will be given if need, just set the values in .env

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
