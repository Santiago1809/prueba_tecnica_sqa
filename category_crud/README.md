## PRUEBA TÉCNICA SQA

**Instrucciones**

Este repositorio hace entrega de la prueba técnnica de Laravel y Livewire para el puesto de desarrollador.

Para ejecutar la aplicación, siga los siguientes pasos:

1. Clone el repositorio: https://github.com/Santiago1809/prueba_tecnica_sqa.git
2. Cambie al directorio del proyecto: <pre><code>cd prueba_tecnica_sqa</code></pre>
3. Installar las dependencias: <pre><code>composer install</code></pre>
4. Migre las tablas de la base de datos: <pre><code>php artisan migrate</code></pre>
5. Ejecutar el servidor: <pre><code>php artisan serve</code></pre>

**Para ver el CRUD de las categorías**

1. Cambie al directorio del proyecto de categorías: <pre><code>cd category_crud</code></pre>
2. Installar las dependencias: <pre><code>composer install</code></pre>
3. Migre las tablas de la base de datos: <pre><code>php artisan migrate</code></pre>
4. Ejecutar el servidor: <pre><code>php artisan serve --port=8001</code></pre>

## Pruebas a realizar

Las pruebas a realizar se dividen en dos categorías:

Pruebas funcionales: Estas pruebas verifican que la aplicación funcione según lo previsto.

# Pruebas funcionales

- Cree una nueva categoría.
- Edite una categoría existente.
- Eliminar una categoría.
- Cree un nuevo post.
- Edite un post existente.
- Eliminar un post.

## Observaciones

* La aplicación utiliza Laravel 10 y Livewire.
* La base de datos utilizada es MySQL.
