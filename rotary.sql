-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2016 at 02:15 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rotary`
--

-- --------------------------------------------------------

--
-- Table structure for table `proxima`
--

CREATE TABLE IF NOT EXISTS `proxima` (
  `codigo` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `lugar` varchar(200) NOT NULL,
  `contenido` varchar(250) NOT NULL,
  `imagen` varchar(2000) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `proxima`
--

INSERT INTO `proxima` (`codigo`, `titulo`, `fecha`, `lugar`, `contenido`, `imagen`) VALUES
(1, 'sdfsdf', 'sdfsdf', '', 'sdfsdf', 'sfsdf'),
(2, 'CELEBRACI??N DEL D?', '16 de Juli', '', 'Lugar', 'Jornada social, recreativa y educativa con entrega de cotillones, juguetes y refrigerios a 100 ni??os'),
(3, 'CELEBRACI??N DEL D?', '16 de Juli', '', 'asdgsdgsdfg', 'Jornada social, recreativa y educativa con entrega de cotillones, juguetes y refrigerios a 100 ni??os'),
(4, 'CELEBRACI??N DEL D?', '16 de Juli', '', 'asdgsdgsdfg', 'Jornada social, recreativa y educativa con entrega de cotillones, juguetes y refrigerios a 100 ni??os'),
(5, 'CELEBRACI??N DEL D?', '16 de Juli', '', 'asdgsdgsdfg', 'Jornada social, recreativa y educativa con entrega de cotillones, juguetes y refrigerios a 100 ni??os'),
(6, 'CELEBRACI??N DEL D?', '43534', '', 'shkdgajksgdkahsgdhskdjafsjldfaksfdjkasfdjashk', ''),
(7, 'CELEBRACI??N DEL D?', '43534', '', 'ornada social, recreativa y educativa con entrega de cotillones, juguetes y refrigerios a 100 ni??osornada social, recreativa y educativa con entrega de cotillones, juguetes y refrigerios a 100 ni??os\r\nornada social, recreativa y educativa con entreg', ''),
(8, 'Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±', 'Ã±Ã±Ã±Ã±Ã±', '', 'Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±', ''),
(9, 'sdfsdf', 'sdfsdf', '', 'fsdfsdf', ''),
(10, 'sdfsdf', 'sdfsdf', '', 'fsdfsdf', ''),
(11, 'sdfsdf', 'sdfsdf', '', 'fsdfsdf', ''),
(12, 'sdfsdf', 'sdfsdf', '', 'fsdfsdf', ''),
(13, 'asdasd', 'adasd', '', 'asdasd', ''),
(14, 'asda', 'sdasdas', '', 'asdasd', ''),
(15, 'asdasda', 'sdasdasd', '', 'asdasd', ''),
(16, 'asdasd', 'sdasd', '', 'asdas', ''),
(17, 'asdasd', 'asdas', '', 'dasdas', ''),
(18, 'asdasd', 'asdas', '', 'dasdas', ''),
(19, 'sdklfgljk', 'ghljhgjhg', '', 'gkljgkljgh', ''),
(20, 'gfgfgdf', 'gdfgdfg', '', 'dfgdfgdfg', ''),
(22, 'd', 'd', '', 'd', ''),
(24, 'Hola como estas kahjksdhljk', 'jklkljljkg', 'CuamanÃ¡', 'hglgljkg', ''),
(25, 'jkfkuyuyf', 'uyuyr', 'Cumana', 'rsdfsdf', ''),
(26, 'Prueba', 'Hoy', 'Cumana', 'Hola', '');

-- --------------------------------------------------------

--
-- Table structure for table `reciente`
--

CREATE TABLE IF NOT EXISTS `reciente` (
  `codigo` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `lugar` varchar(200) NOT NULL,
  `contenido` varchar(500) NOT NULL,
  `imagen1` text NOT NULL,
  `imagen2` text NOT NULL,
  `imagen3` text NOT NULL,
  `imagen4` text NOT NULL,
  `imagen5` text NOT NULL,
  `imagen6` text NOT NULL,
  `imagen7` text NOT NULL,
  `imagen8` text NOT NULL,
  `imagen9` text NOT NULL,
  `imagen10` text NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `reciente`
--

INSERT INTO `reciente` (`codigo`, `titulo`, `fecha`, `lugar`, `contenido`, `imagen1`, `imagen2`, `imagen3`, `imagen4`, `imagen5`, `imagen6`, `imagen7`, `imagen8`, `imagen9`, `imagen10`) VALUES
(24, 'Prueba', 'hahah', 'CumanÃ¡', 'haha                              \r\n                            ', '', '', '', '', '', '', '', '', '', ''),
(29, 'nueva en lista', 'lkhklhl', 'CumanÃ¡', 'hlkjhljk                              \r\n                            ', '', '', '', '', '', '', '', '', '', ''),
(30, 'Noticia Actualizada', 'Hoy', 'CumanÃ¡', 'Hola', '', '', '', '', '', '', '', '', '', ''),
(33, 'p+`''0Ã§', '''Ã§''Ã§', '''Ã§''Ã§', 'Â¡Â¡Â¡Â¡Â¡Â¡Â¡Â¡Â¡Â¡Â¡Â¡                              \r\n''Â¡Ã§''Ã§''Ã§                            ', '', '', '', '', '', '', '', '', '', ''),
(34, 'prueba imagen', 'jklgljkgjklg', 'hglhg', 'jhgkhgjhgjk', '', '', '', '', '', '', '', '', '', ''),
(35, '.gjjkg', 'ljkgklgjklgkl', 'gjkgjklgj', 'jkglkgk', '', '', '', '', '', '', '', '', '', ''),
(36, 'imagen3', 'uitioto', 'tioutouit', 'ioutiotuitio', '', '', '', '', '', '', '', '', '', ''),
(37, 'imagen4', 'jgyityt', 'uyytitit', 'itutuiytui', '', '', '', '', '', '', '', '', '', ''),
(38, 'wewewewe', 'wewewewew', 'ewewewe', 'ewewewewe', '', '', '', '', '', '', '', '', '', ''),
(39, 'wsws', 'swsw', 'swsw', 'swswswsws', '', '', '', '', '', '', '', '', '', ''),
(40, 'Noticia', 'Noicia', 'Aqui', 'klsjdlajksdl', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre` varchar(20) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `correo` varchar(50) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`nombre`, `usuario`, `password`, `tipo`, `apellido`, `fechaRegistro`, `correo`, `ciudad`, `telefono`, `codigo`) VALUES
('Robert', 'robert', '1234', '1', 'Rodriguez', '2016-04-03 19:53:00', 'robert@robert.com', 'CumanÃ¡', '55555', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
