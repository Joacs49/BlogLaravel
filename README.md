## Levantar Docker

Se debe encontrar ubicado dentro de la carpeta docker y ejecutar el siguiente comando:

-- docker-compose -f compose.dev.yaml up -d

## Apagar Contenedor

Para detener la ejecución de los contenedores se tiene que ejecutar el siguiente comando:

-- docker-compose -f compose.dev.yaml down

## Eliminar el Contenedor

Si se presentaron errores de configuración y deseas eliminar los contenedores para volverlos a generar se debe ejecutar el siguiente comando:

-- docker-compose -f compose.dev.yaml down -v

## Ejecución de la terminal

Para poder ejecutar los comandos propios de laravel se tiene que ejecutar este comando para activar la terminal del contenedor de app:

-- docker-compose -f compose.dev.yaml exec app sh
