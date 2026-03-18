# Sistema de Registro de Usuarios

Sistema web para registro y autenticación de usuarios,
desarrollado en PHP con base de datos MySQL.

## Tecnologías utilizadas
- PHP 8.1+
- MySQL 8.0+
- Apache / Nginx

## Requisitos previos
- PHP >= 8.1
- MySQL >= 8.0
- Servidor web (XAMPP, WAMP, Laragon o similar)

## Instalación
1. Clona el repositorio:
   git clone https://github.com/tu-usuario/sistema-registro-php.git
2. Copia el archivo de configuración:
   cp config/database.example.php config/database.php
3. Edita config/database.php con tus credenciales de MySQL.
4. Importa la base de datos:
   mysql -u root -p < sql/schema.sql
5. Abre http://localhost/sistema-registro-php en tu navegador.

## Funcionalidades
- [x] Registro de usuarios
- [x] Login con validación
- [x] Sesiones PHP
- [ ] Recuperación de contraseña (en desarrollo)

## Contribuir
Lee CONTRIBUTING.md para saber cómo contribuir al proyecto.

## Licencia
MIT License - ver LICENSE para más detalles.
