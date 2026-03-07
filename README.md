# Indago Constructora - Plataforma Web y Panel de Administración

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
  <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

## 🏢 Sobre el Proyecto

**Indago Constructora** es una plataforma web moderna, dinámica e interactiva diseñada para representar la identidad corporativa de la empresa y ofrecer un canal directo de comunicación con clientes y prospectos.

Más allá de una simple página de aterrizaje (*Landing Page*), el proyecto ha evolucionado para incluir un **Panel de Administración a medida** que permite la gestión inteligente de los recursos de la empresa, todo construido desde cero priorizando el rendimiento, la seguridad y una estética deslumbrante.

## ✨ Filosofía del Desarrollo

1. **Diseño Visual de Alto Impacto:** Nos alejamos por completo de las plantillas genéricas aburridas. Cada sección de la web pública (y privada) está meticulosamente diseñada utilizando **Tailwind CSS**, garantizando un aspecto moderno, corporativo y premium.
2. **Interacciones Dinámicas:** La web "está viva". Mediante animaciones sutiles, micro-interacciones al pasar el ratón, carruseles de clientes, fondos interactivos ("blobs") y estadísticas animadas, buscamos sorprender al usuario desde el primer segundo sin sobrecargar el navegador.
3. **Alto Rendimiento en el Cliente:** La lógica de interacción está escrita mediante Vanilla JS de nueva generación combinada con directivas de Blade, logrando tiempos de carga increíblemente rápidos.
4. **Administración Propia y Escalable:** Se ha diseñado un **Panel de Administrador nativo** alejado de soluciones rígidas. Nuestro panel de control (`/admin`) comparte el mismo estilo visual moderno, con un control de roles de usuarios basado en estrictos middlewares de seguridad en servidor, preparando el terreno para gestionar futuros apartados (Proyectos, Artículos del Blog, Mensajes de contacto).

## 🚀 Características Principales

### 🌍 Sitio Web Público
* **Estructura multipágina optimizada:** Inicio, Nosotros, Servicios, Proyectos, Blog y Políticas de Privacidad/Cookies.
* **Componentes Blade:** Cabecera responsiva con indicadores de posición, modales informativos (RRSS, WhatsApp), y tarjetas de valores interactivos con efectos especiales (shimmer).
* **Formulario de Contacto Real:** Integrado completamente con notificaciones por correo electrónico (SMTP) que avisa al instante a los administradores y envía un correo de agradecimiento corporativo al cliente potencial.
* **Responsive Total:** Adaptación visual impecable sobre cualquier dispositivo gracias a metodologías de diseño Mobile First.

### ⚙️ Panel de Control Inteligente
* **Rediseño del Inicio de Sesión (`/login`):** Experiencia de acceso en pantalla dividida de nivel empresarial. Incluye fondos desenfocados interactivos que siguen al ratón, etiquetas flotantes (*Floating Labels*) y revelado protegido de contraseñas.
* **Gestión de Usuarios Activos:** Sistema integrado para listar, crear, modificar y dar de baja usuarios de la plataforma organizados desde un modal rápido.
* **Autenticación Basada en Roles (RBAC):** Restricciones de seguridad avanzadas impidiendo a cuentas de nivel `user` acceder o modificar cuentas de compañeros, reservando dichas operativas exclusivamente para la gerencia (`admin`).

## 🛠️ Stack Tecnológico

* **Lenguaje Backend:** PHP 8.x
* **Framework Backend:** Laravel 11
* **Vistas:** Blade Templating Engine
* **Estilos:** Tailwind CSS 3 (con personalización en `tailwind.config.js`)
* **Client-Side:** Vanilla JavaScript (ES6+)
* **Base de Datos:** MySQL
* **Autenticación Base:** Laravel Breeze (Adaptado íntegramente desde las vistas hasta los controladores).

## 💻 Instalación y Entorno Local

Si eres un desarrollador y deseas levantar el proyecto en tu máquina local, sigue los siguientes pasos:

1. **Clonar proyecto e instalar motor backend:**
   ```bash
   composer install
   ```

2. **Instalar dependencias de desarrollo y compilar estilos frontend:**
   ```bash
   npm install
   npm run dev
   ```

3. **Configuración de Variables de Entorno:**
   Duplica el archivo de ejemplo a través de tu terminal (o a mano) y configura tus credenciales de base de datos (`DB_DATABASE`, `DB_USERNAME`, etc.) y correo electrónico (`MAIL_MAILER`, `MAIL_HOST`...):
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Levantar base de datos:**
   ```bash
   php artisan migrate
   ```

5. **Iniciar el servidor web de Laravel:**
   ```bash
   php artisan serve
   ```

Para acceder al Panel de Administrador, el proyecto debe registrar un usuario y asignársele el rol `admin` desde la base de datos para la configuración por primera vez.

---
*Indago Constructora — Innovación y diseño al servicio de la ingeniería.*
