<?php

try {
        $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
               echo "Conexión OK";
            } catch (PDOException $e) {
             echo 'Error: ' . $e->getMessage();
            }

  ?>