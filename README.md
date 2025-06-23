# TFG-Educacion-Vial

Este proyecto es una aplicación desarrollada con fines educativos y de entretenimiento. Su funcionamiento está ligado a un entorno local con servidor y base de datos. A continuación se detallan las instrucciones para su uso y configuración.

---

## 🛡️ Derechos de autor

© 2025 - Todos los derechos reservados para el creador original de este proyecto.

Este software está protegido por la **Licencia Creativa de Propiedad Total (LCPT)**, una licencia personalizada que otorga al autor todos los derechos sobre el código fuente, recursos multimedia, estructura de datos y funcionamiento general de la aplicación. Ninguna parte del proyecto podrá ser reproducida, distribuida o modificada sin autorización expresa.

---

## ⚙️ Requisitos para ejecutar la aplicación

Para utilizar correctamente esta aplicación, es necesario tener instalado un **servidor local**. Se recomienda utilizar [XAMPP](https://www.apachefriends.org/es/index.html) por su simplicidad y compatibilidad.

---

## 🚀 Pasos para ejecutar la aplicación localmente

### 1. Descargar e instalar XAMPP

- Ve a: [https://www.apachefriends.org/es/index.html](https://www.apachefriends.org/es/index.html)
- Descarga la versión de XAMPP compatible con tu sistema operativo.
- Instala y abre el **Panel de Control de XAMPP**.
- Asegúrate de activar los módulos de:
  - **Apache**
  - **MySQL**

### 2. Colocar los archivos del proyecto

- Dentro de la carpeta donde instalaste XAMPP, ubica la carpeta `htdocs`. Por lo general, está en: 
C:\xampp\htdocs\

- Copia todos los archivos del proyecto (los que venían en la carpeta Game) dentro de `htdocs`, ejemplo:
C:\xampp\htdocs\Game\

- Así podrás acceder a la app desde tu navegador con:
http://localhost/Game

### 3. Crear la base de datos y tabla en MySQL

1. Abre tu navegador y accede a:

http://localhost/phpmyadmin

2. Crea una nueva base de datos con el nombre: game



3. Luego, dentro de esa base de datos, crea la tabla `users` con la siguiente estructura SQL:

```sql
CREATE TABLE users (
    userName VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    puntos_nivel1 INT DEFAULT 0,
    puntos_nivel2 INT DEFAULT 0,
    checkpoint VARCHAR(100),
    PRIMARY KEY (userName)
);