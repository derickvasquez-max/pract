<?php
require 'conexion.php';
require 'layout.php';

cabecera('Tabla DEPARTAMENTO');
consulta($pdo, 'Obtener todos los datos de los departamentos', 'SELECT * FROM DEPARTAMENTO');
pie();
