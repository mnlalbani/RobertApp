-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 10:12 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

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
(21, 'd', 'd', '', 'd', ''),
(22, 'd', 'd', '', 'd', ''),
(23, 'prueba pruebaaskldgaklsjdglajksgkladghsjhg', '23489273595423895427', '', 'iyi2378046902783402736046230402', '');

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
  `imagen` varchar(2000) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `reciente`
--

INSERT INTO `reciente` (`codigo`, `titulo`, `fecha`, `lugar`, `contenido`, `imagen`) VALUES
(20, 'Ã±hljkgh', 'kljhljkhlj', '', 'gkljgklj', ''),
(21, 'ulfkf', 'kjhvjhfvk', '', 'kjhfgjhk\r\n', ''),
(22, 'reciente', 'asgdklajsg', '', 'kgljkgjklkjhfgjhk\r\n', ''),
(23, 'reciente', 'asgdklajsg', '', 'kgljkgjklkjhfgjhk\r\n', ''),
(24, 'Presentacion de la o', '25 enero d', 'cumana', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam sequi reprehenderit sapiente repellat fugit cum, dignissimos non culpa, hic sed ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam sequi reprehenderit sapiente ', ''),
(25, 'asdlgaskdg', 'ghkghkghk', '', 'jhgkjhgkgjk', ''),
(26, 'sdfsdf', 'sdfsdfs', '', 'dfsdf', ''),
(27, 'sdfsdf', 'sdf', '', 'sdf', ''),
(28, 'tututututu', 'ututut', '', 'tututut                              \r\n                            ', ''),
(29, 'asdasdas', 'dasdasd', '', '                              asdasd\r\n                            dasdasdasdasd', ''),
(30, 'opopop', 'opopopo', '', 'opopop                              \r\n                            ', ''),
(31, 'opopop', 'opopo', '', 'opop                              \r\n                            ', ''),
(32, 'uiuiui', 'iuiuiuiui', '', 'iuiuiuiui                              \r\n                            ', ''),
(33, 'Ã±jlhoih', 'hljkhljkh', '', 'khljkhkl                              \r\n                            ', ''),
(34, 'asdasd', 'uu', '', '                              \r\n                           uuuuu', ''),
(35, 'ooooo', 'oooooo', '', 'ooooo                              \r\n                            ', ''),
(36, 'uytituyt', 'ityuityi', '', 'tiuytuytui                              \r\n                            ', ''),
(37, 'ppp', 'pppp', '', 'ppp                              \r\n                            ', ''),
(38, 'ujhuiogig', 'ogpgpghg', '', 'pjgÃ±jh`hoÃ±                              \r\n                            ', ''),
(39, 'cxcxxcxccxx', 'cxcxcxcxc', '', 'cxcxcxcc                              \r\n                            ', ''),
(40, 'rrtrttrt', 'rtrtrrtrtr', '', 'trtrtrrt                              \r\n                            ', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre` varchar(20) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `correo` varchar(50) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `telefono` int(11) NOT NULL,
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`nombre`, `tipo`, `apellido`, `fechaRegistro`, `correo`, `ciudad`, `telefono`, `codigo`) VALUES
('Robert', '', 'Rodriguez', '2016-04-03 19:53:00', 'robert@robert.com', 'Cuman&#225', 800123456, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
