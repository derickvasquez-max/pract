-- 1. Crear la base de datos
CREATE DATABASE IF NOT EXISTS PERSONAL CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE PERSONAL;

-- 2. Crear las tablas
CREATE TABLE DEPARTAMENTO (
    Clave_Depto INT NOT NULL,
    Nombre VARCHAR(30),
    Presupuesto INT,
    PRIMARY KEY (Clave_Depto)
) ENGINE=InnoDB; 

CREATE TABLE EMPLEADOS (
    Clave_empleado VARCHAR(8) NOT NULL,
    Nombre VARCHAR(30),
    Apellidos VARCHAR(30),
    Clave_Depto INT,
    PRIMARY KEY (Clave_empleado)
) ENGINE=InnoDB;

-- 3. Relación entre las dos tablas (clave foránea)
ALTER TABLE EMPLEADOS
    ADD CONSTRAINT fk_empleados_depto
    FOREIGN KEY (Clave_Depto) REFERENCES DEPARTAMENTO (Clave_Depto);

-- 4. Insertar datos (primero DEPARTAMENTO por la clave foránea)
INSERT INTO DEPARTAMENTO (Clave_Depto, Nombre, Presupuesto) VALUES
(1, 'Personal', 80000),
(2, 'Almacén', 70000),
(3, 'Contabilidad', 60000),
(4, 'Manufactura', 50000),
(5, 'Empaque', 30000);

INSERT INTO EMPLEADOS (Clave_empleado, Nombre, Apellidos, Clave_Depto) VALUES
('EMP01', 'Armando', 'López', 2),
('EMP02', 'Tatiana', 'Vargas', 1),
('EMP03', 'Laura', 'Iturria', 3),
('EMP04', 'Juan', 'Pérez', 4),
('EMP05', 'Iván', 'López', 4),
('EMP06', 'Margarita', 'Hernández', 1),
('EMP07', 'Jesús', 'Pérez', 3),
('EMP08', 'Tonatiuh', 'Flores', 2),
('EMP09', 'Juan', 'López', 4),
('EMP10', 'José', 'Hernández', 5);
