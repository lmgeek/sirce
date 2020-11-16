-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-01-2020 a las 12:25:43
-- Versión del servidor: 5.1.33
-- Versión de PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `calificaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(4) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telf_residencial` char(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telf_celular` char(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `nombres`, `apellidos`, `telf_residencial`, `telf_celular`, `email`) VALUES
(8, 'JOSE GREGORIO', 'QUERO RIVERO', '0268-9894374', '0424-6755928', 'tsujosequero2007@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_bitacora` int(4) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(4) NOT NULL,
  `ip` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `accion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `n_intentos_fallidos` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_bitacora`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `bitacora`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE IF NOT EXISTS `calificaciones` (
  `id_califica` int(4) NOT NULL AUTO_INCREMENT,
  `nota_numero` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nota_letra` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `veces_cursadas` varchar(3) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci DEFAULT NULL,
  `status` enum('Aprobada','Reprobada') COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_califica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `calificaciones`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `id_docente` int(4) NOT NULL AUTO_INCREMENT,
  `cod_dace` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_ingre` date NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nivel_usuario` enum('Administrador','Docente','Operador') COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombres_docente` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos_docente` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nacionalidad` enum('V','E','P') COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula` char(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nacim` date DEFAULT NULL,
  `sexo` enum('Masculino','Femenino') COLLATE utf8_spanish_ci DEFAULT NULL,
  `edo_civil` enum('Casado_a','Soltero_a','Viudo_a','Divorciado_a','Concubino_a') COLLATE utf8_spanish_ci DEFAULT NULL,
  `edo_naci` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lugar_naci` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `municipio_habita` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion_habita` text COLLATE utf8_spanish_ci,
  `telf_celular` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telf_casa` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_personal` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_institucion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_pregrado` text COLLATE utf8_spanish_ci,
  `titulo_postgrado` text COLLATE utf8_spanish_ci NOT NULL,
  `condicion` enum('Ordinario','Contratado') COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria_academica` enum('Agregado','Asistente','Asociado','Auxiliar I','Auxiliar II','Auxiliar III','Auxiliar IV','Auxiliar V','Instructor','Titular') COLLATE utf8_spanish_ci DEFAULT NULL,
  `dedicacion` enum('Dedicación Exclusiva','Tiempo Completo','Medio Tiempo','Tiempo Convencional') COLLATE utf8_spanish_ci DEFAULT NULL,
  `anio_ingreso_inst` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_docente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `docentes`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id_estud` int(4) NOT NULL AUTO_INCREMENT,
  `cod_estud` int(6) DEFAULT NULL,
  `nombres` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nacionalidad` enum('V','E') COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula` char(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `trayecto` enum('Inicial','I','II','Transición','Nivelación','Prosecución','III','IV') COLLATE utf8_spanish_ci DEFAULT NULL,
  `trimestre` enum('Sin Trayecto','I','II','III') COLLATE utf8_spanish_ci DEFAULT NULL,
  `fech_registro` date DEFAULT NULL,
  `id_califica` int(4) NOT NULL,
  `id_docente` int(4) NOT NULL,
  `id_periodo` int(4) NOT NULL,
  `id_seccion` int(4) NOT NULL,
  `id_unid_curri` int(4) NOT NULL,
  `id_ubicacion` int(4) NOT NULL,
  PRIMARY KEY (`id_estud`),
  KEY `id_califica` (`id_califica`),
  KEY `id_docente` (`id_docente`,`id_periodo`,`id_seccion`,`id_unid_curri`),
  KEY `id_periodo` (`id_periodo`),
  KEY `id_seccion` (`id_seccion`),
  KEY `id_unid_curri` (`id_unid_curri`),
  KEY `id_ubicacion` (`id_ubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `estudiantes`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE IF NOT EXISTS `periodos` (
  `id_periodo` int(4) NOT NULL AUTO_INCREMENT,
  `periodos` varchar(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_periodo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=25 ;

--
-- Volcar la base de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id_periodo`, `periodos`) VALUES
(1, 'I-2009'),
(2, 'II-2009'),
(3, 'I-2010'),
(4, 'II-2010'),
(5, 'I-2011'),
(6, 'II-2011'),
(7, 'III-2011'),
(8, 'I-2012'),
(9, 'II-2012'),
(10, 'III-2012'),
(11, 'I-2013'),
(12, 'II-2013'),
(13, 'I-2014'),
(14, 'II-2014'),
(15, 'I-2015'),
(16, 'II-2015'),
(17, 'I-2016'),
(18, 'II-2016'),
(19, 'I-2017'),
(20, 'II-2017'),
(21, 'I-2018'),
(22, 'II-2018'),
(23, 'I-2019'),
(24, 'II-2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE IF NOT EXISTS `secciones` (
  `id_seccion` int(4) NOT NULL AUTO_INCREMENT,
  `secciones` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_seccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Volcar la base de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id_seccion`, `secciones`) VALUES
(1, 'Secc. 01'),
(2, 'Secc. 02'),
(3, 'Secc. 03'),
(4, 'Secc. 04'),
(5, 'Secc. 05'),
(6, 'Secc. 06'),
(7, 'Secc. 07'),
(8, 'Secc. 08'),
(9, 'Secc. 09'),
(10, 'Secc. 10'),
(11, 'Secc. 11'),
(12, 'Secc. 12'),
(13, 'Secc. 13'),
(14, 'Secc. 14'),
(15, 'Secc. 15'),
(16, 'Secc. 16'),
(17, 'Secc. 17'),
(18, 'Secc. 18'),
(19, 'Secc. 19'),
(20, 'Secc. 10'),
(21, 'Secc. 11'),
(22, 'Secc. 22'),
(23, 'Secc. 23'),
(24, 'Secc. 24'),
(25, 'Secc. 25'),
(26, 'Secc. 26'),
(27, 'Secc. 27'),
(28, 'Secc. 28'),
(29, 'Secc. 29'),
(30, 'Secc. 30'),
(31, 'Secc. 31'),
(32, 'Secc. 32'),
(33, 'Secc. 33'),
(34, 'Secc. 34'),
(35, 'Secc. 35'),
(36, 'Secc. 36'),
(37, 'Secc. 37'),
(38, 'Secc. 38'),
(39, 'Secc. 39'),
(40, 'Secc. 40'),
(41, 'Secc. 41'),
(42, 'Secc. 42'),
(43, 'Secc. 43'),
(44, 'Secc. 44'),
(45, 'Secc. 45'),
(46, 'Secc. 46'),
(47, 'Secc. 47'),
(48, 'Secc. 48'),
(49, 'Secc. 49'),
(50, 'Secc. 50'),
(51, 'Secc. 51'),
(52, 'Secc. 52'),
(53, 'Secc. 53'),
(54, 'Secc. 54'),
(55, 'Secc. 55'),
(56, 'Secc. 56'),
(57, 'Secc. 57'),
(58, 'Secc. 58'),
(59, 'Secc. 59'),
(60, 'Secc. 60'),
(61, 'Secc. 61'),
(62, 'Secc. 62'),
(63, 'Secc. 63'),
(64, 'Secc. 64'),
(65, 'Secc. 65'),
(66, 'Secc. 66'),
(67, 'Secc. 67'),
(68, 'Secc. 68'),
(69, 'Secc. 69'),
(70, 'Secc. 70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE IF NOT EXISTS `ubicacion` (
  `id_ubicacion` int(4) NOT NULL AUTO_INCREMENT,
  `modalidad` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `municipio` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `parroquia` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_alumno` int(4) NOT NULL,
  PRIMARY KEY (`id_ubicacion`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `ubicacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unid_curric`
--

CREATE TABLE IF NOT EXISTS `unid_curric` (
  `id_uc` int(6) NOT NULL AUTO_INCREMENT,
  `tipo_plan` enum('A','B','C','C-MS','D') COLLATE utf8_spanish_ci DEFAULT NULL,
  `unid_curric` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cod_uc_dace` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cod_uc_malla` varchar(22) COLLATE utf8_spanish_ci DEFAULT NULL,
  `peso_uc` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tray_perten_uc` enum('Inicial','I','II','Transición','Nivelación','III','IV','Prosecución','PERPE') COLLATE utf8_spanish_ci DEFAULT NULL,
  `trim_perten_uc` enum('Sin Trimestre','Trimestre I','Trimestre I y II','Trimestre II','Trimestre II y III','Trimestre III','Trimestre II y III','Trimestre I, II y III') COLLATE utf8_spanish_ci DEFAULT NULL,
  `hea` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hei` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hte` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `duracion` enum('12 Semanas','24 Semanas','36 Semanas') COLLATE utf8_spanish_ci DEFAULT NULL,
  `n_trimestre` enum('1','2','3') COLLATE utf8_spanish_ci DEFAULT NULL,
  `hea_2` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hei_2` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hte_2` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `htae` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `htei` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `htte` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `prela` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_malla` enum('Sede','Municipalización','Sede-Municipalización','PERPE') COLLATE utf8_spanish_ci DEFAULT NULL,
  `documen_rector` enum('2008','2010 (4ta. Versión)','2011 (Ver. Definitiva)','2014','2015 (PERPE)') COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_uc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=178 ;

--
-- Volcar la base de datos para la tabla `unid_curric`
--

INSERT INTO `unid_curric` (`id_uc`, `tipo_plan`, `unid_curric`, `cod_uc_dace`, `cod_uc_malla`, `peso_uc`, `tray_perten_uc`, `trim_perten_uc`, `hea`, `hei`, `hte`, `duracion`, `n_trimestre`, `hea_2`, `hei_2`, `hte_2`, `htae`, `htei`, `htte`, `prela`, `tipo_malla`, `documen_rector`) VALUES
(1, 'A', 'La Administración en el Nuevo Modelo Social', 'S/I', 'NMS6002', '2', 'Inicial', 'Sin Trimestre', 'S/I', 'S/I', 'S/I', '12 Semanas', '1', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2008'),
(2, 'A', 'Proyecto Nacional y Nueva Ciudadanía', 'B1BA', 'PNNC8003', '3', 'Inicial', 'Sin Trimestre', 'S/I', 'S/I', 's', '12 Semanas', '1', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2008'),
(3, 'A', 'Desarrollo Integral', 'S/I', 'DI6002', '2', 'Inicial', 'Sin Trimestre', 'S/I', 'S/I', 'S/I', '12 Semanas', '1', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2008'),
(4, 'A', 'Matemática', 'B1AA', 'MA6002', '5', 'Inicial', 'Sin Trimestre', 'S/I', 'S/I', 'S/I', '12 Semanas', '1', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2008'),
(5, 'A', 'Taller de Inducción', 'B1CA', 'S/I', '2', 'Inicial', 'Sin Trimestre', 'S/I', 'S/I', 'S/I', '12 Semanas', '1', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2008'),
(6, 'A', 'Proyecto I: Análisis y Ejecución de los Procesos Administrativos en las Organizaciones', 'B2BA', 'PRO70012', '2', 'I', 'Trimestre I, II y III', '5', '8', '13', '36 Semanas', '3', '180', '270', '450', '540', '810', '135', '***', 'Sede', '2008'),
(7, 'A', 'Fundamentos de Administración', 'B2KA', 'S/I', '1', 'I', 'Trimestre I', '1', '2', '3', '12 Semanas', '1', '12', '18', '30', '12', '18', '30', '***', 'Sede', '2008'),
(8, 'A', 'Redacción de Informes', 'B2KA', 'S/I', '1', 'I', 'Trimestre II', '1', '2', '3', '12 Semanas', '1', '12', '18', '30', '12', '18', '30', '***', 'Sede', '2008'),
(9, 'A', 'Tecnologí¬as de la Información y Comunicación I', 'B2IA', 'S/I', '1', 'I', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(10, 'A', 'Técnicas de Recolección y Análisis de Datos', 'B2LA', 'S/I', '1', 'I', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2008'),
(11, 'A', 'Deberes Formales del Contribuyente', 'B2JA', 'S/I', '1', 'I', 'Trimestre II y III', '2', '3', '5', '24 Semanas', '2', '24', '72', '96', '48', '144', '192', '***', 'Sede', '2008'),
(12, 'A', 'Administración Pública Nacional', 'S/I', 'APN15015', '6', 'I', 'Sin Trimestre', 'S/I', 'S/I', 'S/I', NULL, NULL, 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2008'),
(13, 'A', 'Operaciones Financieras', 'B2FA', 'OF6012', '2', 'I', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(14, 'A', 'Contabilidad I', 'B2CA', 'CON18016', '6', 'I', 'Trimestre I y II', '2', '3', '6', '24 Semanas', '2', '48', '72', '120', '96', '144', '240', '***', 'Sede', '2008'),
(15, 'A', 'Teoría  Práctica del Mercadeo', 'B2GA', 'TPM9013', '2', 'I', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2008'),
(16, 'A', 'Inglés I', 'B2EA', 'S/I', '3', 'I', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2008'),
(17, 'A', 'Deporte, Arte y Recreación I', 'B2DA', 'S/I', '3', 'I', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2008'),
(18, 'A', 'Formación Sociocrítica I', 'S/I', 'S/I', '5', 'I', 'Trimestre I, II y III', '2', '3', '5', '36 Semanas', '3', '72', '108', '180', '216', '324', '540', '***', 'Sede', '2008'),
(19, 'A', 'Proyecto II:  Supervisión y Conducción Técnica de los Procesos Administrativos', 'B3AA', 'PRO700224', '1', 'II', 'Trimestre I, II y III', '5', '8', '13', '36 Semanas', '3', '60', '270', '330', '180', '810', '990', NULL, 'Sede', '2008'),
(20, 'A', 'Supervisión Técnica de los Procesos Administrativos', 'S/I', 'S/I', '2', 'II', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(21, 'A', 'Contabilidad Gubernamental', 'B3JA', 'S/I', '1', 'II', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(22, 'A', 'Tecnologías de la Información y Comunicación', 'B3KA', 'S/I', '1', 'II', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(23, 'A', 'Marco Legal vigente de las Organizaciones', 'B3LA', 'S/I', '1', 'II', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(24, 'A', 'Deberes Formales del Contribuyente', 'B3MA', 'S/I', '1', 'II', 'Trimestre I y II', '1', '2', '3', '24 Semanas', '2', '12', '36', '48', '24', '72', '96', '***', 'Sede', '2008'),
(25, 'A', 'Formación Sociocrítica II', 'S/I', 'S/I', '5', 'II', 'Trimestre I, II y III', '2', '3', '5', '36 Semanas', '3', '24', '108', '132', '72', '324', '396', '***', 'Sede', '2008'),
(26, 'A', 'Administración de Costos', 'B3DA', 'ADC6022', '2', 'II', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(27, 'A', 'Organización y Métodos', 'B3FA', 'OM6022', '2', 'II', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(28, 'A', 'Contabilidad II', 'B3CA', 'CON9023', '3', 'II', 'Trimestre I y II', '2', '3', '5', '24 Semanas', '2', '24', '72', '96', '48', '144', '192', '***', 'Sede', '2008'),
(29, 'A', 'Talento Humano y Ambiente de Trabajo', 'B3EA', 'THAT9023', '3', 'II', 'Trimestre I y II', '2', '3', '5', '24 Semanas', '2', '24', '72', '96', '48', '144', '192', '***', 'Sede', '2008'),
(30, 'A', 'Electiva I:  Calidad y Gestión Ambiental Organizacional', 'B3GA', 'S/I', '3', 'II', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2008'),
(31, 'A', 'Electiva II', 'B3HA', 'S/I', '3', 'II', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2008'),
(32, 'A', 'Economía Sustentable en los Modelos de Desarrollo', 'B3BA', 'ESMD15025', '5', 'II', 'Sin Trimestre', 'S/I', 'S/I', 'S/I', NULL, NULL, 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', NULL, 'Sede', '2008'),
(33, 'A', 'Taller de Integración', 'D1AA', 'S/I', '0', 'Prosecución', 'Sin Trimestre', 'S/I', 'S/I', 'S/I', '12 Semanas', '1', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2008'),
(34, 'A', 'Proyecto Nacional y Nueva Ciudadanía', 'D1BA', 'S/I', '0', 'Prosecución', 'Sin Trimestre', 'S/I', 'S/I', 'S/I', '12 Semanas', '1', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2008'),
(35, 'A', 'Proyecto III: Diseño, Planificación, Desarrollo e Innovación de Sistemas Administrativos', 'D2CA', 'PRO700324', '1', 'III', 'Trimestre I, II y III', '5', '8', '13', '36 Semanas', '3', '180', '270', '450', '540', '810', '135', '***', 'Sede', '2008'),
(36, 'A', 'Tecnologías de la Información y Comunicación', 'D2LA', 'S/I', '1', 'III', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(37, 'A', 'Planificación', 'D2MA', 'S/I', '3', 'III', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(38, 'A', 'Creatividad e Innovación', 'D2JA', 'S/I', '1', 'III', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(39, 'A', 'Declaración de Rentas', 'D2JA', 'S/I', '1', 'III', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(40, 'A', 'Formación Sociocrítica III', 'S/I', 'S/I', '5', 'III', 'Trimestre I, II y III', '3', '5', '8', '36 Semanas', '3', '108', '162', '270', '324', '486', '810', '***', 'Sede', '2008'),
(41, 'A', 'Administración de la Producción', 'D2AA', 'ADP6032', '2', 'III', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(42, 'A', 'Presupuesto Público', 'D2IA', 'PPU4032', '2', 'III', 'Trimestre II', '1', '2', '3', '12 Semanas', '1', '12', '18', '30', '12', '18', '30', '***', 'Sede', '2008'),
(43, 'A', 'Presupuesto Privado', 'D2GA', 'PPR3031', '1', 'III', 'Trimestre II', '1', '2', '3', '12 Semanas', '1', '12', '18', '30', '12', '18', '30', '***', 'Sede', '2008'),
(44, 'A', 'Administración del Mercadeo', 'D2HA', 'ADM6032', '3', 'III', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(45, 'A', 'Formulación y Evaluación de Proyectos', 'D2DA', 'PEP3031', '1', 'III', 'Trimestre II', '1', '2', '3', '12 Semanas', '1', '12', '18', '30', '12', '18', '30', '***', 'Sede', '2008'),
(46, 'A', 'Idiomas II', 'D2EA', 'S/I', '3', 'III', 'Trimestre I', '3', '5', '6', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2008'),
(47, 'A', 'Deporte, Arte y Recreación II', 'D2BA', 'S/I', '3', 'III', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2008'),
(48, 'A', 'Proyecto IV:  Supervisión y Conducción Técnica de los Procesos Administrativos', 'D3AA', 'PRO700424', '1', 'IV', 'Trimestre I, II y III', '5', '8', '13', '36 Semanas', '3', '180', '270', '450', '540', '810', '135', '***', 'Sede', '2008'),
(49, 'A', 'Control de la Gestión Administrativa', 'D3HA', 'S/I', '2', 'IV', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(50, 'A', 'Paquetes Informáticos Aplicados a los Procesos Administrativos', 'D3KA', 'S/I', '2', 'IV', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(51, 'A', 'Plan de Negocio', 'D3JA', 'S/I', '2', 'IV', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(52, 'A', 'Formación Sociocrítica IV', 'S/I', 'S/I', '5', 'IV', 'Trimestre I, II y III', '3', '5', '8', '36 Semanas', '3', '108', '162', '270', '324', '486', '810', '***', 'Sede', '2008'),
(53, 'A', 'Análisis e Interpretación de Estados Financieros', 'D3CA', 'AIEF6042', '2', 'IV', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(54, 'A', 'Administración Financiera', 'D3EA', 'AF6042', '2', 'IV', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(55, 'A', 'Sistemas Financieros', 'D3DA', 'SFN6042', '2', 'IV', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2008'),
(56, 'A', 'Electiva III:  Administración de Empresas de Producción Social', 'D3FA', 'S/I', '3', 'IV', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2008'),
(57, 'A', 'Electiva IV', 'D3GA', 'S/I', '3', 'IV', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2008'),
(58, 'A', 'ADM. PROC. UNIDAD ALC EN NUEVO C', 'D3BA', 'S/I', '5', 'IV', 'Sin Trimestre', 'S/I', 'S/I', 'S/I', NULL, NULL, 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2008'),
(59, 'A', 'Dirección en Organizaciones', 'D3IA', 'S/I', '1', 'IV', NULL, 'S/I', 'S/I', 'S/I', '', NULL, 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2008'),
(60, 'B', 'Matemática', 'B1AB', 'MA6002', '2', 'Inicial', 'Sin Trimestre', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', ''),
(61, 'B', 'Proyecto Nacional y Nueva Ciudadanía', 'B1BB', 'PNNC8003', '3', 'Inicial', 'Sin Trimestre', '4', '6', '10', '12 Semanas', '1', '48', '72', '120', '48', '72', '12', '***', 'Sede', ''),
(62, 'B', 'Desarrollo Integral', 'B1CB', 'DI6002', '2', 'Inicial', 'Sin Trimestre', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', ''),
(63, 'B', 'Gestión de Riesgo y Protección Civil', 'B1DB', 'GRPC3001', '1', 'Inicial', 'Sin Trimestre', '1', '2', '3', '12 Semanas', '1', '12', '18', '30', '12', '18', '30', '***', 'Sede', ''),
(64, 'B', 'Proyecto Inicial: Administración en el Nuevo Modelo Social', 'B1EB', 'PRO6002', '2', 'Inicial', 'Sin Trimestre', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', ''),
(65, 'B', 'Proyecto I: Identificación y Conocimiento de los Procesos Administrativos en Distintas Organizaciones', 'B2AB', 'PRO570119', '1', 'I', 'Trimestre I, II y III', '6', '', '15', '36 Semanas', '3', '216', '324', '540', '648', '972', '1620', '***', 'Sede', ''),
(66, 'B', 'Técnicas de Expresión Oral y Escrita', 'B2BB', 'PTE3011', '1', 'I', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', ''),
(67, 'B', 'Contabilidad I', 'B2CB', 'CON12014', '4', 'I', 'Trimestre I, II y III', '2', '3', '6', '36 Semanas', '3', '72', '108', '180', '216', '324', '540', '***', 'Sede', ''),
(68, 'B', 'Idiomas', 'B2EB', 'IDI9013', '3', 'I', 'Trimestre I, II y III', '3', '5', '8', '36 Semanas', '3', '108', '162', '270', '324', '486', '810', '***', 'Sede', ''),
(69, 'B', 'Operaciones Financieras', 'B2FB', 'OF6012', '2', 'I', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', ''),
(70, 'B', 'Teoría y Práctica del Mercadeo', 'B2GB', 'TPM6012, TPM901', '3', 'I', 'Trimestre I y II', '2', '3', '5', '24 Semanas', NULL, '48', '72', '120', '96', '144', '96', '***', 'Sede', '2010 (4ta. Versión)'),
(71, 'B', 'Tecnología de la Información y Comunicación I', 'B2HB', 'PTI3011', '3', 'I', 'Trimestre II', '1', '2', '3', '12 Semanas', '1', '12', '18', '30', '12', '18', '30', '***', 'Sede', '2010 (4ta. Versión)'),
(72, 'B', 'Estadística', 'B2IB', 'PES3011', '1', 'I', 'Trimestre II', '2', '3', '4', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(73, 'B', 'Deberes Formales del Contribuyente y Retención IVA y ISLR', 'B2JB', 'PDF3011', '1', 'I', 'Trimestre III', '1', '2', '3', '12 Semanas', '1', '12', '18', '30', '12', '18', '30', '***', 'Sede', '2010 (4ta. Versión)'),
(74, 'B', 'Formación Socio Crítica I', 'B2KB', 'FSC18016', '6', 'I', 'Trimestre I, II y III', '6', '9', '15', '36 Semanas', '3', '216', '324', '540', '648', '972', '1620', '***', 'Sede', '2010 (4ta. Versión)'),
(75, 'B', 'Fundamentos de la Administración', 'B2LB', 'FA12014', '3', 'I', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2010 (4ta. Versión)'),
(76, 'B', 'Deportes Artes y Recreaciones', 'F2YB', 'DAR9013', '3', 'I', 'Trimestre I, II y III', '3', '5', '8', '36 Semanas', '3', '108', '162', '270', '324', '486', '810', '***', 'Sede', '2010 (4ta. Versión)'),
(77, 'B', 'Proyecto II: Supervición y Conducción Técnica de los Procesos Administrativos', 'B3AB', 'PRO570219', '1', 'II', 'Trimestre I, II y III', '6', '9', '15', '36 Semanas', '3', '216', '324', '540', '648', '972', '1620', 'B2AB (PRO570119)', 'Sede', '2010 (4ta. Versión)'),
(78, 'B', 'Contabilidad Gubernamental', 'B3BB', 'PCG3011 ', '1', 'II', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(79, 'B', 'Contabilidad II', 'B3CB', 'CON12024, CON90', '4', 'II', 'Trimestre I y II', '2', '3', '5', '24 Semanas', '2', '48', '72', '120', '96', '144', '240', '***', 'Sede', '2010 (4ta. Versión)'),
(80, 'B', 'Administración de Costos', 'B3DB', 'ADC6022', '2', 'II', 'Trimestre III', '3', '5', '9', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2010 (4ta. Versión)'),
(81, 'B', 'Talento Humano y Ambiente de Trabajo', 'B3EB', 'THA9023', '3', 'II', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2010 (4ta. Versión)'),
(82, 'B', 'Organización y Sistemas', 'B3FB', 'OS9023, OYS9023', '3', 'II', 'Trimestre II', '2', '35', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(83, 'B', 'Electiva I: Calidad y Gestión Ambiental Organizacional', 'B3GB', 'CGA9023', '3', 'II', 'Trimestre I, II y III', '5', '3', '8', '36 Semanas', '3', '108', '162', '270', '324', '486', '810', '***', 'Sede', '2010 (4ta. Versión)'),
(84, 'B', 'Electiva (*)', 'B3HB', 'ELEC9023', '3', 'II', 'Trimestre III', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2010 (4ta. Versión)'),
(85, 'B', 'Tecnlogías de la Información y Comunicación II', 'B3IB', 'PTI3021', '1', 'II', 'Trimestre II', '1', '2', '3', '12 Semanas', '1', '12', '18', '30', '12', '18', '30', '***', 'Sede', '2010 (4ta. Versión)'),
(86, 'B', 'Marco Legal de las Organizaciones', 'B3JB', 'PML3011', '1', 'II', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(87, 'B', 'Deberes Formales del Contribuyente', 'B3KB', 'PDF3011', '1', 'II', 'Trimestre I', '1', '2', '3', '12 Semanas', '1', '12', '18', '30', '12', '18', '30', '***', 'Sede', '2010 (4ta. Versión)'),
(88, 'B', 'Formación Socio Crítica II', 'B3LB', 'FSC18026, FSC15', '6', 'II', 'Trimestre I, II y III', '2', '3', '5', '36 Semanas', '3', '72', '108', '180', '216', '324', '540', '***', 'Sede', '2010 (4ta. Versión)'),
(89, 'B', 'Seminario: Habilidades Directivas I', 'B3MB', 'SHD9023, SHA902', '3', 'II', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2010 (4ta. Versión)'),
(90, 'B', 'Taller de Integración', 'D1AB', 'S/I', '0', 'Prosecución', 'Sin Trimestre', '0', '0', '0', '12 Semanas', '1', '0', '0', '0', '0', '0', '0', '***', 'Sede', '2010 (4ta. Versión)'),
(91, 'B', 'Proyecto Nacional y Nueva Ciudadanía', 'D1BB', 'S/I', '0', 'Prosecución', 'Sin Trimestre', '0', '0', '0', '12 Semanas', '1', '0', '0', '0', '0', '0', '0', '***', 'Sede', '2010 (4ta. Versión)'),
(92, 'B', 'Administración de la Producción', 'D2AB', 'AP9033, ADP9033', '3', 'III', 'Trimestre III', '3', '5', '8', '36 Semanas', '3', '108', '162', '270', '324', '486', '810', '***', 'Sede', '2010 (4ta. Versión)'),
(93, 'B', 'Proyecto III: Planificación, Diseño, Desarrollo e Innovación de Sistemas Administrativos', 'D2CB', 'PROY570319, PRO', '1', 'III', 'Trimestre I, II y III', '6', '9', '15', '36 Semanas', '', '216', '324', '540', '648', '972', '1620', 'B3AB (PRO570219)', 'Sede', '2010 (4ta. Versión)'),
(94, 'B', 'Tecologías de la Información y Comunicación III', 'D2DB', 'PTI3031 ', '1', 'III', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(95, 'B', 'Idiomas II', 'D2EB', 'IDI9033', '3', 'III', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2010 (4ta. Versión)'),
(96, 'B', 'Planificación', 'D2FB', 'PPL6032', '2', 'III', 'Trimestre I y II', '2', '3', '5', '24 Semanas', '2', '48', '72', '120', '66', '144', '240', '***', 'Sede', '2010 (4ta. Versión)'),
(97, 'B', 'Presupuesto Público y Privado', 'D2GB', 'PRE9033', '3', 'III', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2010 (4ta. Versión)'),
(98, 'B', 'Administración del Mercadeo', 'D2HB', 'AM6032, ADM9033', '3', 'III', 'Trimestre III', '2', '3', '5', '12 Semanas', '', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(99, 'B', 'Declaración de Rentas', 'D2IB', 'PDR3031', '1', 'III', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(100, 'B', 'Formación Socio Crítica III', 'D2JB', 'FSC18036', '6', 'III', 'Trimestre I, II y III', '3', '5', '8', '36 Semanas', '3', '108', '162', '270', '324', '486', '810', '***', 'Sede', '2010 (4ta. Versión)'),
(101, 'B', 'Análisis e Interpretación de los Estados Financieros', 'D2KB', 'AEF9032', '2', 'III', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(102, 'B', 'Deportes, Artes y Recreación', 'F2XB', 'DAR9033, DAR901', '3', 'III', 'Trimestre III', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2010 (4ta. Versión)'),
(103, 'B', 'Proyecto IV:  Dirección, Control y Evaluación de Sistemas Administrativos', 'D3AB', 'D2CB (PROY570319)', '1', 'IV', 'Trimestre I, II y III', '6', '9', '15', '36 Semanas', '3', '216', '324', '540', '648', '972', '1620', 'D2CB (PROY570319 Ó PRO570319)', 'Sede', '2010 (4ta. Versión)'),
(104, 'B', 'Control de Gestión Administrativa', 'D3BB', 'PCG6042', '2', 'IV', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(105, 'B', 'Paquetes Informáticos Aplicados a los Procesos Administrativos', 'D3CB', 'PPI3041', '1', 'IV', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(106, 'B', 'Sistemas Financieros', 'D3DB', 'ADF6042, SF6042', '2', 'IV', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(107, 'B', 'Administración Financiera', 'D3EB', 'ADF6042, AF6042', '2', 'IV', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(108, 'B', 'Electiva III: Administración de Empresas de Propiedad y Producción Social', 'D3FB', 'AEP6042, AEP9043', '3', 'IV', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2010 (4ta. Versión)'),
(109, 'B', 'Electiva IV (*)', 'D3GB', 'ELEC9043', '3', 'IV', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2010 (4ta. Versión)'),
(110, 'B', 'Auditorí¬a Administrativa', 'D3HB', 'PAA3041', '1', 'IV', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2010 (4ta. Versión)'),
(111, 'B', 'Formación Socio Crítica IV', 'D3IB', 'FSC18046', '6', 'IV', 'Trimestre I, II y III', '3', '5', '8', '36 Semanas', '3', '108', '162', '270', '324', '486', '810', '***', 'Sede', '2010 (4ta. Versión)'),
(112, 'B', 'Seminario: Habilidades Directivas II', 'D3JB', 'SHD9043', '3', 'IV', 'Trimestre II', '3', '5', '8', '36 Semanas', '3', '108', '162', '270', '324', '486', '810', '***', 'Sede', '2010 (4ta. Versión)'),
(113, 'B', 'Formulación y Evaluación de Proyectos', 'D3KB', 'FEP9043', '3', 'IV', 'Trimestre I y II', '3', '5', '8', '24 Semanas', '2', '72', '108', '180', '144', '216', '360', '***', 'Sede', '2010 (4ta. Versión)'),
(114, 'B', 'Matemática', 'B1AB', 'MAT6002', '2', 'Inicial', 'Sin Trimestre', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2011 (Ver. Definitiva)'),
(115, 'B', 'Desarrollo Integral', 'B1BB', 'DI6002', '2', 'Inicial', 'Sin Trimestre', '2', '3', '5', '12 Semanas', '1', '24', '36', '60', '24', '36', '60', '***', 'Sede', '2011 (Ver. Definitiva)'),
(116, 'B', 'Gestión de Riesgo y Protección Civil', 'B1CB', 'GRPC3001', '1', 'Inicial', 'Sin Trimestre', '1', '2', '3', '12 Semanas', '1', '12', '18', '30', '30', '18', '30', '***', 'Sede', '2011 (Ver. Definitiva)'),
(117, 'B', 'Proyecto Nacional y Nueva Ciudadanía', 'B1DB', 'PNNC9003', '3', 'Inicial', 'Sin Trimestre', '4', '6', '10', '12 Semanas', '1', '48', '72', '120', '48', '72', '120', '***', 'Sede', '2011 (Ver. Definitiva)'),
(118, 'B', 'Proyecto Inicial: Administración en el Nuevo Modelo Social', 'B1EB', 'PRO6002', '2', 'Inicial', 'Sin Trimestre', '3', '5', '8', '12 Semanas', '1', '36', '54', '90', '36', '54', '90', '***', 'Sede', '2011 (Ver. Definitiva)'),
(119, 'B', 'Proyecto: Identificación y Conocimiento de los Procesos Administrativos en las Distintas Organizaciones', 'B2AB', 'PRO570119', '1', 'I', 'Trimestre I, II y III', '5', '8', '13', '36 Semanas', '3', '1296', '270', '1566', '3888', '810', '4698', '***', 'Sede', '2011 (Ver. Definitiva)'),
(120, 'B', 'Técnicas de Expresión Oral y Escrita', 'B2BB', 'PTE3011', '2', 'I', 'Trimestre I', '1', '2', '3', '12 Semanas', '1', '144', '18', '162', '144', '18', '162', '***', 'Sede', '2011 (Ver. Definitiva)'),
(121, 'B', 'Contabilidad I', 'B2CB', 'CON12014', '2', 'I', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(122, 'B', 'Idiomas I', 'B2EB', 'IDI9013', '3', 'I', 'Trimestre III', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(123, 'B', 'Operaciones Financieras', 'B2FB', 'OF6012', '3', 'I', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(124, 'B', 'Teoría y Práctica de Mercadeo', 'B2GB', 'TPM6012', '4', 'I', 'Trimestre I y II', '2', '3', '5', '24 Semanas', '2', '144', '36', '180', '288', '72', '360', '***', 'Sede', '2011 (Ver. Definitiva)'),
(125, 'B', 'Tecnología de la Información y Comunicación I', 'B2HB', 'PTI6012', '1', 'I', 'Trimestre II', '1', '2', '3', '12 Semanas', '1', '144', '18', '162', '144', '18', '162', '***', 'Sede', '2011 (Ver. Definitiva)'),
(126, 'B', 'Taller de Estadística', 'B2IB', 'ES3011', '2', 'I', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(127, 'B', 'Deberes Formales del Contribuyente I. (Retenciones)', 'B2JB', 'DFC6012', '1', 'I', 'Trimestre III', '1', '2', '3', '12 Semanas', '1', '144', '18', '162', '144', '18', '162', '***', 'Sede', '2011 (Ver. Definitiva)'),
(128, 'B', 'Formación Sociocrítica I', 'B2KB', 'FSC18016', '6', 'I', 'Trimestre I, II y III', '2', '3', '5', '36 Semanas', '3', '1296', '108', '1404', '3888', '324', '4212', '***', 'Sede', '2011 (Ver. Definitiva)'),
(129, 'B', 'Fundamentos de Administración', 'B2LB', 'FA12014', '3', 'I', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(130, 'B', 'Deporte, Arte y Recreación I', 'F2YB', 'DAR9013', '3', 'I', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(131, 'B', 'Proyecto II: Supervisión y Conducción Técnica de los Procesos Administrativos', 'B3AB', 'PRO57019', '1', 'II', 'Trimestre I, II y III', '6', '9', '15', '36 Semanas', '3', '1296', '324', '1620', '3888', '972', '4860', '***', 'Sede', '2011 (Ver. Definitiva)'),
(132, 'B', 'Deberes Formales del Contribuyente (Taller)', 'B3KB', 'PDF3012', '1', 'II', 'Trimestre II', '1', '2', '3', '12 Semanas', '1', '144', '18', '162', '144', '18', '162', '***', 'Sede', '2011 (Ver. Definitiva)'),
(133, 'B', 'Marco Legal de las Organizaciones', 'B3JB', 'MLO602', '2', 'II', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(134, 'B', 'Contabilidad Gubernamental', 'B3BB', 'PCG3011', '2', 'II', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '144', '***', 'Sede', '2011 (Ver. Definitiva)'),
(135, 'B', 'Tecnología de la Información y Comunicación II', 'B3IB', 'PTI6022', '2', 'II', 'Trimestre II', '1', '2', '3', '12 Semanas', '1', '144', '18', '162', '144', '18', '162', '***', 'Sede', '2011 (Ver. Definitiva)'),
(136, 'B', 'Formación Sociocrítica II', 'B3LB', 'FSC18026', '6', 'II', 'Trimestre I, II y III', '2', '3', '5', '36 Semanas', '3', '1296', '108', '1404', '3888', '324', '4212', '***', 'Sede', '2011 (Ver. Definitiva)'),
(137, 'B', 'Habilidades Directivas I', 'B3MB', 'SHA9023', '3', 'II', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(138, 'B', 'Contabilidad II', 'B3CB', 'CON12024', '4', 'II', 'Trimestre I y II', '2', '5', '5', '24 Semanas', '', '576', '72', '648', '1152', '144', '1296', '***', 'Sede', '2011 (Ver. Definitiva)'),
(139, 'B', 'Administración de Costos', 'B3DB', 'ADC6022', '2', 'II', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(140, 'B', 'Organización y Métodos', 'B3FB', 'OYS9023', '4', 'II', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(141, 'B', 'Talento Humano y Ambiente de Trabajo', 'B3EB', 'THA9023', '3', 'II', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(142, 'B', 'Habilidades Directivas I', 'B3MB', 'SHA9023', '3', 'II', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(143, 'B', 'Contabilidad II', 'B3CB', 'CON12024', '4', 'II', 'Trimestre I y II', '2', '5', '5', '24 Semanas', '2', '576', '72', '648', '1152', '144', '1296', '***', 'Sede', '2011 (Ver. Definitiva)'),
(144, 'B', 'Administración de Costos', 'B3DB', 'ADC6022', '2', 'II', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(145, 'B', 'Organización y Métodos', 'B3FB', 'OYS9023', '4', 'II', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(146, 'B', 'Talento Humano y Ambiente de Trabajo', 'B3EB', 'THA9023', '3', 'II', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(147, 'B', 'Electiva I:  Calidad y Gestión Ambiental Organ', 'B3GB', 'CGA9023', '3', 'II', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(148, 'B', 'Electiva II', 'B3HB', 'S/I', '3', 'II', 'Trimestre III', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(149, 'B', 'Talle de Integración', 'D1AB', 'S/I', '0', 'Prosecución', 'Sin Trimestre', 'S/I', 'S/I', 'S/I', '12 Semanas', '1', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2011 (Ver. Definitiva)'),
(150, 'B', 'Proyecto Nacional y Nueva Ciudadanía', 'D1BB', 'S/I', '0', 'Prosecución', 'Sin Trimestre', 'S/I', 'S/I', 'S/I', '12 Semanas', '1', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', 'S/I', '***', 'Sede', '2011 (Ver. Definitiva)'),
(151, 'B', 'Proyecto III: Planificación, Diseño, Desarrollo e Innovación de Sistemas Administrativos', 'D2CB', 'PRO570319', '1', 'III', 'Trimestre I, II y III', '6', '9', '15', '36 Semanas', '3', '1296', '324', '1620', '3888', '972', '4860', '***', 'Sede', '2011 (Ver. Definitiva)'),
(152, 'B', 'Tecnologías de la Información y Comunicación III', 'D2DB', 'TIC6032', '2', 'III', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(153, 'B', 'Planificación', 'D2FB', 'PPL6O32', '0', 'III', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(154, 'B', 'Declaración de Rentas', 'D2IB', 'TDR3031', '2', 'III', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(155, 'B', 'Formación Sociocrítica III', 'D2JB', 'FSC18036', '6', 'III', 'Trimestre I, II y III', '3', '5', '8', '36 Semanas', '3', '1296', '162', '1458', '3888', '486', '4374', '***', 'Sede', '2011 (Ver. Definitiva)'),
(156, 'B', 'Proyecto III: Planificación, Diseño, Desarrollo e Innovación de Sistemas Administrativos', 'D2CB', 'PRO570319', '1', 'III', 'Trimestre I, II y III', '6', '9', '15', '36 Semanas', '3', '1296', '324', '1620', '3888', '972', '4860', '***', 'Sede', '2011 (Ver. Definitiva)'),
(157, 'B', 'Tecnologías de la Información y Comunicación III', 'D2DB', 'TIC6032', '2', 'III', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(158, 'B', 'Planificación', 'D2FB', 'PPL6O32', '0', 'III', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(159, 'B', 'Declaración de Rentas', 'D2IB', 'TDR3031', '2', 'III', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(160, 'B', 'Formación Sociocrítica III', 'D2JB', 'FSC18036', '6', 'III', 'Trimestre I, II y III', '3', '5', '8', '36 Semanas', '3', '1296', '162', '1458', '3888', '486', '4374', '***', 'Sede', '2011 (Ver. Definitiva)'),
(161, 'B', 'Administración de la Producción', 'D2AB', 'ADP9033', '3', 'III', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(162, 'B', 'Presupuesto Público y Privado', 'D2GB', 'PRE9033', '3', 'III', 'Trimestre II', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(163, 'B', 'Administración del Mercadeo', 'D2HB', 'AM6032', '2', 'III', 'Trimestre III', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(164, 'B', 'Análisis de Estados Financieros', 'D2KB', 'AEF9032', '2', 'III', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(165, 'B', 'Idiomas II', 'D2EB', 'IDI9033 ', '3', 'III', 'Trimestre I', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(166, 'B', 'Deporte, Arte y Recreación II', 'F2XB', 'DAR9033', '3', 'III', 'Trimestre III', '3', '5', '8', '12 Semanas', '1', '144', '54', '198', '144', '54', '198', '***', 'Sede', '2011 (Ver. Definitiva)'),
(167, 'B', 'Proyecto IV:  Supervisión y Conducción Técnica de los Procesos Administrativos', 'D3AB', 'PRO570419', '1', 'IV', 'Trimestre I, II y III', '6', '9', '15', '36 Semanas', '3', '1296', '324', '1620', '3888', '972', '4860', '***', 'Sede', '2011 (Ver. Definitiva)'),
(168, 'B', 'Control de la Gestión Administrativa', 'D3BB', 'PCG6042 ', '2', 'IV', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(169, 'B', 'Paquetes Informáticos Aplicados a los Procesos Administrativos', 'D3CB', 'PPI3041', '0', 'IV', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(170, 'B', 'Auditoría Administrativa', 'D3HB', 'APAA3041', '0', 'IV', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(171, 'B', 'Formación Sociocrítica IV', 'D3IB', 'FSC18046', '6', 'IV', 'Trimestre I, II y III', '3', '5', '8', '36 Semanas', '3', '1296', '162', '1458', '3888', '486', '4374', '***', 'Sede', '2011 (Ver. Definitiva)'),
(173, 'B', 'Control de la Gestión Administrativa', 'D3BB', 'PCG6042 ', '2', 'IV', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(174, 'B', 'Paquetes Informáticos Aplicados a los Procesos Administrativos', 'D3CB', 'PPI3041', '0', 'IV', 'Trimestre I', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(175, 'B', 'Auditoría Administrativa', 'D3HB', 'APAA3041', '0', 'IV', 'Trimestre II', '2', '3', '5', '12 Semanas', '1', '144', '36', '180', '144', '36', '180', '***', 'Sede', '2011 (Ver. Definitiva)'),
(176, 'B', 'Formación Sociocrítica IV', 'D3IB', 'FSC18046', '6', 'IV', 'Trimestre I, II y III', '3', '5', '8', '36 Semanas', '3', '1296', '162', '1458', '3888', '486', '4374', '***', 'Sede', '2011 (Ver. Definitiva)'),
(177, 'B', 'Proyecto IV:  Supervisión y Conducción Técnica de los Procesos Administrativos', 'D3AB', 'PRO570419', '1', 'IV', 'Trimestre I, II y III', '6', '9', '15', '36 Semanas', '3', '1296', '324', '1620', '3888', '972', '4860', '***', 'Sede', '2011 (Ver. Definitiva)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(4) NOT NULL,
  `nombres` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` enum('V','E','P') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cedula` char(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telf_residencial` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telf_celular` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` enum('Desarrollador','Administrador','Usuario') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(14) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pregunta_secreta1` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `respuesta_secreta1` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pregunta_secreta2` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `respuesta_secreta2` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo_personal` enum('Administrativo','Docente','Obrero') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `intentos` int(1) DEFAULT NULL,
  `privilegio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `nacionalidad`, `cedula`, `correo`, `direccion`, `telf_residencial`, `telf_celular`, `tipo_usuario`, `usuario`, `password`, `pregunta_secreta1`, `respuesta_secreta1`, `pregunta_secreta2`, `respuesta_secreta2`, `tipo_personal`, `status`, `intentos`, `privilegio`) VALUES
(1, 'JOSE GREGORIO', 'QUERO RIVERO', 'V', '11473104', 'josque2000@gmail.com', 'Calle 3, Numero 49-23, Quinta Elvia. Parroquia Las Calderas, Municipio Colina Estado Falcón.', '0268-9894374', '0424-6755928', 'Administrador', 'JOSQUE2000', '12345', 'Segundo Nombre de mi Padre', 'Rafael', 'Segundo Nombre de mi Madre', 'Guadalupe', 'Administrativo', 'Activo', 0, 1),
(2, 'YAJAIRA BERNARDINA', 'RAMIREZ ARTEAGA', 'V', '9924171', 'ybra@gmail.com', 'Callejon Aeropuerto, Sector Panta Abajo', '0268-4111758', '0412-6659267', 'Usuario', 'YBRA18', '12345', 'Primer Nombre de mi Madre', 'Juana', 'Primer Apellido de mi Madre', 'Arteaga', 'Administrativo', 'Activo', 1, 3),
(3, 'Nadia Lineth', 'Vera', 'V', '12732783', 'vera.uptag@gmail.com', '', '', '', '', 'VNADIA2019', '12345', 'primer nombre de mi hija', 'martha', 'nombre de mi mascota', 'fifi', 'Docente', 'Activo', 0, 3);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_6` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`id_califica`) REFERENCES `calificaciones` (`id_califica`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantes_ibfk_3` FOREIGN KEY (`id_periodo`) REFERENCES `periodos` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantes_ibfk_4` FOREIGN KEY (`id_seccion`) REFERENCES `secciones` (`id_seccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantes_ibfk_5` FOREIGN KEY (`id_unid_curri`) REFERENCES `unid_curric` (`id_uc`) ON DELETE CASCADE ON UPDATE CASCADE;
