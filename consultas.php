<?php
require 'conexion.php';
require 'layout.php';

cabecera('Consultas SQL');

consulta($pdo, '3. Empleados que se apellidan López',
    "SELECT * FROM EMPLEADOS WHERE Apellidos = 'Lopez'");

consulta($pdo, '4. Empleados que se apellidan López y Pérez',
    "SELECT * FROM EMPLEADOS WHERE Apellidos IN ('Lopez', 'Perez')");

consulta($pdo, '5. Nombre y clave de los empleados del departamento 4',
    "SELECT Nombre, Clave_empleado FROM EMPLEADOS WHERE Clave_Depto = 4");

consulta($pdo, '6. Empleados del departamento 1 o 3, ordenados por nombre',
    "SELECT * FROM EMPLEADOS WHERE Clave_Depto IN (1, 3) ORDER BY Nombre ASC");

consulta($pdo, '7. Nombre y apellidos de empleados cuyo apellido empieza con H',
    "SELECT Nombre, Apellidos FROM EMPLEADOS WHERE Apellidos LIKE 'H%'");

consulta($pdo, '8. Departamentos con presupuesto entre $50,000 y $70,000',
    "SELECT * FROM DEPARTAMENTO WHERE Presupuesto BETWEEN 50000 AND 70000");

consulta($pdo, '9. Empleados del departamento de Contabilidad',
    "SELECT e.Clave_empleado, e.Nombre, e.Apellidos
     FROM EMPLEADOS e
     INNER JOIN DEPARTAMENTO d ON e.Clave_Depto = d.Clave_Depto
     WHERE d.Nombre = 'Contabilidad'");

consulta($pdo, '10. Nombre, apellidos y departamento de cada empleado',
    "SELECT e.Nombre, e.Apellidos, d.Nombre AS Departamento
     FROM EMPLEADOS e
     INNER JOIN DEPARTAMENTO d ON e.Clave_Depto = d.Clave_Depto");

pie();
