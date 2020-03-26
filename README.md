# Arquitectura de software MVC (Modelo, vista y controlador)
Es un patrón de arquitectura de software, se encarga de separar los datos y la lógica de negocio de
un software.

Para esto se utilizan tres componentes principales que son los Modelos, las Vistas y los
Controladores.
   
<p align="center"> 
    <img src="https://udemy-images.s3.amazonaws.com/redactor/raw/2017-09-26_04-11-36-6792e3e35f38e376cbf40cf0303af0d5.png">
</p>


## 📌 ¿Porque utilizar esto?
  * Principalmente es una arquitectura diseñada por expertos.
  * La mayoría de las grandes plataformas la utiliza (con versiones mejoradas).
  * Permite el desarrollo ágil, modular, mantenible y escalable.
  * Facilita el trabajo en equipo.

## 📌 ¿Cómo funciona?
Este patrón se basa en las ideas de reutilización de código, separación de conceptos. 
Básicamente
incluye algunos de los pilares de la programación orientada a objetos por ejemplo la abstracción,
encapsulamiento, herencia y polimorfismo.
  
### 📍 Modelo
Es una representación de la lógica del software con la cual se administrará todos los datos de un
software. 
``` 
    Toda la gestión de accesos, permisos y manipulación de los datos se debe controlar
    desde los modelos. 
``` 
Además de ello se encarga de retornar información a las vistas por medio de los controladores.

### 📍 Vista
El componente mas cercano al usuario final y no menos importante, este se encarga de presentar
la información en una interfaz gráfica adecuada para presentarse como salida de información.
No siempre requiere datos de los modelos puede ser vistas con información estática o dinámica.

### 📍 Controlador
Es el intermediario entre la vista y el modelo, se encarga de recibir las peticiones de los usuarios
para gestionar el flujo del software retornando al cliente una respuesta.

```
    Pensemos que Google esta desarrollado con la arquitectura de software (MVC).
    Un usuario hace una petición desde el navegador a la siguiente URL: "www.google.com"
```

Según esa petición el controlador valida que hacer, luego retorna un respuesta que en este caso es
una simple vista sin información de una base de datos, una vista estática.

![Buscador de google](https://upload.wikimedia.org/wikipedia/commons/9/96/Google_web_search.png)

```
    Otro ejemplo podría ser hacer una búsqueda en Google, por ejemplo, busquemos “PHP”.
    "https://www.google.com/search?q=PHP"
```
Con la arquitectura MVC el controlador recibe la petición en este caso recibe un parámetro “q”
con el valor a consultar “PHP”.
Ahora el controlador debe hacer una solicitud a la base de datos para ello debe interactuar con
algún Modelo en este caso supongamos el modelo “Google” que tiene unos métodos establecidos
para retornar información, este retorna los datos al controlador luego el controlador retorna una
vista con la información y esta será presentado por medio del navegador al usuario.


## 📌 Glosario de términos
* **Patrón:** Conjunto de elementos o reglas que son repetitivas en diferentes aspectos.
* **Arquitectura de software:** Son guías generales con base a las cuales se pueden resolver los
problemas, por ejemplo, los planos de un edificio en construcción; busca proporcionar un marco
definido de trabajo.

## 📌 ¿Cómo instalar este software de ejemplo? 
Hace unos años había creado un CRUD que se encuentra en el este repositorio [PHP-CRUD-MVC-PDO](https://github.com/ofaaoficial/PHP-CRUD-MVC-PDO/) hay puede ver el paso a paso para instalar además un ejemplo más básico de esta arquitectura.

_Un concejo es que revise ese repositorio, además compare los cambio que le he hecho a la arquitectura y así pueda comprender mejor, buenas practicas que he implementado._

## 📐 Trabajo final a aprendices

### Planteamiento del problema

Se encuentran problemas de comunicación en la comunidad que
integra el _Colegio Pepito Pérez_ es de vital importancia, debido a que
se necesita que tanto los estudiantes, docentes, obreros y personal
administrativo conozcan la filosofía del Colegio y también los procesos
que se están llevando a cabo, que son de interés para los que hacen
vida en el mismo.

**Debe desarrollar un sistema administrable** en el cual se podrán ver
todas las _publicaciones_, _noticias_ o _eventos_ importantes para el colegio.
Se debe hacer un buen análisis de la información ya que en el futuro
se requiere tener la _información para reportes_.

* ¿Cuantas publicaciones se han realizado, quien las ha realizado?
* ¿En qué rango de fechas se hicieron más publicaciones?
* ¿Cuáles son las publicaciones con más vistas?

Además, el diseño a nivel visual debe contar con experiencia de
usuario, usabilidad y diseño atractivo para el público objetivo
incorporando buenas prácticas de modelado y desarrollo del sistema.

Los usuarios se podrán registrar para opinar las publicaciones.
Entregables:
* Diagrama de clases.
* Diccionario de datos.
* Sistema desarrollado con la arquitectura MVC con programación orientada a objetos.

## 👨🏻‍💻 Soluciones de aprendices
* https://github.com/JeniferTriana/CMS_JENIFERTRIANA_1821630
* https://github.com/royjuni/cms_royer_guerrero_1821630
* https://github.com/MarioSkate12/CMS_MarioBeltran_1821630_G3.git
* https://github.com/Jhounk/CMS_JohanCasallas-MarioBeltran
* https://github.com/Andres-talero/CRUD-CMS  
* https://github.com/yeimy1721/CMS_YeimyTorres_1821630-.git
* https://github.com/DaladierU16/CMD_Daladier_Uribe_1821630

## License 🔥
Copyright © 2019-present [Oscar Amado](https://github.com/ofaaoficial) 🧔
