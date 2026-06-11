# 📋 CRUD de Tareas — Laravel

Aplicación web para gestionar tareas desarrollada con Laravel 13 y PostgreSQL.
Proyecto realizado como práctica de aprendizaje de PHP y Laravel.

## 🚀 Tecnologías usadas

- **PHP** 8.5.6
- **Laravel** 13
- **PostgreSQL**
- **Bootstrap** 5.3
- **Eloquent ORM**

## ✨ Funcionalidades

- ✅ Listar todas las tareas
- ✅ Crear una nueva tarea
- ✅ Editar una tarea existente
- ✅ Eliminar una tarea
- ✅ Marcar tarea como completada
- ✅ Badge de estado (Pendiente / Completada)

## 📦 Instalación

### 1. Clonar el repositorio
```bash
git clone https://github.com/tu-usuario/crud-tareas.git
cd crud-tareas
```

### 2. Instalar dependencias
```bash
composer install
```

### 3. Copiar el archivo de configuración
```bash
cp .env.example .env
```

### 4. Configurar la base de datos en `.env`
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=crud-tareas
DB_USERNAME=postgres
DB_PASSWORD=tu_password
```

### 5. Generar la clave de la aplicación
```bash
php artisan key:generate
```

### 6. Ejecutar las migraciones
```bash
php artisan migrate
```

### 7. Levantar el servidor
```bash
php artisan serve
```

### 8. Abrir en el navegador
```
http://127.0.0.1:8000/tareas
```

## 📁 Estructura del proyecto

```
crud-tareas/
├── app/
│   ├── Http/Controllers/
│   │   └── TareaController.php   ← Lógica del CRUD
│   └── Models/
│       └── Tarea.php             ← Modelo de la tabla tareas
├── database/
│   └── migrations/
│       └── xxxx_create_tareas_table.php  ← Estructura de la tabla
├── resources/
│   └── views/
│       └── tareas/
│           ├── index.blade.php   ← Lista de tareas
│           ├── create.blade.php  ← Formulario de creación
│           └── edit.blade.php    ← Formulario de edición
└── routes/
    └── web.php                   ← Rutas de la aplicación
```

## 🗄️ Estructura de la base de datos

### Tabla `tareas`

| Columna | Tipo | Descripción |
|---|---|---|
| id | SERIAL | ID autoincremental |
| titulo | VARCHAR | Título de la tarea |
| descripcion | TEXT | Descripción opcional |
| completada | BOOLEAN | Estado de la tarea |
| created_at | TIMESTAMP | Fecha de creación |
| updated_at | TIMESTAMP | Fecha de actualización |

## 🛠️ Comandos útiles

```bash
php artisan serve          # Levantar el servidor
php artisan migrate        # Ejecutar migraciones
php artisan migrate:fresh  # Borrar y recrear todas las tablas
php artisan route:list     # Ver todas las rutas
php artisan tinker         # Consola interactiva
```

## 📝 Lo que aprendí en este proyecto

- Instalación y configuración de Laravel
- Arquitectura MVC (Model - View - Controller)
- Rutas con Route::resource
- Migraciones y modelos con Eloquent ORM
- Vistas con Blade templates
- CRUD completo con PostgreSQL
- Diseño con Bootstrap 5

---

Desarrollado por **Facundo** — 2026 🚀
