Clonar el repositorio
git clone

Moverse a la carpeta del proyecto.
cd nombreRepositorio

Instalamos las dependencias.
composer install

Generamos la Api-key del proyecto.
php artisan key:generate

Configurar la conexion a la base de datos.
Crear el archivo .env y compiar el contenido del .env.example

DB_DATABASE= tu_data_base DB_USERNAME= user_name DB_PASSWORD= tu_password

Corremos las migraciones.
php artisan migrate

Ejecutar el proyecto
php artisan serve