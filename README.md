1.⁠ ⁠Que crees que hace el metodo create de la clase Schema:

El metodo create se utiliza para crear una nueva tabla en la base de datos. Dentro de la migracion, defines la estructura de la tabla (columnas, tipos de datos, claves, etc.).
	
2.⁠ ⁠Que crees que hace $table->string('email')->primary();?

Este codigo crea una columna llamada email de tipo string (cadena de texto) y la establece como clave primaria de la tabla, lo que significa que el valor en esta columna debe ser unico y no nulo.
	
3.⁠ ⁠Cuantas tablas hay definidas? Indica el nombre de cada tabla.
	
Para obtener la lista de tablas en tu base de datos, puedes usar el siguiente comando en MariaDB: SHOW TABLES; 
Este comando mostrara todas las tablas en la base de datos seleccionada (por ejemplo, test1 o la base de datos predeterminada). La cantidad de tablas definidas dependera de las migraciones que se hayan ejecutado en tu proyecto Laravel.

Ej.5 ¿Cuántas tablas aparecen?

Nueve tablas.

Ej.6 Indica qué realiza los siguientes comandos:

php artisan migrate: Ejecuta migraciones pendientes.
php artisan migrate:status: Muestra el estado de las migraciones.
php artisan migrate:rollback: Revierte la última tanda de migraciones.
php artisan migrate:reset: Revierte todas las migraciones.
php artisan migrate:refresh: Revierte todas las migraciones y las vuelve a ejecutar.
php artisan make:migration: Crea un nuevo archivo de migración.
php artisan migrate --seed: Ejecuta migraciones y luego ejecuta los seeders.

Ej.8 ¿Qué pasos debemos dar si queremos añadir el campo $table->st('apellido'); a la tabla alumnos del ejercicio anterior?

php artisan make:migration add_apellido_to_alumnos_table --table=alumnos
Este comando generará un archivo en database/migrations
Lo abrimos y lo editamos.

 
