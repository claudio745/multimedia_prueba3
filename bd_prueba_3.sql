-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2022 a las 19:54:05
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_prueba_3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `rut` varchar(11) NOT NULL,
  `antEnfer` varchar(100) NOT NULL,
  `alergias` varchar(100) NOT NULL,
  `enferCroni` varchar(100) NOT NULL,
  `mediActu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`rut`, `antEnfer`, `alergias`, `enferCroni`, `mediActu`) VALUES
('20904525-7', 'ninguno', 'czcxz', 'dsads', 'dadwa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `cuerpo` varchar(500) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `img` longblob NOT NULL,
  `autor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `cuerpo`, `categoria`, `img`, `autor`) VALUES
(3, 'Daño pulmonar residual después de la hospitalización por COVID-19', 'En un nuevo estudio publicado en línea en el American Journal of Respiratory and Critical Care Medicine de la American Thoracic Society, los investigadores buscaron determinar el porcentaje de pacientes con COVID-19 dados de alta del hospital que tenían un tipo de daño pulmonar fibrótico, conocido como enfermedad pulmonar intersticial, que requiere atención de seguimiento continua. Estos pacientes tenían diversos grados de gravedad de COVID-19 al ingreso en el hospital.', 'Medicina', 0x3130323732372e6a7067, 'IntraMed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `rut` varchar(11) NOT NULL,
  `nombres` varchar(80) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `cargo` varchar(14) NOT NULL,
  `contraseña` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`rut`, `nombres`, `apellido1`, `apellido2`, `cargo`, `contraseña`) VALUES
('20904525-7', 'Jose Rene', 'Meza', 'Villalon', 'Administrador', '$2y$10$L7/vmSTPH1e5a/l0cWJhAu8zujuKf.U/xcoaXoElU./3Bo/fjnN7a'),
('20904525-k', 'juana ana', 'alfaro', 'sdsad', 'Medico', '$2y$10$GrveLBGYpaEIxyffpfQrpurqmnSj0RIsuopjgODNl5iF2bH3oTd2i');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombres` varchar(80) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `genero` varchar(9) NOT NULL,
  `fechaNacim` date NOT NULL,
  `ciudadResid` varchar(30) NOT NULL,
  `rut` varchar(11) NOT NULL,
  `contraseña` varchar(60) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombres`, `apellido1`, `apellido2`, `genero`, `fechaNacim`, `ciudadResid`, `rut`, `contraseña`, `correo`) VALUES
('Jose Rene', 'Meza', 'Villalon', 'Masculino', '2001-10-23', 'Valparaiso', '20904525-7', '$2y$10$36lKiReXMwzqmYwhV.rhgOInmhS6KfyRijE9Cn4m5YY.Ag8mOI23S', 'mezavillalonxxjosexx@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
