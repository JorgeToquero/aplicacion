
📚 Aplicación Web de Reserva de Libros 🚀
Este repositorio contiene el código de una aplicación web diseñada para la reserva y gestión de un catálogo de libros. La aplicación soporta tres roles de usuario distintos para un control de acceso granular.

✨ Roles y Servicios de la Aplicación
La aplicación ofrece servicios diferenciados según el rol del usuario:

👥 Invitados (No Registrados)
Visualizar todos los libros.

Permitir registrarse en el sistema.

Permitir autenticarse en el sistema.

👤 Usuarios Registrados
Reservar libros.

Cancelar sus propias reservas.

Ver la disponibilidad de los libros.

👑 Administrador (Parte de Administración)
El administrador, una vez autenticado, accede a la parte de gestión para realizar las siguientes acciones:

Eliminar usuarios.

Crear libros.

Borrar libros.

Cancelar reservas de todos los usuarios.

💻 Instalación y Configuración
Sigue estos pasos para instalar y poner en funcionamiento la aplicación web:

1. Preparación de Archivos
Descomprimir el fichero.

Colocar la carpeta con su contenido en el directorio del servidor web (htdocs o similar).

2. Configuración de la Base de Datos
Edita el fichero config.php  para establecer los parámetros de conexión:


$server: La IP del servidor o localhost.


$user: Usuario con privilegios para la base de datos.


$pass: Contraseña para el usuario de la base de datos.


$Database: Nombre de la base de datos que se va a crear.

3. Creación de la Base de Datos y Administrador
Una vez configurado config.php, ejecuta el fichero instalar.php para crear toda la base de datos.

4. Credenciales de Administrador por Defecto
Tras la instalación, se creará un usuario administrador por defecto  con las siguientes credenciales:


Login: admin 

Password: 1234 

🗃️ Estructura de la Base de Datos
La aplicación utiliza la siguiente estructura de tablas para gestionar la información:

Tabla	Campos
Usuarios	

Login, password, rol, nombre, apellidos.

Libros	

titulo, isbn, categoría, autor, editorial.
<img width="1441" height="980" alt="Captura de pantalla 2025-12-01 222844" src="https://github.com/user-attachments/assets/869e1964-7072-472e-830f-d2c269797329" />




Reserva_libros	login, isbn, fecha.
🧑‍💻 Autor
[https://github.com/JorgeToquero/Reserva-Libros] - Tu Perfil de GitHub

