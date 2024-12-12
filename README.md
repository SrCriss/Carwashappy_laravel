# 🚗 **Gestión de Citas para Autolavados**

¡Bienvenido al repositorio de **Gestión de Citas para Autolavados**!  
Este software está diseñado para optimizar la gestión de servicios en autolavados, ofreciendo herramientas eficientes tanto para clientes como para administradores. 🛠️

---

## 📋 **Descripción**

Este sistema facilita a los clientes agendar citas y permite a los administradores gestionar horarios, servicios, productos y el control de inventarios, todo desde una interfaz intuitiva. Ideal para mejorar la organización de tu negocio, hecho a partir de la plantilla de https://github.com/takielias/tablar. 📈

---

## 🎯 **Características**

- **Clientes**: 
  - Reservar citas de forma sencilla.  
  - Interfaz amigable.  

- **Administradores**: 
  -✅ Crear, editar y eliminar citas.  
  -✅ Gestión de servicios con descripciones y costos.  
  -❌ Inventarios y seguimiento de ingresos/egresos. 
  -❌ Enviar emails a clientes.

- **Seguridad**:  
  - Control de acceso mediante rutas protegidas.  
  - Configuración personalizada para evitar riesgos.

---

## 🚀 **Guía de instalación**

### 1️⃣ Clona este repositorio  
```bash
git clone https://github.com/SrCriss/Carwashappy_laravel.git
```

### 2️⃣ Navega al directorio del Proyecto
```bash
cd Carwashappy_laravel
```
### 3️⃣ Instala las dependencias
Asegúrate de tener instalado Composer y Node.js.
Luego ejecuta:
```bash
composer install
npm install
```
### 4️⃣ Configura el entorno
Crea un archivo .env basado en .env.example y configura las variables necesarias:
```bash
cp .env.example .env
```
Después, genera la clave de la aplicación:
```bash
php artisan key:generate
```
### 5️⃣ Compila los activos
```bash
npm run dev
```
### 6️⃣ Ejecuta las migraciones
Configura tu base de datos en el archivo .env con el usuario y contraseña y luego ejecuta:
```bash
php artisan migrate
```
### 7️⃣ Levanta el servidor
```bash
php artisan serve
```
Accede a la aplicación en http://localhost:8000

### Estructura del Proyecto:
📁 app/                # Lógica principal de la aplicación  
📁 public/             # Archivos públicos (CSS, JS, imágenes, etc.)  
📁 resources/          # Vistas Blade, componentes frontend  
📁 routes/             # Rutas de la aplicación  
📁 database/           # Migraciones, seeders y factories  
📁 tests/              # Pruebas automatizadas  

### 🛠️ Dependencias
Framework: Laravel 10.x, 
Frontend: Bootstrap 5, 
Base de Datos: MySQL

### 🔐 Consideraciones de Seguridad
Protege rutas sensibles como /register y /login con middleware exclusivo para administradores.
Asegúrate de que el archivo .env no sea subido al repositorio.
Usa certificados SSL para proteger la transmisión de datos.

### ✨ Contribuciones
¡Las contribuciones son bienvenidas!

Crea un issue para sugerencias o reportar problemas.
Envía un pull request para mejorar el proyecto.

### 📝 Licencia
Este proyecto está bajo la licencia MIT.

### ✅ Conclusion
Este proyecto busca simplificar las operaciones diarias de un autolavado, ofreciendo una herramienta potente y fácil de usar. ¡Gracias por usar nuestro sistema! 🌟