--------------------------------------------------------------------------------------------------------------------------------
EVA SCOUTS CENTINELAS 113
--------------------------------------------------------------------------------------------------------------------------------
Este proyecto esta realizado con PHP 8, MySQL, HTML5 y BOOTSTRAP 5. 

Para poner a funcionar el aplicativo en el local host es necesario instalar un ambiente XAMPP en la computadora, al instalar este ambiente es necesario guardar la carpeta del proyecto en la siguiente ruta.

C:\xampp\htdocs

Tambien es necesario iniciar los servicios de MySQL y Apache en el XAMPP Control Panel, una ves hecho esto para ver si estan en funcinamineto se debera poseer la base de datos (scouts113FINAL.sql) en PhpMyAdmin y los datos de conexion a la misma en el archivo: conexion.php

mysqli("Dominio o Direccion ip","usuario","contraseña","nombre de la base de datos");

Para ver el aplicativo funcionando solo basta con poner la siguiente url en un navegador:

http://localhost/Scouts

--------------------------------------------------------------------------------------------------------------------------------
CREDENCIALES PARA EL SMTP
	
Host = 'mail.scoutscentinelas113.org';
Username = 'info@scoutscentinelas113.org';
Password = 'CENTINELAS113';
SMTPSecure = 'ssl';
Port = 465;

