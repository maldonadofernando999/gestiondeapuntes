-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2021 a las 06:03:59
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio_apuntes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files`
--

CREATE TABLE `files` (
  `id_archivo` int(5) NOT NULL,
  `archivo` text COLLATE utf8_spanish_ci NOT NULL,
  `id_profesor` int(3) NOT NULL,
  `id_materia` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `files`
--

INSERT INTO `files` (`id_archivo`, `archivo`, `id_profesor`, `id_materia`) VALUES
(10, '1630860544-29Complete.pdf', 7, 42),
(11, '1630861900-Recursive.zip', 6, 37),
(12, '1630898722-WhatsApp Image 2021-09-04 at 5.03.59 PM.jpeg', 6, 245);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_profesor` int(3) NOT NULL,
  `profesor` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `profesor`) VALUES
(6, 'Fernando Maldonado'),
(7, 'Marianela Coronel'),
(8, 'Francisco Maldonado'),
(9, 'Silvia Gimenez'),
(10, 'Ariana Coronel'),
(11, 'Ester Gomez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE `subjects` (
  `id_materia` int(4) NOT NULL,
  `materia` text COLLATE utf8_spanish_ci NOT NULL,
  `anio` int(1) NOT NULL,
  `division` text COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` text COLLATE utf8_spanish_ci NOT NULL,
  `hours` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subjects`
--

INSERT INTO `subjects` (`id_materia`, `materia`, `anio`, `division`, `especialidad`, `hours`) VALUES
(1, 'Ciencias Naturales', 1, '* (A-H)', 'CBT', 144),
(2, 'Ciencias Sociales', 1, '* (A-H)', 'CBT', 144),
(3, 'Educación Artistica', 1, '* (A-H)', 'CBT', 72),
(4, 'Educación Física', 1, '* (A-H)', 'CBT', 72),
(5, 'Inglés ', 1, '* (A-H)', 'CBT', 144),
(6, 'Matemática ', 1, '* (A-H)', 'CBT', 144),
(7, 'Práctica del Lenguaje ', 1, '* (A-H)', 'CBT', 72),
(8, 'Construcción Ciudadana ', 1, '* (A-H)', 'CBT', 72),
(9, 'Lenguajes Tecnológicos ', 1, '* (A-H)', 'CBT', 72),
(10, 'Sistemas Tecnológicos ', 1, '* (A-H)', 'CBT', 72),
(11, 'Procedimientos Técnicos ', 1, '* (A-H)', 'CBT', 72),
(12, 'Biología', 2, '* (A-H)', 'CBT', 72),
(13, 'Físico Química ', 2, '* (A-H)', 'CBT', 72),
(14, 'Educación Artística', 2, '* (A-H)', 'CBT', 72),
(15, 'Educación Física', 2, '* (A-H)', 'CBT', 72),
(16, 'Inglés ', 2, '* (A-H)', 'CBT', 144),
(17, 'Matemática ', 2, '* (A-H)', 'CBT', 144),
(18, 'Práctica del Lenguaje ', 2, '* (A-H)', 'CBT', 72),
(19, 'Construcción Ciudadana ', 2, '* (A-H)', 'CBT', 72),
(20, 'Historia ', 2, '* (A-H)', 'CBT', 72),
(21, 'Geografía ', 2, '* (A-H)', 'CBT', 72),
(22, 'Lenguajes Tecnológicos ', 2, '* (A-H)', 'CBT', 72),
(23, 'Sistemas Tecnológicos ', 2, '* (A-H)', 'CBT', 72),
(24, 'Procedimientos Técnicos ', 2, '* (A-H)', 'CBT', 72),
(25, 'Biología', 3, '* (A-H)', 'CBT', 72),
(26, 'Físico Química ', 3, '* (A-H)', 'CBT', 72),
(27, 'Educación Artística ', 3, '* (A-H)', 'CBT', 72),
(28, 'Educación Física', 3, '* (A-H)', 'CBT', 72),
(29, 'Inglés ', 3, '* (A-H)', 'CBT', 144),
(30, 'Matemática ', 3, '* (A-H)', 'CBT', 144),
(31, 'Práctica del Lenguaje ', 3, '* (A-H)', 'CBT', 72),
(32, 'Construcción Ciudadana ', 3, '* (A-H)', 'CBT', 72),
(33, 'Historia ', 3, '* (A-H)', 'CBT', 72),
(34, 'Geografía ', 3, '* (A-H)', 'CBT', 72),
(35, 'Lenguajes Tecnológicos ', 3, '* (A-H)', 'CBT', 72),
(36, 'Sistemas Tecnológicos ', 3, '* (A-H)', 'CBT', 72),
(37, 'Procedimientos Técnicos ', 3, '* (A-H)', 'CBT', 72),
(38, 'Educación física', 4, '1', 'ADO', 72),
(39, 'Física', 4, '1', 'ADO', 108),
(40, 'Geografía', 4, '1', 'ADO', 72),
(41, 'Historia', 4, '1', 'ADO', 72),
(42, 'Inglés', 4, '1', 'ADO', 72),
(43, 'Literatura', 4, '1', 'ADO', 72),
(44, 'Matemática Ciclo Sup.', 4, '1', 'ADO', 144),
(45, 'Química', 4, '1', 'ADO', 72),
(46, 'SADO', 4, '1', 'ADO', 72),
(47, 'Comercialización', 4, '1', 'ADO', 72),
(48, 'Introducción a las Org.', 4, '1', 'ADO', 72),
(49, 'Tecnologías de la Inf. de la Gest.', 4, '1', 'ADO', 72),
(50, 'Gestión Comercial', 4, '1', 'ADO', 144),
(51, 'Administración y Gest. de RRHH', 4, '1', 'ADO', 72),
(52, 'Sistemas de Información Contable', 4, '1', 'ADO', 144),
(53, 'Educación física', 4, '2', 'ADO', 72),
(54, 'Física', 4, '2', 'ADO', 108),
(55, 'Geografía', 4, '2', 'ADO', 72),
(56, 'Historia', 4, '2', 'ADO', 72),
(57, 'Inglés', 4, '2', 'ADO', 72),
(58, 'Literatura', 4, '2', 'ADO', 72),
(59, 'Matemática Ciclo Sup.', 4, '2', 'ADO', 144),
(60, 'Química', 4, '2', 'ADO', 72),
(61, 'SADO', 4, '2', 'ADO', 72),
(62, 'Comercialización', 4, '2', 'ADO', 72),
(63, 'Introducción a las Org.', 4, '2', 'ADO', 72),
(64, 'Tecnologías de la Inf. de la Gest.', 4, '2', 'ADO', 72),
(65, 'Gestión Comercial', 4, '2', 'ADO', 144),
(66, 'Administración y Gest. de RRHH', 4, '2', 'ADO', 72),
(67, 'Sistemas de Información Contable', 4, '2', 'ADO', 144),
(68, 'Educación física', 4, '3', 'ADO', 72),
(69, 'Física', 4, '3', 'ADO', 108),
(70, 'Geografía', 4, '3', 'ADO', 72),
(71, 'Historia', 4, '3', 'ADO', 72),
(72, 'Inglés', 4, '3', 'ADO', 72),
(73, 'Literatura', 4, '3', 'ADO', 72),
(74, 'Matemática Ciclo Sup.', 4, '3', 'ADO', 144),
(75, 'Química', 4, '3', 'ADO', 72),
(76, 'SADO', 4, '3', 'ADO', 72),
(77, 'Comercialización', 4, '3', 'ADO', 72),
(78, 'Introducción a las Org.', 4, '3', 'ADO', 72),
(79, 'Tecnologías de la Inf. de la Gest.', 4, '3', 'ADO', 72),
(80, 'Gestión Comercial', 4, '3', 'ADO', 144),
(81, 'Administración y Gest. de RRHH', 4, '3', 'ADO', 72),
(82, 'Sistemas de Información Contable', 4, '3', 'ADO', 144),
(83, 'Historia', 4, '1', 'IPP', 72),
(84, 'Geografía', 4, '1', 'IPP', 72),
(85, 'Matemática Ciclo Sup.', 4, '1', 'IPP', 144),
(86, 'Física', 4, '1', 'IPP', 108),
(87, 'Química', 4, '1', 'IPP', 72),
(88, 'Tecnologías Electrónicas', 4, '1', 'IPP', 72),
(89, 'Laboratorio de Programación I', 4, '1', 'IPP', 72),
(90, 'Laboratorio de Hardware', 4, '1', 'IPP', 144),
(91, 'Laboratorio de Sist. Operativos', 4, '1', 'IPP', 144),
(92, 'Laboratorio de Aplicaciones', 4, '1', 'IPP', 72),
(93, 'Literatura', 4, '1', 'IPP', 72),
(94, 'Inglés', 4, '1', 'IPP', 72),
(95, 'Educación física', 4, '1', 'IPP', 72),
(96, 'SADO', 4, '1', 'IPP', 72),
(97, 'Historia', 4, '2', 'IPP', 72),
(98, 'Geografía', 4, '2', 'IPP', 72),
(99, 'Matemática Ciclo Sup.', 4, '2', 'IPP', 144),
(100, 'Física', 4, '2', 'IPP', 108),
(101, 'Química', 4, '2', 'IPP', 72),
(102, 'Tecnologías Electrónicas', 4, '2', 'IPP', 72),
(103, 'Laboratorio de Programación I', 4, '2', 'IPP', 72),
(104, 'Laboratorio de Hardware', 4, '2', 'IPP', 144),
(105, 'Laboratorio de Sist. Operativos', 4, '2', 'IPP', 144),
(106, 'Laboratorio de Aplicaciones', 4, '2', 'IPP', 72),
(107, 'Literatura', 4, '2', 'IPP', 72),
(108, 'Inglés', 4, '2', 'IPP', 72),
(109, 'Educación física', 4, '2', 'IPP', 72),
(110, 'SADO', 4, '2', 'IPP', 72),
(111, 'Historia', 4, '3', 'IPP', 72),
(112, 'Geografía', 4, '3', 'IPP', 72),
(113, 'Matemática Ciclo Sup.', 4, '3', 'IPP', 144),
(114, 'Física', 4, '3', 'IPP', 108),
(115, 'Química', 4, '3', 'IPP', 72),
(116, 'Tecnologías Electrónicas', 4, '3', 'IPP', 72),
(117, 'Laboratorio de Programación I', 4, '3', 'IPP', 72),
(118, 'Laboratorio de Hardware', 4, '3', 'IPP', 144),
(119, 'Laboratorio de Sist. Operativos', 4, '3', 'IPP', 144),
(120, 'Laboratorio de Aplicaciones', 4, '3', 'IPP', 72),
(121, 'Literatura', 4, '3', 'IPP', 72),
(122, 'Inglés', 4, '3', 'IPP', 72),
(123, 'Educación física', 4, '3', 'IPP', 72),
(124, 'SADO', 4, '3', 'IPP', 72),
(125, 'Literatura', 4, '1', 'PROG', 72),
(126, 'Inglés', 4, '1', 'PROG', 72),
(127, 'Educación física', 4, '1', 'PROG', 72),
(128, 'SADO', 4, '1', 'PROG', 72),
(129, 'Historia', 4, '1', 'PROG', 72),
(130, 'Geografía', 4, '1', 'PROG', 72),
(131, 'Matemática Ciclo Sup.', 4, '1', 'PROG', 144),
(132, 'Física', 4, '1', 'PROG', 108),
(133, 'Química', 4, '1', 'PROG', 72),
(134, 'Tecnologías Electrónicas', 4, '1', 'PROG', 72),
(135, 'Laboratorio de Programación I', 4, '1', 'PROG', 72),
(136, 'Laboratorio de Hardware', 4, '1', 'PROG', 144),
(137, 'Laboratorio de Sist. Operativos', 4, '1', 'PROG', 144),
(138, 'Laboratorio de Aplicaciones', 4, '1', 'PROG', 72),
(139, 'Literatura', 4, '2', 'PROG', 72),
(140, 'Inglés', 4, '2', 'PROG', 72),
(141, 'Educación física', 4, '2', 'PROG', 72),
(142, 'SADO', 4, '2', 'PROG', 72),
(143, 'Historia', 4, '2', 'PROG', 72),
(144, 'Geografía', 4, '2', 'PROG', 72),
(145, 'Matemática Ciclo Sup.', 4, '2', 'PROG', 144),
(146, 'Física', 4, '2', 'PROG', 108),
(147, 'Química', 4, '2', 'PROG', 72),
(148, 'Tecnologías Electrónicas', 4, '2', 'PROG', 72),
(149, 'Laboratorio de Programación I', 4, '2', 'PROG', 72),
(150, 'Laboratorio de Hardware', 4, '2', 'PROG', 144),
(151, 'Laboratorio de Sist. Operativos', 4, '2', 'PROG', 144),
(152, 'Laboratorio de Aplicaciones', 4, '2', 'PROG', 72),
(153, 'Literatura', 5, '1', 'ADO', 72),
(154, 'Inglés', 5, '1', 'ADO', 72),
(155, 'Educación física', 5, '1', 'ADO', 72),
(156, 'Polit. y Ciud.', 5, '1', 'ADO', 72),
(157, 'Historia', 5, '1', 'ADO', 72),
(158, 'Geografía', 5, '1', 'ADO', 72),
(159, 'Análisis Matemático', 5, '1', 'ADO', 144),
(160, 'Derecho', 5, '1', 'ADO', 108),
(161, 'Organización Industrial', 5, '1', 'ADO', 144),
(162, 'Costos', 5, '1', 'ADO', 72),
(163, 'Teoría de las Organizaciones', 5, '1', 'ADO', 72),
(164, 'Gestión de la Producción', 5, '1', 'ADO', 144),
(165, 'Administración y Gestión de RRHH', 5, '1', 'ADO', 144),
(166, 'Sistemas de Información Contable', 5, '1', 'ADO', 144),
(167, 'Literatura', 5, '2', 'ADO', 72),
(168, 'Inglés', 5, '2', 'ADO', 72),
(169, 'Educación física', 5, '2', 'ADO', 72),
(170, 'Polit. y Ciud.', 5, '2', 'ADO', 72),
(171, 'Historia', 5, '2', 'ADO', 72),
(172, 'Geografía', 5, '2', 'ADO', 72),
(173, 'Análisis Matemático', 5, '2', 'ADO', 144),
(174, 'Derecho', 5, '2', 'ADO', 108),
(175, 'Organización Industrial', 5, '2', 'ADO', 144),
(176, 'Costos', 5, '2', 'ADO', 72),
(177, 'Teoría de las Organizaciones', 5, '2', 'ADO', 72),
(178, 'Gestión de la Producción', 5, '2', 'ADO', 144),
(179, 'Administración y Gestión de RRHH', 5, '2', 'ADO', 144),
(180, 'Sistemas de Información Contable', 5, '2', 'ADO', 144),
(181, 'Literatura', 5, '3', 'ADO', 72),
(182, 'Inglés', 5, '3', 'ADO', 72),
(183, 'Educación física', 5, '3', 'ADO', 72),
(184, 'Polit. y Ciud.', 5, '3', 'ADO', 72),
(185, 'Historia', 5, '3', 'ADO', 72),
(186, 'Geografía', 5, '3', 'ADO', 72),
(187, 'Análisis Matemático', 5, '3', 'ADO', 144),
(188, 'Derecho', 5, '3', 'ADO', 108),
(189, 'Organización Industrial', 5, '3', 'ADO', 144),
(190, 'Costos', 5, '3', 'ADO', 72),
(191, 'Teoría de las Organizaciones', 5, '3', 'ADO', 72),
(192, 'Gestión de la Producción', 5, '3', 'ADO', 144),
(193, 'Administración y Gestión de RRHH', 5, '3', 'ADO', 144),
(194, 'Sistemas de Información Contable', 5, '3', 'ADO', 144),
(195, 'Polit. y Ciud.', 5, '1', 'IPP', 72),
(196, 'Historia', 5, '1', 'IPP', 72),
(197, 'Geografía', 5, '1', 'IPP', 72),
(198, 'Análisis Matemático', 5, '1', 'IPP', 144),
(199, 'Sistemas Digitales', 5, '1', 'IPP', 108),
(200, 'Teleinformática', 5, '1', 'IPP', 144),
(201, 'Laboratorio de Programación II', 5, '1', 'IPP', 72),
(202, 'Laboratorio de Hardware', 5, '1', 'IPP', 144),
(203, 'Laboratorio de Sist. Op.', 5, '1', 'IPP', 144),
(204, 'Laboratorio de Aplicaciones', 5, '1', 'IPP', 72),
(205, 'Literatura', 5, '1', 'IPP', 72),
(206, 'Inglés', 5, '1', 'IPP', 72),
(207, 'Educación física', 5, '1', 'IPP', 72),
(208, 'Polit. y Ciud.', 5, '2', 'IPP', 72),
(209, 'Historia', 5, '2', 'IPP', 72),
(210, 'Geografía', 5, '2', 'IPP', 72),
(211, 'Análisis Matemático', 5, '2', 'IPP', 144),
(212, 'Sistemas Digitales', 5, '2', 'IPP', 108),
(213, 'Teleinformática', 5, '2', 'IPP', 144),
(214, 'Laboratorio de Programación II', 5, '2', 'IPP', 72),
(215, 'Laboratorio de Hardware', 5, '2', 'IPP', 144),
(216, 'Laboratorio de Sist. Op.', 5, '2', 'IPP', 144),
(217, 'Laboratorio de Aplicaciones', 5, '2', 'IPP', 72),
(218, 'Literatura', 5, '2', 'IPP', 72),
(219, 'Inglés', 5, '2', 'IPP', 72),
(220, 'Educación física', 5, '2', 'IPP', 72),
(221, 'Polit. y Ciud.', 5, '3', 'IPP', 72),
(222, 'Historia', 5, '3', 'IPP', 72),
(223, 'Geografía', 5, '3', 'IPP', 72),
(224, 'Análisis Matemático', 5, '3', 'IPP', 144),
(225, 'Sistemas Digitales', 5, '3', 'IPP', 108),
(226, 'Teleinformática', 5, '3', 'IPP', 144),
(227, 'Laboratorio de Programación II', 5, '3', 'IPP', 72),
(228, 'Laboratorio de Hardware', 5, '3', 'IPP', 144),
(229, 'Laboratorio de Sist. Op.', 5, '3', 'IPP', 144),
(230, 'Laboratorio de Aplicaciones', 5, '3', 'IPP', 72),
(231, 'Literatura', 5, '3', 'IPP', 72),
(232, 'Inglés', 5, '3', 'IPP', 72),
(233, 'Educación física', 5, '3', 'IPP', 72),
(234, 'Literatura', 5, '1', 'PROG', 72),
(235, 'Inglés', 5, '1', 'PROG', 72),
(236, 'Educación física', 5, '1', 'PROG', 72),
(237, 'Polit. y Ciud.', 5, '1', 'PROG', 72),
(238, 'Historia', 5, '1', 'PROG', 72),
(239, 'Geografía', 5, '1', 'PROG', 72),
(240, 'Análisis Matemático', 5, '1', 'PROG', 144),
(241, 'Sistemas Digitales', 5, '1', 'PROG', 108),
(242, 'Base de Datos', 5, '1', 'PROG', 144),
(243, 'Modelos y sistemas', 5, '1', 'PROG', 72),
(244, 'Laboratorio de Programación II', 5, '1', 'PROG', 144),
(245, 'Laboratorio de Redes Informáticas', 5, '1', 'PROG', 144),
(246, 'Laboratorio de DiseÃ±o Web', 5, '1', 'PROG', 72),
(247, 'Laboratorio de Bases de Datos', 5, '1', 'PROG', 72),
(248, 'Literatura', 6, '1', 'ADO', 72),
(249, 'Inglés', 6, '1', 'ADO', 72),
(250, 'Educación física', 6, '1', 'ADO', 72),
(251, 'Filosofía', 6, '1', 'ADO', 72),
(252, 'Arte', 6, '1', 'ADO', 72),
(253, 'Matemática Aplicada', 6, '1', 'ADO', 72),
(254, 'Organización Industrial', 6, '1', 'ADO', 108),
(255, 'Planeamiento', 6, '1', 'ADO', 72),
(256, 'Economía', 6, '1', 'ADO', 72),
(257, 'Gastos Financiera, Bancaria y Seguros', 6, '1', 'ADO', 72),
(258, 'Teoría y Técnica Impositiva', 6, '1', 'ADO', 72),
(259, 'Derechos del Trabajo', 6, '1', 'ADO', 72),
(260, 'Producción y Comercio Exterior', 6, '1', 'ADO', 144),
(261, 'Admin. y Gest. de RRHH', 6, '1', 'ADO', 72),
(262, 'Sist. de Información Contable', 6, '1', 'ADO', 144),
(263, 'Sist. de Información Contable', 6, '2', 'ADO', 144),
(264, 'Literatura', 6, '2', 'ADO', 72),
(265, 'Inglés', 6, '2', 'ADO', 72),
(266, 'Educación física', 6, '2', 'ADO', 72),
(267, 'Filosofía', 6, '2', 'ADO', 72),
(268, 'Arte', 6, '2', 'ADO', 72),
(269, 'Matemática Aplicada', 6, '2', 'ADO', 72),
(270, 'Organización Industrial', 6, '2', 'ADO', 108),
(271, 'Planeamiento', 6, '2', 'ADO', 72),
(272, 'Economía', 6, '2', 'ADO', 72),
(273, 'Gastos Financiera, Bancaria y Seguros', 6, '2', 'ADO', 72),
(274, 'Teoría y Técnica Impositiva', 6, '2', 'ADO', 72),
(275, 'Derechos del Trabajo', 6, '2', 'ADO', 72),
(276, 'Producción y Comercio Exterior', 6, '2', 'ADO', 144),
(277, 'Admin. y Gest. de RRHH', 6, '2', 'ADO', 72),
(278, 'Literatura', 6, '3', 'ADO', 72),
(279, 'Inglés', 6, '3', 'ADO', 72),
(280, 'Educación física', 6, '3', 'ADO', 72),
(281, 'Filosofía', 6, '3', 'ADO', 72),
(282, 'Arte', 6, '3', 'ADO', 72),
(283, 'Matemática Aplicada', 6, '3', 'ADO', 72),
(284, 'Organización Industrial', 6, '3', 'ADO', 108),
(285, 'Planeamiento', 6, '3', 'ADO', 72),
(286, 'Economía', 6, '3', 'ADO', 72),
(287, 'Gastos Financiera, Bancaria y Seguros', 6, '3', 'ADO', 72),
(288, 'Teoría y Técnica Impositiva', 6, '3', 'ADO', 72),
(289, 'Derechos del Trabajo', 6, '3', 'ADO', 72),
(290, 'Producción y Comercio Exterior', 6, '3', 'ADO', 144),
(291, 'Admin. y Gest. de RRHH', 6, '3', 'ADO', 72),
(292, 'Sist. de Información Contable', 6, '3', 'ADO', 144),
(293, 'Literatura', 6, '1', 'IPP', 72),
(294, 'Inglés', 6, '1', 'IPP', 72),
(295, 'Educación física', 6, '1', 'IPP', 72),
(296, 'Filosofía', 6, '1', 'IPP', 72),
(297, 'Arte', 6, '1', 'IPP', 72),
(298, 'Sistemas digitales', 6, '1', 'IPP', 108),
(299, 'Seguridad Informática', 6, '1', 'IPP', 108),
(300, 'Derechos del Trabajo', 6, '1', 'IPP', 72),
(301, 'Matemática Aplicada', 6, '1', 'IPP', 72),
(302, 'Investigación Operativa', 6, '1', 'IPP', 108),
(303, 'Literatura', 6, '2', 'IPP', 72),
(304, 'Inglés', 6, '2', 'IPP', 72),
(305, 'Educación física', 6, '2', 'IPP', 72),
(306, 'Filosofía', 6, '2', 'IPP', 72),
(307, 'Arte', 6, '2', 'IPP', 72),
(308, 'Sistemas digitales', 6, '2', 'IPP', 108),
(309, 'Seguridad Informática', 6, '2', 'IPP', 108),
(310, 'Derechos del Trabajo', 6, '2', 'IPP', 72),
(311, 'Matemática Aplicada', 6, '2', 'IPP', 72),
(312, 'Investigación Operativa', 6, '2', 'IPP', 108),
(313, 'Literatura', 6, '3', 'IPP', 72),
(314, 'Inglés', 6, '3', 'IPP', 72),
(315, 'Educación física', 6, '3', 'IPP', 72),
(316, 'Filosofía', 6, '3', 'IPP', 72),
(317, 'Arte', 6, '3', 'IPP', 72),
(318, 'Sistemas digitales', 6, '3', 'IPP', 108),
(319, 'Seguridad Informática', 6, '3', 'IPP', 108),
(320, 'Derechos del Trabajo', 6, '3', 'IPP', 72),
(321, 'Matemática Aplicada', 6, '3', 'IPP', 72),
(322, 'Investigación Operativa', 6, '3', 'IPP', 108),
(323, 'Literatura', 6, '1', 'PROG', 72),
(324, 'Inglés', 6, '1', 'PROG', 72),
(325, 'Educación física', 6, '1', 'PROG', 72),
(326, 'Filosofía', 6, '1', 'PROG', 72),
(327, 'Arte', 6, '1', 'PROG', 72),
(328, 'Matemática discreta', 6, '1', 'PROG', 72),
(329, 'Sistemas digitales', 6, '1', 'PROG', 108),
(330, 'Sist. Gestión y Autogest.', 6, '1', 'PROG', 108),
(331, 'Seguridad Informática', 6, '1', 'PROG', 108),
(332, 'Derechos del Trabajo', 6, '1', 'PROG', 72),
(333, 'Laboratorio de Programación III', 6, '1', 'PROG', 72),
(334, 'Laboratorio de Procesos Industriales', 6, '1', 'PROG', 144),
(335, 'Laboratorio de Aplic. Web Dinámicas', 6, '1', 'PROG', 72),
(336, 'Laboratorio de Aplic. Web Estáticas', 6, '1', 'PROG', 144),
(337, 'Literatura', 6, '2', 'PROG', 72),
(338, 'Inglés', 6, '2', 'PROG', 72),
(339, 'Educación física', 6, '2', 'PROG', 72),
(340, 'Filosofía', 6, '2', 'PROG', 72),
(341, 'Arte', 6, '2', 'PROG', 72),
(342, 'Matemática discreta', 6, '2', 'PROG', 72),
(343, 'Sistemas digitales', 6, '2', 'PROG', 108),
(344, 'Sist. Gestión y Autogest.', 6, '2', 'PROG', 108),
(345, 'Seguridad Informática', 6, '2', 'PROG', 108),
(346, 'Derechos del Trabajo', 6, '2', 'PROG', 72),
(347, 'Laboratorio de Programación III', 6, '2', 'PROG', 72),
(348, 'Laboratorio de Procesos Industriales', 6, '2', 'PROG', 144),
(349, 'Laboratorio de Aplic. Web Dinámicas', 6, '2', 'PROG', 72),
(350, 'Laboratorio de Aplic. Web Estáticas', 6, '2', 'PROG', 144),
(351, 'Prácticas Profesionalizantes', 7, '1', 'ADO', 216),
(352, 'Economía y Desarrollo Sustentable', 7, '1', 'ADO', 108),
(353, 'Auditoría y Control de Gestión', 7, '1', 'ADO', 72),
(354, 'Eval. y Gest. de Proyectos', 7, '1', 'ADO', 144),
(355, 'Capital Humano y Relaciones Laborales', 7, '1', 'ADO', 72),
(356, 'Análisis e Interpretación de Estados Contables', 7, '1', 'ADO', 144),
(357, 'PDeI de Sist. Computacionales	', 7, '1', 'IPP', 144),
(358, 'Inst., Mant. y Rep. de Sist. Computacionales', 7, '1', 'IPP', 144),
(359, 'Inst., Mant. y Rep. de Redes Informáticas', 7, '1', 'IPP', 144),
(360, 'Prácticas Profesionalizantes', 7, '1', 'IPP', 216),
(361, 'Emprend. Productivos y Desarrollo Local', 7, '1', 'IPP', 72),
(362, 'Evaluación de Proyectos', 7, '1', 'IPP', 72),
(363, 'Modelos y Sistemas', 7, '1', 'IPP', 72),
(364, 'Bases de Datos', 7, '1', 'IPP', 108),
(365, 'PDeI de Sist. Computacionales	', 7, '2', 'IPP', 144),
(366, 'Inst., Mant. y Rep. de Sist. Computacionales', 7, '2', 'IPP', 144),
(367, 'Inst., Mant. y Rep. de Redes Informáticas', 7, '2', 'IPP', 144),
(368, 'Prácticas Profesionalizantes', 7, '2', 'IPP', 216),
(369, 'Emprend. Productivos y Desarrollo Local', 7, '2', 'IPP', 72),
(370, 'Evaluación de Proyectos', 7, '2', 'IPP', 72),
(371, 'Modelos y Sistemas', 7, '2', 'IPP', 72),
(372, 'Bases de Datos', 7, '2', 'IPP', 108),
(373, 'Prácticas Profesionalizantes', 7, '1', 'PROG', 216),
(374, 'Emprend. Productivos y Desarrollo Local', 7, '1', 'PROG', 72),
(375, 'Evaluación de Proyectos', 7, '1', 'PROG', 72),
(376, 'Modelos y Sistemas', 7, '1', 'PROG', 108),
(377, 'Organización y Métodos', 7, '1', 'PROG', 72),
(378, 'PDeI de Sist. Computacionales', 7, '1', 'PROG', 144),
(379, 'Proyecto de Desarrollo de Soft. para Plat. Móv.', 7, '1', 'PROG', 144),
(380, 'Proyecto de Desarrollo de Implementación de Sitios Web Dinámicos', 7, '1', 'PROG', 144);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(1) NOT NULL,
  `estado` int(1) NOT NULL,
  `permiso` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `estado`, `permiso`) VALUES
(1, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `files`
--
ALTER TABLE `files`
  MODIFY `id_archivo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id_materia` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
