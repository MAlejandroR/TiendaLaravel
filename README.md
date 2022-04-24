# Referencias Web

* [Markdown](https://www.markdownguide.org/basic-syntax/)
* [Paleta de colores](https://www.useit.es/blog/6-paletas-de-colores-para-diseno-web)





# Planteando el proyecto

Vamos a realizar un desarrollo incremental de diferentes sprints muy sencillos.

En cada uno de ellos realizaremos un ciclo clásico (análisis-diseño-implementación y pruebas)

Para ello utilizaremos diferentes herramientas que vamos a ir referenciando en el documento

## Proyecto tienda: Objetivo principal

***Realizar una tienda básica con las siguientes especificaciones***:
1. ***RF1*** Un usuario acceder y puede estar logueado o no logueado
 
 ![Requisito funcional 1](./doc/diagramas/png/RF1.png)
***
1. ***RF2*** Un usuario no logueado solo puede ver todos los productos (solo tendrá esta opcion)

 ![Requisito funcional 1](./doc/diagramas/png/RF2.png)
***
3. ***RF3*** Los usuarios se pueden registrar

![Requisito funcional 1](./doc/diagramas/png/RF3.png)
***
5. ***RF4*** Un usuario logueado puede comprar, ver factura y pagar

![Requisito funcional 1](./doc/diagramas/png/RF4.png)
***
6. ***RF5*** La Administradora puede gestionar todas las tablas de la tienda (Productos- Tiendas y Familias)

![Requisito funcional 1](./doc/diagramas/png/RF5.png)
***
4. ***RNF1*** Un ususario logueado va a poser ser admininstrador o no serlo.
    1. El usuario administrador ya existirá en el sistema,

       <img src="./doc/diagramas/png/RNF1.png" width="280" height="280" alt="Requisito no funcional 1">
 ***







## Preparando el sistema para el diseño gráfico y la autenticación

*Para la interfaz gráfica, vamos a utilizar *****(tailwindcss)[https://tailwindcss.com/]****
*Como vamos a utilizar autentificación instalamos el paquete ***breeze*** de laravel que ya trae la instalación de taildwind

```bash
composer require laravel/breeze
php artisan breeze:install
npm install
npm run dev
```
Vemos que nos ha creado una serie de ficheros que carpetas que vamos a comentar.

1. Al requerir ***breeze***, En el fichero ***composer.json*** se ha añadido una línea que indica que vamos a utilizar el paquete ***breeze***
```json
  "require": {
/*....*/
        "laravel/breeze": "^1.9",
/*....*/
    },
```
2. Al ejecutar ***run dev*** se ha descargado todos los paquetes que necesitamos para la ejecución en el front, por lo que aparece la carpeta ***node_modules***  con todos los paquetes para ejecutar en el cliente

   ![node_modules](./doc/imagenes/node_modules.png)

***


### Implementación de los requisitos funciones

1. [RF1:  Pantalla principal y logueo](./doc/paginas/rf1.md)
1. [RF2:  Usuario no logueado visaliza productos](./doc/paginas/rf1.md)
1. [RF3:  Usuarios se registran](./doc/paginas/rf1.md)
1. [RF4:  Usuario logueado compra, ve factura y paga](./doc/paginas/rf1.md)
1. [RFNF:  Usuario puede ser admin no solo logueado](./doc/paginas/rf1.md)
1. [RF5:  Administrador gestiona productos, familias y tiendas](./doc/paginas/rf1.md)

[//]: # ()
[//]: # (2. Diseñar la página principal con legueo)

[//]: # (3. Funcionalidad a login y pasar a página logueado)

[//]: # (#### )

[//]: # ()
[//]: # (# Aplicaciones utilizadas)

[//]: # (1. Dia para diagramar)

[//]: # (2. figma para el diseño de pantallas)

[//]: # (3. [colorhunt]&#40;https://colorhunt.co/palette/fbf8f1f7ecdee9dac154bab9&#41; para seleccionar colores )

[//]: # (4. [Colores Diseño web ]&#40;4. https://www.useit.es/blog/6-paletas-de-colores-para-diseno-web&#41;)

[//]: # ()
[//]: # (## Requisitos)

[//]: # (Menú de navegación)

[//]: # ()
[//]: # (1. Establecer las pantallas )

[//]: # (   1. Pantalla princial )

[//]: # (      1. Header sin logueo)

[//]: # (      2. header con logueo)

[//]: # (      3. menu navegación)

[//]: # (      4. main)

[//]: # (      5. footer)

[//]: # (   2. Panatalla de productos)

[//]: # (      1. Cesta de la compra)

[//]: # (   3. Pantalla de familias)

[//]: # (   4. Pantalla de tiendas)

[//]: # (   5. Pagar &#40;paypall&#41;)

[//]: # (   6. Generar factura &#40;pdf&#41;)

[//]: # ()
[//]: # (## Diseño de mokups o pantallas)

[//]: # ()
[//]: # (1. Pantalla principal sin logueo)

[//]: # (2. )

[//]: # (3. Pantalla principal con logueo)

[//]: # (4. )
