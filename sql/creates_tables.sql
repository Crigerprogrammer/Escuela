-- Crear base de datos
CREATE DATABASE escuela
USE escuela
-- Tabla de profesores
CREATE TABLE profesor
(
id_profesor INT PRIMARY KEY IDENTITY(1,1) NOT NULL,
nombres NVARCHAR(50),
apellidos NVARCHAR(50),
fecha_alta DATE,
salario INT
)
--- Tabla de grados
CREATE TABLE grado 
(
id_grado INT PRIMARY KEY IDENTITY(1,1) NOT NULL,
nombre NVARCHAR(50),
descripcion NVARCHAR(50),
id_profesor INT

FOREIGN KEY (id_profesor)
REFERENCES profesor(id_profesor)
)
--- Tabla de Cursos
CREATE TABLE curso
(
id_curso INT PRIMARY KEY IDENTITY(1,1) NOT NULL,
nombre_curso NVARCHAR(50),
id_grado INT

FOREIGN KEY (id_grado)
REFERENCES grado(id_grado)
)
-- tabla estudiante
CREATE TABLE estudiante
(
carne INT PRIMARY KEY NOT NULL,
nombres NVARCHAR(50),
apellidos NVARCHAR(50),
fecha_alta DATE,
edad INT
)
-- Tabla nota
CREATE TABLE nota
(
id_nota INT PRIMARY KEY IDENTITY(1,1) NOT NULL,
carne INT,
id_curso INT,
nota INT

FOREIGN KEY (carne)
REFERENCES estudiante(carne),
FOREIGN KEY (id_curso)
REFERENCES curso(id_curso)
)
-- Tabla inscripcion
CREATE TABLE inscripcion
(
id_inscripcion INT PRIMARY KEY IDENTITY(1,1) NOT NULL,
carne INT,
fecha_inscripcion DATE,
id_grado INT,
monto INT

FOREIGN KEY (carne)
REFERENCES estudiante(carne),
FOREIGN KEY (id_grado)
REFERENCES grado(id_grado)
)

