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
### One To One
php artisan make:migration alter_nombreTabla_table //alteramos tabla  
** en function up() Schema::table('tablaActual',function (Blueprint $table){  
$table->unsignedBigInteger('FK_id')->nullable(); //creamos FK  
$table->foreign('tablaActual')->references('id')->on('tablaFK'); //le asignamos FK }  
php artisan migrate //guardar cambios  
Crear modal  
php artisan make:model Objeto  
**crear funcion public function onjeto(){ return $this->belongsTo(Objeto::class);}  
**crear otro modal para tabla FK  
### One To Many
php artisan make:migration alter_tablaActual_table  
Schema::table...  
**añadir en modal de Objeto function prestamo(){ return $this->hasMany(Loan::class);}  
**Decir que un libro tiene muchos préstamos 
**Crear modal préstamos php artisan make:model Loan
**añadir function libro(){ return $this->belongsTo(Libros::class);}  
### Many to Many
php artisan make:migration create_tablaUnion_table //creamos tabla categoria_libro  
**en function up()  
Schema::create('book_category', function (Blueprint $table){  
            //create por que creamos una nueva tabla  
            $table->id();  
            $table->timestamps();  

            //claves foráneas-crear  
            $table->unsignedBigInteger('book_id');  
            $table->unsignedBigInteger('category_id');  

            //decirle que son claves foráneas y de dónde  
            $table->foreign('book_id')->references('id')->on('books');  
            $table->foreign('category_id')->references('id')->on('categories');  

        });  

 **en libros declarar la unión  
 public function categories(){ return $this->belongdToMany(Category::class);}  
 Crear modelo Categoria  
 php artisan make:model BookCategory //crear modal
 **














