-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2023 a las 06:48:21
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `scouts113`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acudientes`
--

CREATE TABLE `acudientes` (
  `CorreoElectronico` varchar(250) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Apellido` varchar(250) NOT NULL,
  `Parentesco` varchar(250) NOT NULL,
  `Ocupacion` varchar(250) NOT NULL,
  `NumeroTelefonico` varchar(250) NOT NULL,
  `NoIdScout` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `acudientes`
--

INSERT INTO `acudientes` (`CorreoElectronico`, `Nombre`, `Apellido`, `Parentesco`, `Ocupacion`, `NumeroTelefonico`, `NoIdScout`) VALUES
('juli.cepeda@hotmail.com', 'Juliana', 'Cepeda', 'Madre ', 'Administrador Propiedad Horizontal', '3117214684', '2201642');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_medicos`
--

CREATE TABLE `datos_medicos` (
  `Id` int(11) NOT NULL,
  `Alergias/Enfermedades` varchar(255) NOT NULL,
  `Medicamentos` varchar(255) NOT NULL,
  `Dosis/Tiempo` varchar(255) NOT NULL,
  `Observaciones` text DEFAULT NULL,
  `NoIdScout` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_medicos`
--

INSERT INTO `datos_medicos` (`Id`, `Alergias/Enfermedades`, `Medicamentos`, `Dosis/Tiempo`, `Observaciones`, `NoIdScout`) VALUES
(9, 'Intolerante a la lactosa', 'No aplica', 'No aplica', 'Tomar en lo posible leche delactosada', '2201642');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logros`
--

CREATE TABLE `logros` (
  `Id` bigint(20) NOT NULL,
  `TipoLogro` varchar(250) NOT NULL,
  `Motivo` varchar(250) NOT NULL,
  `Descripcion` text NOT NULL,
  `NoIdScout` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `NoRecibo` varchar(250) NOT NULL,
  `Fecha` date NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Concepto` varchar(250) NOT NULL,
  `Valor` double NOT NULL,
  `NoIdScout` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`NoRecibo`, `Fecha`, `Nombre`, `Concepto`, `Valor`, `NoIdScout`) VALUES
('0001', '2023-05-16', 'Maria Isabella Galvis', 'Pago inicial', 70000, '2201642'),
('0002', '2023-05-19', 'Juan Jose Hurtado', 'Pago inicial', 75000, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scouts`
--

CREATE TABLE `scouts` (
  `NoIdentidad` varchar(250) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Apellido` varchar(250) NOT NULL,
  `CorreoElectronico` varchar(80) NOT NULL,
  `Contraseña` varchar(80) NOT NULL,
  `TipoDocumento` varchar(250) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `CiudadResidencia` varchar(250) NOT NULL,
  `DireccionResidencia` varchar(250) NOT NULL,
  `NumeroTelefonico` varchar(25) NOT NULL,
  `NumeroTelefonicoAlter` varchar(25) DEFAULT NULL,
  `InstitucionEducativa` varchar(250) NOT NULL,
  `CursoActual` varchar(30) NOT NULL,
  `Jornada` varchar(50) NOT NULL,
  `Sexo` varchar(20) NOT NULL,
  `Peso` double NOT NULL,
  `Estatura` double NOT NULL,
  `TipoDeSangre` varchar(5) NOT NULL,
  `EPS` varchar(250) NOT NULL,
  `SitioAtencion` varchar(250) NOT NULL,
  `Rama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `scouts`
--

INSERT INTO `scouts` (`NoIdentidad`, `Nombre`, `Apellido`, `CorreoElectronico`, `Contraseña`, `TipoDocumento`, `FechaNacimiento`, `CiudadResidencia`, `DireccionResidencia`, `NumeroTelefonico`, `NumeroTelefonicoAlter`, `InstitucionEducativa`, `CursoActual`, `Jornada`, `Sexo`, `Peso`, `Estatura`, `TipoDeSangre`, `EPS`, `SitioAtencion`, `Rama`) VALUES
('2201642', 'Maria Isabella', 'Galvis Cepeda', 'jjuanjose1019@gmail.com', '1234', 'Cedula', '2002-07-17', 'CALI', 'Cr 53 # 7 - 45', '3002520558', '3117214684', 'UAO', 'Noveno semestre', 'Noche', 'Femenino', 58, 159, '   O+', 'SANITAS', 'Belacazar', 'Cachorros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NoIdentidad` varchar(250) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Contraseña` varchar(250) NOT NULL,
  `CorreoElectronico` varchar(250) NOT NULL,
  `Rol` int(11) NOT NULL,
  `NoIdScout` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NoIdentidad`, `Nombre`, `Contraseña`, `CorreoElectronico`, `Rol`, `NoIdScout`) VALUES
('1010062091', 'AdminScouts', 'root', 'Admin@scoutscentinelas113.com', 1, NULL),
('1144036490', 'Adrian Valera', '1234', 'adrian.valera@scoutscentinelas113.com', 3, NULL),
('1660893', 'Andres Cortez', '1234', 'andres.cortez@scoutscentinelas113.com', 2, NULL),
('2200625', 'Daniela Zuniga', '1234', 'daniela.zuniga@scoutscentinelas113.com', 5, NULL),
('2201642', 'Maria Isabella', '1234', 'jjuanjose1019@gmail.com', 4, '2201642');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acudientes`
--
ALTER TABLE `acudientes`
  ADD PRIMARY KEY (`CorreoElectronico`),
  ADD KEY `NoIdScout` (`NoIdScout`);

--
-- Indices de la tabla `datos_medicos`
--
ALTER TABLE `datos_medicos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `NoIdScout` (`NoIdScout`);

--
-- Indices de la tabla `logros`
--
ALTER TABLE `logros`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `NoIdScout` (`NoIdScout`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`NoRecibo`),
  ADD KEY `NoIdScout` (`NoIdScout`);

--
-- Indices de la tabla `scouts`
--
ALTER TABLE `scouts`
  ADD PRIMARY KEY (`NoIdentidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`NoIdentidad`),
  ADD KEY `NoIdScout` (`NoIdScout`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_medicos`
--
ALTER TABLE `datos_medicos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `logros`
--
ALTER TABLE `logros`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acudientes`
--
ALTER TABLE `acudientes`
  ADD CONSTRAINT `acudientes_ibfk_1` FOREIGN KEY (`NoIdScout`) REFERENCES `scouts` (`NoIdentidad`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `datos_medicos`
--
ALTER TABLE `datos_medicos`
  ADD CONSTRAINT `datos_medicos_ibfk_1` FOREIGN KEY (`NoIdScout`) REFERENCES `scouts` (`NoIdentidad`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `logros`
--
ALTER TABLE `logros`
  ADD CONSTRAINT `logros_ibfk_1` FOREIGN KEY (`NoIdScout`) REFERENCES `scouts` (`NoIdentidad`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`NoIdScout`) REFERENCES `scouts` (`NoIdentidad`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`NoIdScout`) REFERENCES `scouts` (`NoIdentidad`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
