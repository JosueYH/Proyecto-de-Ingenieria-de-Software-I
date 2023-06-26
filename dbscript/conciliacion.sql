
create database dbconciliacion2023;
use dbconciliacion2023;

CREATE TABLE TConciliador (
  conciliador_id INT PRIMARY KEY,
  nombre_conciliador VARCHAR(100),
  especialidad VARCHAR(100),
  telefono VARCHAR(20),
  correo_electronico VARCHAR(100)
);engine=innodb;


CREATE TABLE TLitigante (
  litigante_id INT PRIMARY KEY,
  nombre_parte VARCHAR(100),
  direccion VARCHAR(255),
  telefono VARCHAR(20),
  correo_electronico VARCHAR(100)
);engine=innodb;


CREATE TABLE TUsuarios (
  user_id INT PRIMARY KEY,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  correo_electronico VARCHAR(100),
  contraseña VARCHAR(50)
); engine=innodb;


CREATE TABLE TCasos (
  caso_id INT PRIMARY KEY,
  nombre_caso VARCHAR(100),
  descripcion VARCHAR(255),
  fecha_inicio DATE,
  estado VARCHAR(50),
  usuario_id INT,
  FOREIGN KEY (usuario_id) REFERENCES Usuarios(user_id)
); engine=innodb;


CREATE TABLE TSesiones (
  sesion_id INT PRIMARY KEY,
  fecha DATE,
  hora TIME,
  lugar VARCHAR(100),
  caso_id INT,
  conciliador_id INT,
  FOREIGN KEY (caso_id) REFERENCES Casos(caso_id),
  FOREIGN KEY (conciliador_id) REFERENCES Conciliadores(conciliador_id)
);engine=innodb;

CREATE TABLE TAcuerdos (
  acuerdo_id INT PRIMARY KEY,
  descripcion VARCHAR(255),
  fecha DATE,
  caso_id INT,
  sesion_id INT,
  FOREIGN KEY (caso_id) REFERENCES Casos(caso_id),
  FOREIGN KEY (sesion_id) REFERENCES Sesiones(sesion_id)
);engine=innodb;



--Registros
--
--
--

