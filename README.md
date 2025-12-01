📚 Aplicación Clásica de Reserva de Libros 🚀
Este es el repositorio de una aplicación web de gestión y reserva de libros, desarrollada originalmente hace una década.

Este proyecto ha sido revivido y actualizado para funcionar con las versiones modernas de PHP y bases de datos MySQL, además de recibir una mejora estética con CSS para un diseño más limpio.

✨ Características Principales
Gestión de Catálogo: Permite añadir y eliminar libros del inventario.

Sistema de Reserva: Los usuarios pueden reservar libros disponibles.


Diseño Actualizado: Interfaz mejorada con CSS moderno para una mejor experiencia de usuario.

🛠️ Tecnologías Utilizadas
Este proyecto se basa en el stack clásico de desarrollo web:

Backend: PHP (Versión 7.x o superior recomendada).

Base de Datos: MySQL (para los datos) y MySQLi (como controlador de PHP).

Frontend: HTML5 y CSS3 (con ajustes modernos para la presentación).

💡 Nota de la Restauración
El proyecto original utilizaba el driver obsoleto mysql_ de PHP. Se ha realizado una migración crítica a mysqli_ para garantizar la seguridad y compatibilidad con las versiones actuales de PHP.

💻 Instalación y Uso
Sigue estos pasos para configurar y ejecutar la aplicación en tu entorno local (como XAMPP, WAMP o MAMP).

Prerrequisitos
Necesitas tener un servidor local configurado con:

Servidor Web (Apache).

PHP (Versión 7.x o superior).

MySQL o MariaDB.

1. Configuración de la Base de Datos
Crea una nueva base de datos en tu gestor (por ejemplo, phpMyAdmin) llamada [Nombre_de_tu_BD].

Importa el esquema de la base de datos que se encuentra en [indica dónde está el archivo .sql].

Abre el archivo de conexión de la aplicación (generalmente llamado db_connect.php o similar) y actualiza las credenciales:

PHP

$servername = "localhost";
$username = "[Tu_Usuario_DB]";
$password = "[Tu_Contraseña_DB]";
$dbname = "[libreria]";
2. Configuración de la Aplicación
Clona este repositorio o descarga los archivos:

Bash

git clone https://github.com/JorgeToquero/aplicacion
aplicacion
Mueve la carpeta del proyecto a la carpeta raíz de tu servidor web (htdocs, www, o public_html).

3. Ejecución
Abre tu navegador web.

Navega a la URL: http://localhost/index.php

📝 Contribuciones y Desarrollo
¡Las contribuciones para modernizar aún más la aplicación son bienvenidas! Si deseas contribuir:

Haz un fork del repositorio.

Crea una nueva rama (git checkout -b feature/nueva-funcionalidad).

Realiza tus cambios y haz commit (git commit -m 'feat: Añadir X').

Haz push a la rama (git push origin feature/nueva-funcionalidad).

Abre un Pull Request.

🧑‍💻 Autor
[Tu Nombre o Nickname] - Tu Perfil de GitHub
