# Laravel Product Management API

Este proyecto es una API REST creada con Laravel para gestionar los productos. Proporciona un CRUD completo (Crear, Leer, Actualizar, Eliminar) de productos utilizando una base de datos MySQL.

## Requisitos

- PHP >= 8.1
- Composer
- MySQL
- Extensiones PHP necesarias:
  - OpenSSL
  - PDO
  - Mbstring
  - Tokenizer
  - XML
  - Ctype
  - JSON

## Instalación

Sigue estos pasos para configurar el proyecto en tu entorno local:

### 1. Clonar el repositorio

```bash

Clona el repositorio en tu máquina local:

git clone https://github.com/luisPC22/ludik_crud_laravel_products.git 

```

### 2. Entrar en el directorio del proyecto:

```bash

cd laravel_crud_products

```

### 3. Instalar dependencias

```bash

composer install

```

### 4. Configurar el entorno

```bash

cp .env.example .env
Abre el archivo .env y configura los detalles de la base de datos MySQL. Asegúrate de que los siguientes valores estén correctos:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ludik_crud
DB_USERNAME=tu_usuario_mysql
DB_PASSWORD=tu_contraseña_mysql

```

### 5. Generar la clave de la aplicación

```bash

php artisan key:generate

```

### 6. Crear la base de datos

```bash

CREATE DATABASE ludik_crud;

```

### 7. Ejecutar las migraciones

```bash

php artisan migrate

```

### 8. Iniciar el servidor

```bash

php artisan serve

```

### Endpoints de la API

```bash

GET /api/products: Obtener todos los productos.
POST /api/products/store: Crear un nuevo producto.
GET /api/products/show/{id}: Obtener un producto por su ID.
PUT /api/products/update/{id}: Actualizar un producto existente.
DELETE /api/products/destroy/{id}: Eliminar un producto.

```