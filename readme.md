## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

# 🐾 Sistema de Gestión Veterinaria

Sistema web desarrollado en **PHP con Laravel** para la administración integral de una clínica veterinaria. Permite gestionar mascotas, dueños, citas médicas, historial clínico y servicios.

---

## 🚀 Características

* 🐶 Gestión de mascotas (CRUD)
* 👤 Gestión de dueños
* 📅 Administración de citas veterinarias
* 🩺 Historial clínico de cada mascota
* 💊 Registro de tratamientos y medicamentos
* 💰 Control de pagos y servicios
* 🔐 Sistema de autenticación (login/logout)
* 📊 Panel administrativo con estadísticas

---

## 🛠️ Tecnologías Utilizadas

* 🐘 PHP
* 🚀 Laravel
* 🗄️ MySQL
* 🎨 Blade (motor de plantillas)
* 🌐 HTML, CSS, JavaScript

---

## 📦 Instalación

Sigue estos pasos para ejecutar el proyecto en tu entorno local:

### 1️⃣ Clonar el repositorio

```bash
git clone https://github.com/isairey/tu-repo.git
cd tu-repo
```

---

### 2️⃣ Instalar dependencias

```bash
composer install
npm install
```

---

### 3️⃣ Configurar variables de entorno

Copia el archivo `.env.example`:

```bash
cp .env.example .env
```

Configura tu base de datos en `.env`:

```env
DB_DATABASE=clinica_veterinaria
DB_USERNAME=root
DB_PASSWORD=
```

---

### 4️⃣ Generar clave de aplicación

```bash
php artisan key:generate
```

---

### 5️⃣ Ejecutar migraciones

```bash
php artisan migrate
```

---

### 6️⃣ Ejecutar el servidor

```bash
php artisan serve
```

👉 Accede en: http://localhost:8000

---

## 📁 Estructura del Proyecto

```
app/
 ├── Models/
 ├── Http/
 │   ├── Controllers/
 │   └── Middleware/
resources/
 ├── views/
routes/
 ├── web.php
database/
 ├── migrations/
```

---

## 🔌 Funcionalidades Principales

### 🐾 Mascotas

* Registro, edición y eliminación de mascotas
* Asociación con dueños

### 👤 Dueños

* Gestión de información de clientes
* Historial de mascotas

### 📅 Citas

* Agendar consultas
* Control de fechas y horarios

### 🩺 Historial Clínico

* Registro de diagnósticos
* Tratamientos y medicamentos

---

## 🔐 Seguridad

* Autenticación de usuarios
* Protección CSRF
* Validación de formularios
* Control de acceso por roles

---

## 🧪 Pruebas

```bash
php artisan test
```

---

## 🤝 Contribuciones

1. Fork del proyecto
2. Crear una rama (`git checkout -b feature/nueva-funcionalidad`)
3. Commit (`git commit -m 'Nueva funcionalidad'`)
4. Push (`git push origin feature/nueva-funcionalidad`)
5. Crear Pull Request

---

## 📜 Licencia

Este proyecto está bajo la licencia MIT.

---

## 👨‍💻 Autor

Desarrollado por **Isai Reyes**

```
```
