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


## Way of Working

Este apartado detalla los requisitos tecnológicos necesarios para trabajar en el proyecto y los pasos concretos para tener la aplicación lista para desarrollo.

### Requisitos Tecnológicos

1. **Herd**: Utilizado para la gestión de entornos de desarrollo.
2. **Docker**: Para la contenedorización de la aplicación y sus servicios.
3. **Postman**: Herramienta para probar y documentar las API.
4. **PHP**: Versión 8.0 o superior (administrado por Herd).
5. **Composer**: Para la gestión de dependencias de PHP.
6. **Laravel**: Framework PHP utilizado en el proyecto.
7. **Node.js y NPM**: Para la gestión de paquetes frontend y compilación de assets.
8. **Git**: Para el control de versiones.

### Pasos para Configurar el Entorno de Desarrollo

1. **Clonar el repositorio**:
    
    git clone https://github.com/xGuille17/ud3_ejercicios
    cd tu-repositorio
    

2. **Instalar dependencias de PHP**:

    Asegúrate de tener Composer instalado dentro del contenedor Docker, luego ejecuta:

    composer install
    

4. **Levantar los contenedores con Docker**:
   
    Asegúrate de tener Docker configurado y ejecuta:
    
    docker-compose up -d


5. **Correr migraciones de la base de datos**:

    Una vez que los contenedores estén en marcha, ejecuta las migraciones:
    
    docker-compose exec app php artisan migrate
    

6. **Instalar dependencias de Node.js**:
    
    Asegúrate de estar dentro del contenedor adecuado y ejecuta:
    
    npm install
    

7. **Compilar los assets frontend**:
    
    npm run dev
    

8. **Probar la API con Postman**:

    Importa la colección de Postman disponible en el proyecto (si está disponible) para probar las diferentes rutas de la API.



 
