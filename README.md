1. Clonar el repositorio:
   git clone https://github.com/Matiaspmorales/prueba.git

2. Ingresar a la carpeta del proyecto:
   cd prueba

3. Para ejecutar el programa debe tener Docker instalado y en ejecución.

4. Ejecutar este comando para levantar el servicio en segundo plano:

docker-compose up -d --build

6. Link para acceder a la aplicación web una vez levantado el servicio:
  http://localhost:8000

7. Para parar el servicio, borrar los contenedores y eliminar todos los volumenes de datos, ejecute el siguiente comando:
  docker compose down -v

 
