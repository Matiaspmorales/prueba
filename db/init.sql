CREATE TABLE IF NOT EXISTS pacientes (
    id VARCHAR(36) primary key,
    rut VARCHAR(20) UNIQUE NOT NULL,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    genero ENUM('M', 'F','Otro') NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO pacientes (id, rut, nombres, apellidos, fecha_nacimiento, genero, direccion, telefono) VALUES (UUID(),'12.345.678-1', 'Juan', 'Perez','2001-04-23', 'M', 'Anonimo 123', '+56912345678');