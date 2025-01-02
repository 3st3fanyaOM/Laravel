# Laravel
## Comandos  
composer –version //comprobar que composer está instalado  
  **Añadir carpeta de proyecto en excepciones del antivirus  
composer create-project laravel/laravel app-name //crear proyecto laravel  
	remove existing vcs -> yes (para proyectos nuevos)  
composer install //ejecutar en carpeta de proyecto para comprobar que están todas las     dependencias  
## Configurar .env  
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3307  
DB_DATABASE=gestion_biblioteca  
DB_USERNAME=root  
DB_PASSWORD=  
## Eloquent ORM
### Crear tabla
php artisan make:migration create_nombreTabla_table //crear tabla  
php artisan migrate //guardar cambios  
** en archivo de la tabla, dentro de Schema::create - crear nuevas columnas  
$table->tipo('nombreColumna');  
### Seeders (filas)
php artisan make:seeder NombreTablaTableSeeder //crea la semilla  
php artisan db:seed --class=NombreTablaTableSeeder //inserta los datos
** en archivo de semilla, en function run():  
DB::table('nombreTabla')->insert([  
'campo' => 'datos',  
'campo2'=> 1234,  
]);  






