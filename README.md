# Foro
## Pre-requisitos
* Tener credenciales OAuth2 para autentificarte como cliente en Mi Argentina. Esto lo vas a necesitar más adelante. Si no tenés, [acá están los pasos a seguir](https://argob.github.io/mi-argentina/doc/integracion.html)
* Foro está basado en Chatter, un package de Laravel, por lo tanto no está de más leer los [requerimientos y configuraciones propias](https://laravel.com/docs/5.6)
## Requisitos
* PHP >= 7.1.3
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* Base de datos MySQL / PostgreSQL / SQLite
* [Composer](https://getcomposer.org/)
* Git
## Instalación
1) Clonar el repositorio
```sh
$ git clone https://github.com/argob/foro-laravel-id
```
2) Configurar conexión a base de datos y credenciales de Mi Argentina desde el archivo .env
```
# Buscá y modificá las siguientes líneas con los datos correctos
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

# Agregá las siguientes líneas con los datos correspondientes:
MI_ARGENTINA_CLIENT_ID=*****
MI_ARGENTINA_CLIENT_SECRET=*****
MI_ARGENTINA_CALLBACK_URL=*****
```
3) Instalar dependencias
```
$ composer install
```
4) Publish the Vendor Assets files by running:
```
$ php artisan vendor:publish --provider="Argob\MiArgentina\MiArgentinaServiceProvider"
$ php artisan vendor:publish --provider="DevDojo\Chatter\ChatterServiceProvider"
```
5) Now that we have published a few new files to our application we need to reload them with the following command:
```
$ composer dump-autoload
```
6) Crear tablas en la base de datos
```
$ php artisan migrate
```
7) Ingresar al sitio desde un navegador e iniciar sesión para crear el primer usuario, el cuál va a ser el administrador.
8) Ejecutar la siguiente línea para cargar los datos necesarios (roles, permisos, categorias, etc) para poder funcionar correctamente
```
$ php artisan db:seed --class=MiArgentinaForoTablesSeeder
```
