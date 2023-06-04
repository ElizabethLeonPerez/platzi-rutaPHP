#

## 01 - Curso Básico de PHP Instalación, Fundamentos y Operadores

Base de programar = Algoritmos

Un programa es un algoritmo en un lenguaje de programación que la computadora entienda.

### ¿Qué es PHP?

Es un lenguaje de scripting de uso general que es especialmente adecuado para el desarrollo web. 
* Del lado del servidor
* hypertext Preprocessor

¡¡Es un preprocesador de HTML!!

### Comandos para la terminal

ls: para listar todo lo que hay en un lugar
mkdir: para crear una carpeta
touch: para crear un archivo
cat: para ver el contenido de un archivo


### Declaración

Para el inicio '<?php'
Para cerrar (para los casos en los que hayas diferentes lenguajes de programación. Ej: PHP y HTML en un mismo archivo) '?>'
Si es php puro no es necesario.


\n significa salto de linea para la terminar
<br> salgo de linea para la web


'.' para concatenar

'echo "No, no. Yo me llamo " . $nombre . " " . $apellido . "<br>";'

'echo "No, no. Yo me llamo $nombre $apellido <br>";'

Cuando usas comillas dobles, php es capaz de leer cualquier variable que se ingrese dentro. 

## Variables y constantes

Una variable es un valor que puede cambiar aún después de declarado

'$nombre = "Carlitos";'

Una constante no puede ser modificada luego de declararse.

## Tipos de datos

#### Numericos: 
* Integer: tipo de dato numerico sin decimales
* FLoat: tipo de dato númerico con decimales
* Double: tipo de datos numerico preciso (puede tener infinitas decimales)

#### Cadenas de caracteres
* Char: letra o simbolo
* String: cadena de caracteres, es decir, es una cadena de muchos valores unidos

#### Booleanos
True o False

#### Sin valor
* Null: no hay valor 
* Undefined: no hay valor especificado


## Casting

Es cuando forzamos que un tipo de dato se convierta en otro tipo de dato.

## Operadores lógicos

### Y (and) &&
 
La unión de dos afimaciones mediante un operador (and).
Si ambas son verdaderas la afirmación completa es verdadera.
Si al menos una de las dos es falsa, la afirmación completa es falsa.

### o (or) ||

Verifica si almenos una de las afimaciones es cierta. 

### No (not) !$valor

se usa para invertir el estado de una afirmación
