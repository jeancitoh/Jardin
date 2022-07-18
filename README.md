<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

* ### Instalación

Haciendo uso de su terminal o consola de comandos...

Instale las dependencias de laravel via composer

composer install


Luego, instale los paquetes npm

npm install

Haga una copia del archivo de variables de entorno

copy .env.example .env


Genere la llave de acceso
php artisan key:generate

#### Consideraciones adicionales

Para hacer uso de la base de datos es importante modificar el archivo .env con los valores que 
correspondan a su configuración Mysql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ejemplo
DB_USERNAME=usuario_1
DB_PASSWORD=password_1


Realize las migraciones de la base de datos para crear las tablas
php artisan migrate


Ejecute el siguiente comando para poblar la base de datos con información.
php artisan db:seed

* ### Ejecutar.

Desde este instante ya es posible conectarse a la aplicación, para ello ejecute en su terminal o consola

php artisan serve

Y luego dirijase a su navegador de internet e ingrese la dirección ip junto al puerto definido en xampp

Ejemplo:
localhost:8000/
