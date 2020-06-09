
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

create database gestion_psicologia;
use  gestion_psicologia;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_psicologia`

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int auto_increment not null,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `id_tipo_documento` int(11) DEFAULT NULL,
  `numero_documento` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `id_estado` int(11) NOT NULL DEFAULT '1',
  primary key (id_persona)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--




-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--


CREATE TABLE `paciente` (
  `id_paciente` int auto_increment not null,
  `id_persona` int(11) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  primary key(id_paciente)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesional`
--

CREATE TABLE `profesional` (
  `id_profesional` int auto_increment NOT NULL,
  `id_persona` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  primary key (id_profesional)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int auto_increment NOT NULL,
  `id_persona` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  primary key(id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `id_domicilio` int auto_increment NOT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `altura` int(11) DEFAULT NULL,
  `piso` varchar(30) DEFAULT NULL,
  `manzana` varchar(30) DEFAULT NULL,
  `id_persona` int(11) NOT NULL,
  `id_barrio` int(11) NOT NULL,
  primary key(id_domicilio)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrio`
--


CREATE TABLE `barrio`(
`id_barrio` int auto_increment not null,
`descripcion` varchar(250) not null,
primary key(id_barrio)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_contacto`
--


CREATE TABLE `persona_contacto` (
  `id_persona_contacto` int auto_increment NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_tipo_contacto` int(11) NOT NULL,
  `valor` varchar(30) NOT NULL,
  primary key(id_persona_contacto)
  );

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoContacto`
--
  
CREATE TABLE `tipoContacto` (
  `id_tipo_contacto` int auto_increment not null,
  `descripcion` varchar(30) not null,
  primary key(id_tipo_contacto)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_especialidad` int auto_increment NOT NULL,
  `tipo` int(11) NOT NULL,
  primary key (id_especialidad)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obraSocial`
--

CREATE TABLE `obraSocial` (
  `id_obra_social` int auto_increment NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `co_seguro` int(11) DEFAULT NULL,
  primary key (id_obra_social)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
