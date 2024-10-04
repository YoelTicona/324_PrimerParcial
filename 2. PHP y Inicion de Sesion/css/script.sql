-- Crear la tabla PROPIETARIO
CREATE TABLE PROPIETARIO (
    CI VARCHAR(20) PRIMARY KEY,
    NOMBRE VARCHAR(50) NOT NULL,
    PATERNO VARCHAR(50) NOT NULL,
    MATERNO VARCHAR(50),
    GENERO CHAR(1) NOT NULL,
    CELULAR VARCHAR(15),
    EMAIL VARCHAR(100),
    NACIONALIDAD VARCHAR(50),
    FECHA_NACI DATE
);

-- Crear la tabla ADMINISTRADOR
CREATE TABLE ADMINISTRADOR (
    ID_ADMINISTRADOR INT PRIMARY KEY,
    NOMBRE VARCHAR(50) NOT NULL,
    PATERNO VARCHAR(50) NOT NULL,
    MATERNO VARCHAR(50),
    CORREO VARCHAR(100),
    CELULAR VARCHAR(15)
);

-- Crear la tabla CATASTRO
CREATE TABLE CATASTRO (
    ID_CATASTRO INT PRIMARY KEY,
    ZONA VARCHAR(100) NOT NULL,
    DISTRITO VARCHAR(50),
    SUPERFICIE DECIMAL(10, 2),
    XINI DECIMAL(10, 5),
    YINI DECIMAL(10, 5),
    XFIN DECIMAL(10, 5),
    YFIN DECIMAL(10, 5),
    CI VARCHAR(20),
    FOREIGN KEY (CI) REFERENCES PROPIETARIO(CI)
);

-- Crear la tabla REGISTRA
CREATE TABLE REGISTRA (
    CI VARCHAR(20),
    ID_ADMINISTRADOR INT,
    FECHA_REGISTRO DATE NOT NULL,
    FOREIGN KEY (CI) REFERENCES PROPIETARIO(CI),
    FOREIGN KEY (ID_ADMINISTRADOR) REFERENCES ADMINISTRADOR(ID_ADMINISTRADOR),
    PRIMARY KEY (CI, ID_ADMINISTRADOR)
);

-- Datos
-- ========== PROPIETARIOS ========== --
INSERT INTO PROPIETARIO (CI, NOMBRE, PATERNO, MATERNO, GENERO, CELULAR, EMAIL, NACIONALIDAD, FECHA_NACI) VALUES
('12345', 'Juan', 'Pérez', 'López', 'M', '71234567', 'juanperez@gmail.com', 'Boliviana', '1985-06-15'),
('8543212', 'María', 'Gómez', 'Quispe', 'F', '76543212', 'mariagomez@yahoo.com', 'Boliviana', '1990-03-22'),
('9845123', 'Pedro', 'Salazar', 'Choque', 'M', '76451234', 'pedrosalazar@outlook.com', 'Boliviana', '1987-08-12'),
('7894561', 'Ana', 'Rodríguez', 'Mamani', 'F', '72134567', 'anarodriguez@gmail.com', 'Boliviana', '1992-11-09'),
('9632587', 'Luis', 'Fernández', 'Limachi', 'M', '70987654', 'luisfernandez@hotmail.com', 'Boliviana', '1980-02-10'),
('1234567', 'Carmen', 'Torrez', 'Chura', 'F', '78123456', 'carmentorrez@gmail.com', 'Boliviana', '1983-04-28'),
('4567890', 'Raúl', 'Medina', 'Paco', 'M', '79123456', 'raulmedina@yahoo.com', 'Boliviana', '1975-01-05'),
('3456789', 'Paola', 'Álvarez', 'Arias', 'F', '70123456', 'paolaalvarez@gmail.com', 'Boliviana', '1994-12-15'),
('2143658', 'Javier', 'Cáceres', 'Mendoza', 'M', '73123456', 'javiercaceres@hotmail.com', 'Boliviana', '1989-07-14'),
('6512349', 'Sofía', 'Morales', 'Nina', 'F', '74123456', 'sofiamorales@gmail.com', 'Boliviana', '1995-05-24'),
('9647852', 'Gabriel', 'Rojas', 'Aliaga', 'M', '71123456', 'gabrielrojas@hotmail.com', 'Boliviana', '1982-09-21'),
('9876543', 'Laura', 'Aguirre', 'López', 'F', '76234567', 'lauraaguirre@gmail.com', 'Boliviana', '1991-01-19'),
('5432187', 'Mónica', 'Blanco', 'Calle', 'F', '75234567', 'monicablanco@yahoo.com', 'Boliviana', '1984-05-18'),
('8765432', 'Daniel', 'Paredes', 'Arce', 'M', '72234567', 'danielparedes@gmail.com', 'Boliviana', '1988-03-12'),
('2345678', 'Verónica', 'Escobar', 'Suárez', 'F', '79234567', 'veronicaescobar@hotmail.com', 'Boliviana', '1993-10-30');

-- ========== ADMINISTRADORES ========== --
INSERT INTO ADMINISTRADOR (ID_ADMINISTRADOR, NOMBRE, PATERNO, MATERNO, CORREO, CELULAR) VALUES
('98765', 'Carlos', 'Gutiérrez', 'Flores', 'carlosgutierrez@admin.com', '71212345'),
('112346', 'Andrea', 'López', 'Valencia', 'andrealpez@admin.com', '76267891'),
('112347', 'David', 'Mendoza', 'Carvajal', 'davidmendoza@admin.com', '77234567'),
('112348', 'Lucía', 'Romero', 'Quiroga', 'luciaromero@admin.com', '73212345'),
('112349', 'Fernando', 'Vargas', 'Loayza', 'fernandovargas@admin.com', '78234567');

-- ========== CATASTROS ========== --
INSERT INTO CATASTRO (ZONA, DISTRITO, SUPERFICIE, XINI, YINI, XFIN, YFIN, CI) VALUES
('Zona Sur', 'Distrito 3', 250.00, 123.45, 678.90, 125.45, 680.90, '12345'),  -- Asociado a Juan Pérez
('Sopocachi', 'Distrito 1', 300.50, 223.45, 778.90, 225.45, 780.90, '8543212'),  -- Asociado a María Gómez
('Achumani', 'Distrito 2', 180.75, 323.45, 878.90, 325.45, 880.90, '9845123'),  -- Asociado a Pedro Salazar
('Miraflores', 'Distrito 4', 120.00, 423.45, 978.90, 425.45, 980.90, '7894561'), -- Asociado a Ana Rodríguez
('Calacoto', 'Distrito 3', 400.00, 523.45, 1078.90, 525.45, 1080.90, '9632587'), -- Asociado a Luis Fernández
('Villa Fátima', 'Distrito 5', 220.75, 623.45, 1178.90, 625.45, 1180.90, '1234567'), -- Asociado a Carmen Torrez
('Obrajes', 'Distrito 2', 270.50, 723.45, 1278.90, 725.45, 1280.90, '4567890'), -- Asociado a Raúl Medina
('El Alto', 'Distrito 6', 350.00, 823.45, 1378.90, 825.45, 1380.90, '3456789'),  -- Asociado a Paola Álvarez
('Cota Cota', 'Distrito 3', 450.00, 923.45, 1478.90, 925.45, 1480.90, '2143658'), -- Asociado a Javier Cáceres
('La Florida', 'Distrito 2', 520.00, 1023.45, 1578.90, 1025.45, 1580.90, '6512349'), -- Asociado a Sofía Morales
('Irpavi', 'Distrito 4', 250.00, 1123.45, 1678.90, 1125.45, 1680.90, '9647852'), -- Asociado a Gabriel Rojas
('San Pedro', 'Distrito 1', 320.50, 1223.45, 1778.90, 1225.45, 1780.90, '9876543'), -- Asociado a Laura Aguirre
('Villa Armonía', 'Distrito 7', 300.75, 1323.45, 1878.90, 1325.45, 1880.90, '5432187'), -- Asociado a Mónica Blanco
('Zona Central', 'Distrito 1', 380.00, 1423.45, 1978.90, 1425.45, 1980.90, '8765432'), -- Asociado a Daniel Paredes
('Bajo Següencoma', 'Distrito 3', 480.00, 1523.45, 2078.90, 1525.45, 2080.90, '2345678'); -- Asociado a Verónica Escobar

-- ========== REGISTRA ========== --
INSERT INTO REGISTRA (CI, ID_ADMINISTRADOR, FECHA_REGISTRO) VALUES
('12345', 98765, '2024-01-15'),  -- Juan Pérez registrado por Carlos Gutiérrez
('8543212', 112346, '2024-02-20'),  -- María Gómez registrada por Andrea López
('9845123', 112347, '2024-03-10'),  -- Pedro Salazar registrado por David Mendoza
('7894561', 112348, '2024-04-05'),  -- Ana Rodríguez registrada por Lucía Romero
('9632587', 112349, '2024-05-25');  -- Luis Fernández registrado por Fernando Vargas
