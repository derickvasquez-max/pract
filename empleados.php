<?php
require 'conexion.php';
require 'layout.php';

cabecera('Tabla EMPLEADOS');
consulta($pdo, 'Obtener todos los datos de los empleados', 'SELECT * FROM EMPLEADOS');
pie();
