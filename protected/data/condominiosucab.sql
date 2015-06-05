-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2015 at 10:57 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `condominiosucab`
--

-- --------------------------------------------------------

--
-- Table structure for table `actareunion`
--

CREATE TABLE IF NOT EXISTS `actareunion` (
  `idActaReunion` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Motivo` varchar(45) NOT NULL,
  `Llamado` int(11) NOT NULL,
  `Edificio_RIF` int(11) NOT NULL,
  `Oficina_idOficina` int(11) NOT NULL,
  `JuntaCondominio_idJuntaCondominio` int(11) NOT NULL,
  `TrabajadorEmpresa_Cedula` int(11) NOT NULL,
  PRIMARY KEY (`idActaReunion`),
  UNIQUE KEY `idActaReunion_UNIQUE` (`idActaReunion`),
  KEY `fk_ActaReunion_Edificio1_idx` (`Edificio_RIF`),
  KEY `fk_ActaReunion_Oficina1_idx` (`Oficina_idOficina`),
  KEY `fk_ActaReunion_JuntaCondominio1_idx` (`JuntaCondominio_idJuntaCondominio`),
  KEY `fk_ActaReunion_TrabajadorEmpresa1_idx` (`TrabajadorEmpresa_Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `apartamento`
--

CREATE TABLE IF NOT EXISTS `apartamento` (
  `idApartamento` int(11) NOT NULL,
  `Saldo` int(11) NOT NULL,
  `Estatus` varchar(45) NOT NULL,
  `Alicuota` int(11) DEFAULT NULL,
  `Venta` tinyint(1) NOT NULL DEFAULT '0',
  `Piso_idPiso` int(11) NOT NULL,
  PRIMARY KEY (`idApartamento`),
  KEY `fk_Apartamento_Piso1_idx` (`Piso_idPiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apartamento`
--

INSERT INTO `apartamento` (`idApartamento`, `Saldo`, `Estatus`, `Alicuota`, `Venta`, `Piso_idPiso`) VALUES
(1, 124124, 'null', 12214, 0, 1),
(2, 0, 'Al dia', 0, 0, 11),
(3, 0, 'Al dia', 0, 0, 11),
(4, 0, 'Al dia', 0, 0, 11),
(5, 0, 'Al dia', 0, 0, 12),
(6, 0, 'Al dia', 0, 0, 12),
(7, 0, 'Al dia', 0, 0, 12),
(8, 0, 'Al dia', 0, 0, 13),
(9, 0, 'Al dia', 0, 0, 13),
(10, 0, 'Al dia', 0, 0, 13),
(11, 0, 'Al dia', 0, 0, 14),
(12, 0, 'Al dia', 0, 0, 14),
(13, 0, 'Al dia', 0, 0, 14),
(14, 0, 'Al dia', 0, 0, 15),
(15, 0, 'Al dia', 0, 0, 15),
(16, 0, 'Al dia', 0, 0, 15),
(17, 0, 'Al dia', 0, 0, 16),
(18, 0, 'Al dia', 0, 0, 16),
(19, 0, 'Al dia', 0, 0, 16),
(20, 0, 'Al dia', 0, 0, 17),
(21, 0, 'Al dia', 0, 0, 17),
(22, 0, 'Al dia', 0, 0, 17);

-- --------------------------------------------------------

--
-- Table structure for table `apartamentopersona`
--

CREATE TABLE IF NOT EXISTS `apartamentopersona` (
  `idApartamentoPersona` int(11) NOT NULL AUTO_INCREMENT,
  `Apartamento_idApartamento` int(11) NOT NULL,
  `Propietario_Cedula` int(11) NOT NULL,
  PRIMARY KEY (`idApartamentoPersona`),
  UNIQUE KEY `idApartamentoPersona_UNIQUE` (`idApartamentoPersona`),
  KEY `fk_ApartamentoPersona_Apartamento1_idx` (`Apartamento_idApartamento`),
  KEY `fk_ApartamentoPersona_Propietario1_idx` (`Propietario_Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `areacomun`
--

CREATE TABLE IF NOT EXISTS `areacomun` (
  `idAreaComun` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  `Edificio_RIF` int(11) NOT NULL,
  PRIMARY KEY (`idAreaComun`),
  UNIQUE KEY `idAreaComun_UNIQUE` (`idAreaComun`),
  KEY `fk_AreaComun_Edificio1_idx` (`Edificio_RIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `asambleaextraordinaria`
--

CREATE TABLE IF NOT EXISTS `asambleaextraordinaria` (
  `idAsambleaExtraordinaria` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Motivo` varchar(45) NOT NULL,
  `Propuesta` varchar(45) NOT NULL,
  `TrabajadorEmpresa_Cedula` int(11) NOT NULL,
  PRIMARY KEY (`idAsambleaExtraordinaria`),
  UNIQUE KEY `idAsambleaExtraordinaria_UNIQUE` (`idAsambleaExtraordinaria`),
  KEY `fk_AsambleaExtraordinaria_TrabajadorEmpresa1_idx` (`TrabajadorEmpresa_Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `asambleaordinaria`
--

CREATE TABLE IF NOT EXISTS `asambleaordinaria` (
  `idAsambleaOrdinaria` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Motivo` varchar(45) NOT NULL,
  `PeriodoEnDias` int(11) NOT NULL,
  `TrabajadorEmpresa_Cedula` int(11) NOT NULL,
  PRIMARY KEY (`idAsambleaOrdinaria`),
  UNIQUE KEY `idAsambleaOrdinaria_UNIQUE` (`idAsambleaOrdinaria`),
  KEY `fk_AsambleaOrdinaria_TrabajadorEmpresa1_idx` (`TrabajadorEmpresa_Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `atencion`
--

CREATE TABLE IF NOT EXISTS `atencion` (
  `idAtencion` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  `Estatus` tinyint(1) NOT NULL DEFAULT '0',
  `Razon` varchar(45) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Correo` int(11) DEFAULT NULL,
  `Oficina` int(11) DEFAULT NULL,
  `JuntaCondominio_idJuntaCondominio` int(11) NOT NULL,
  `JuntaCondominio_Edificio_RIF` int(11) NOT NULL,
  `Propietario_Cedula` int(11) NOT NULL,
  `Oficina_idOficina` int(11) NOT NULL,
  PRIMARY KEY (`idAtencion`),
  UNIQUE KEY `idAtencion_UNIQUE` (`idAtencion`),
  KEY `fk_Atencion_JuntaCondominio1_idx` (`JuntaCondominio_idJuntaCondominio`,`JuntaCondominio_Edificio_RIF`),
  KEY `fk_Atencion_Propietario1_idx` (`Propietario_Cedula`),
  KEY `fk_Atencion_Oficina1_idx` (`Oficina_idOficina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cartaconsulta`
--

CREATE TABLE IF NOT EXISTS `cartaconsulta` (
  `idCartaConsulta` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Motivo` varchar(45) NOT NULL,
  `Propuesta` varchar(45) NOT NULL,
  PRIMARY KEY (`idCartaConsulta`),
  UNIQUE KEY `idCartaConsulta_UNIQUE` (`idCartaConsulta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

CREATE TABLE IF NOT EXISTS `cheque` (
  `numeroCheque` int(11) NOT NULL,
  `Endosable` tinyint(1) DEFAULT NULL,
  `CuentaBancaria_NumeroDeCuenta` int(11) NOT NULL,
  PRIMARY KEY (`numeroCheque`),
  UNIQUE KEY `idCheque_UNIQUE` (`numeroCheque`),
  KEY `fk_Cheque_CuentaBancaria1_idx` (`CuentaBancaria_NumeroDeCuenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contrato`
--

CREATE TABLE IF NOT EXISTS `contrato` (
  `idContrato` int(11) NOT NULL AUTO_INCREMENT,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Sueldo` int(11) NOT NULL,
  `Edificio_RIF` int(11) NOT NULL,
  `TrabajadorEdificio_Cedula` int(11) NOT NULL,
  PRIMARY KEY (`idContrato`),
  UNIQUE KEY `idContrato_UNIQUE` (`idContrato`),
  KEY `fk_Contrato_Edificio1_idx` (`Edificio_RIF`),
  KEY `fk_Contrato_TrabajadorEdificio1_idx` (`TrabajadorEdificio_Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `correoelectronico`
--

CREATE TABLE IF NOT EXISTS `correoelectronico` (
  `idCorrecoElectronico` int(11) NOT NULL AUTO_INCREMENT,
  `Direccion` varchar(45) NOT NULL,
  `Oficina_idOficina` int(11) NOT NULL,
  `Oficina_Empresa_RIF` int(11) NOT NULL,
  `Propietario_Cedula` int(11) NOT NULL,
  `TrabajadorEdificio_Cedula` int(11) NOT NULL,
  `TrabajadorEmpresa_Cedula` int(11) NOT NULL,
  `TrabajadorEmpresa_Oficina_idOficina` int(11) NOT NULL,
  `TrabajadorEmpresa_Oficina_Empresa_RIF` int(11) NOT NULL,
  PRIMARY KEY (`idCorrecoElectronico`),
  UNIQUE KEY `idCorrecoElectronico_UNIQUE` (`idCorrecoElectronico`),
  KEY `fk_CorrecoElectronico_Oficina1_idx` (`Oficina_idOficina`,`Oficina_Empresa_RIF`),
  KEY `fk_CorrecoElectronico_Propietario1_idx` (`Propietario_Cedula`),
  KEY `fk_CorrecoElectronico_TrabajadorEdificio1_idx` (`TrabajadorEdificio_Cedula`),
  KEY `fk_CorrecoElectronico_TrabajadorEmpresa1_idx` (`TrabajadorEmpresa_Cedula`,`TrabajadorEmpresa_Oficina_idOficina`,`TrabajadorEmpresa_Oficina_Empresa_RIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cuentabancaria`
--

CREATE TABLE IF NOT EXISTS `cuentabancaria` (
  `NumeroDeCuenta` int(11) NOT NULL,
  `Banco` varchar(45) NOT NULL,
  `Oficina_idOficina` int(11) NOT NULL,
  PRIMARY KEY (`NumeroDeCuenta`),
  UNIQUE KEY `idCuentaBancaria_UNIQUE` (`NumeroDeCuenta`),
  KEY `fk_CuentaBancaria_Oficina1_idx` (`Oficina_idOficina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `documentocondominio`
--

CREATE TABLE IF NOT EXISTS `documentocondominio` (
  `idDocumentoCondominio` int(11) NOT NULL AUTO_INCREMENT,
  `Cargo` varchar(45) NOT NULL,
  `CedulaSuplente` int(11) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Propietario_Cedula` int(11) NOT NULL,
  `JuntaCondominio_idJuntaCondominio` int(11) NOT NULL,
  PRIMARY KEY (`idDocumentoCondominio`),
  UNIQUE KEY `idDocumentoCondominio_UNIQUE` (`idDocumentoCondominio`),
  KEY `fk_DocumentoCondominio_Propietario1_idx` (`Propietario_Cedula`),
  KEY `fk_DocumentoCondominio_JuntaCondominio1_idx` (`JuntaCondominio_idJuntaCondominio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `edificio`
--

CREATE TABLE IF NOT EXISTS `edificio` (
  `RIF` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `InteresMora` int(11) NOT NULL,
  `Asistencia1Reunion` int(11) NOT NULL,
  `Asistencia2Reunion` int(11) NOT NULL,
  `DerechoVoto` tinyint(1) NOT NULL,
  `Lugar_idLugar` int(11) NOT NULL,
  `TrabajadorEmpresa_Cedula` int(11) NOT NULL,
  `Pisos` int(11) NOT NULL,
  `ApartamentosPiso` int(11) NOT NULL,
  PRIMARY KEY (`RIF`),
  UNIQUE KEY `RIF_UNIQUE` (`RIF`),
  KEY `fk_Edificio_Lugar1_idx` (`Lugar_idLugar`),
  KEY `fk_Edificio_TrabajadorEmpresa1_idx` (`TrabajadorEmpresa_Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `edificio`
--

INSERT INTO `edificio` (`RIF`, `Nombre`, `Tipo`, `InteresMora`, `Asistencia1Reunion`, `Asistencia2Reunion`, `DerechoVoto`, `Lugar_idLugar`, `TrabajadorEmpresa_Cedula`, `Pisos`, `ApartamentosPiso`) VALUES
(12, 'wqfqwf', 'Vacacional', 12, 21, 12, 1, 3, 21291555, 0, 0),
(123, 'BosqueReal2', 'Residencial', 124, 124, 124, 1, 4, 21291555, 7, 3),
(1234, 'BosqueReal22', 'Residencial', 124, 124, 124, 1, 4, 21291555, 7, 3),
(464366, 'Prueba1', 'Vacacional', 3, 75, 51, 0, 3, 21291555, 0, 0),
(6434346, 'Juan Pablo 2', 'Vacacional', 3, 75, 51, 1, 3, 21291555, 0, 0),
(46436675, 'Prueba1', 'Vacacional', 3, 75, 51, 0, 3, 21291555, 0, 0),
(515152512, 'BosqueEncantado', 'Residencial', 14, 124, 124, 1, 6, 21291555, 5, 2),
(856856856, 'BosqueReal1', 'Residencial', 124, 124, 124, 1, 4, 21291555, 7, 3),
(2147483647, 'BosqueReal', 'Residencial', 124, 124, 124, 1, 4, 21291555, 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `efectivo`
--

CREATE TABLE IF NOT EXISTS `efectivo` (
  `idEfectivo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idEfectivo`),
  UNIQUE KEY `idEfectivo_UNIQUE` (`idEfectivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `RIF` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `UnidadTributaria` int(11) NOT NULL,
  PRIMARY KEY (`RIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`RIF`, `Nombre`, `UnidadTributaria`) VALUES
(123456, 'CondominiosUcab', 150);

-- --------------------------------------------------------

--
-- Table structure for table `fondo`
--

CREATE TABLE IF NOT EXISTS `fondo` (
  `idFondo` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(45) NOT NULL,
  `Saldo` int(11) NOT NULL,
  PRIMARY KEY (`idFondo`),
  UNIQUE KEY `idFondo_UNIQUE` (`idFondo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `idHorario` int(11) NOT NULL AUTO_INCREMENT,
  `HoraInicio` int(11) NOT NULL,
  `HoraFin` int(11) NOT NULL,
  `Dia` varchar(45) NOT NULL,
  `Oficina_idOficina` int(11) DEFAULT NULL,
  `Oficina_Empresa_RIF` int(11) DEFAULT NULL,
  `TrabajadorEmpresa_Cedula` int(11) DEFAULT NULL,
  `TrabajadorEmpresa_Oficina_idOficina` int(11) DEFAULT NULL,
  `TrabajadorEmpresa_Oficina_Empresa_RIF` int(11) DEFAULT NULL,
  `ActaReunion_idActaReunion` int(11) DEFAULT NULL,
  `ActaReunion_JuntaCondominio_idJuntaCondominio` int(11) DEFAULT NULL,
  `ActaReunion_JuntaCondominio_Edificio_RIF` int(11) DEFAULT NULL,
  `ActaReunion_TrabajadorEmpresa_Cedula` int(11) DEFAULT NULL,
  `AsambleaOrdinaria_idAsambleaOrdinaria` int(11) DEFAULT NULL,
  `AsambleaExtraordinaria_idAsambleaExtraordinaria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idHorario`),
  UNIQUE KEY `idHorario_UNIQUE` (`idHorario`),
  KEY `fk_Horario_Oficina1_idx` (`Oficina_idOficina`,`Oficina_Empresa_RIF`),
  KEY `fk_Horario_TrabajadorEmpresa1_idx` (`TrabajadorEmpresa_Cedula`,`TrabajadorEmpresa_Oficina_idOficina`,`TrabajadorEmpresa_Oficina_Empresa_RIF`),
  KEY `fk_Horario_ActaReunion1_idx` (`ActaReunion_idActaReunion`,`ActaReunion_JuntaCondominio_idJuntaCondominio`,`ActaReunion_JuntaCondominio_Edificio_RIF`,`ActaReunion_TrabajadorEmpresa_Cedula`),
  KEY `fk_Horario_AsambleaOrdinaria1_idx` (`AsambleaOrdinaria_idAsambleaOrdinaria`),
  KEY `fk_Horario_AsambleaExtraordinaria1_idx` (`AsambleaExtraordinaria_idAsambleaExtraordinaria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inspeccionmantenimiento`
--

CREATE TABLE IF NOT EXISTS `inspeccionmantenimiento` (
  `idInspeccionMantenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  `Inspeccion` tinyint(1) NOT NULL,
  `Mantenimiento` tinyint(1) NOT NULL,
  `Fecha` date NOT NULL,
  `AreaComun_idAreaComun` int(11) NOT NULL,
  `TrabajadorEdificio_Cedula` int(11) NOT NULL,
  PRIMARY KEY (`idInspeccionMantenimiento`),
  UNIQUE KEY `idInspeccionMantenimiento_UNIQUE` (`idInspeccionMantenimiento`),
  KEY `fk_InspeccionMantenimiento_AreaComun1_idx` (`AreaComun_idAreaComun`),
  KEY `fk_InspeccionMantenimiento_TrabajadorEdificio1_idx` (`TrabajadorEdificio_Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `juntacondominio`
--

CREATE TABLE IF NOT EXISTS `juntacondominio` (
  `idJuntaCondominio` int(11) NOT NULL AUTO_INCREMENT,
  `Edificio_RIF` int(11) NOT NULL,
  PRIMARY KEY (`idJuntaCondominio`),
  UNIQUE KEY `idJuntaCondominio_UNIQUE` (`idJuntaCondominio`),
  KEY `fk_JuntaCondominio_Edificio1_idx` (`Edificio_RIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lugar`
--

CREATE TABLE IF NOT EXISTS `lugar` (
  `idLugar` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Lugar_idLugar` int(11) NOT NULL,
  PRIMARY KEY (`idLugar`),
  UNIQUE KEY `idLugar_UNIQUE` (`idLugar`),
  KEY `fk_Lugar_Lugar1_idx` (`Lugar_idLugar`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lugar`
--

INSERT INTO `lugar` (`idLugar`, `Tipo`, `Nombre`, `Lugar_idLugar`) VALUES
(1, 'Pais', 'Venezuela', 1),
(3, 'Ciudad', 'Caracas', 1),
(4, 'Estado', 'Miranda', 3),
(6, 'Estado', 'Zulia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notificacionapartamento`
--

CREATE TABLE IF NOT EXISTS `notificacionapartamento` (
  `idNotificacionApartamento` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `AsambleaOrdinaria_idAsambleaOrdinaria` int(11) DEFAULT NULL,
  `AsambleaExtraordinaria_idAsambleaExtraordinaria` int(11) DEFAULT NULL,
  `Transaccion_idTransaccion` int(11) DEFAULT NULL,
  `Apartamento_idApartamento` int(11) NOT NULL,
  PRIMARY KEY (`idNotificacionApartamento`),
  UNIQUE KEY `idNotificacionApartamento_UNIQUE` (`idNotificacionApartamento`),
  KEY `fk_NotificacionApartamento_AsambleaOrdinaria1_idx` (`AsambleaOrdinaria_idAsambleaOrdinaria`),
  KEY `fk_NotificacionApartamento_AsambleaExtraordinaria1_idx` (`AsambleaExtraordinaria_idAsambleaExtraordinaria`),
  KEY `fk_NotificacionApartamento_Transaccion1_idx` (`Transaccion_idTransaccion`),
  KEY `fk_NotificacionApartamento_Apartamento1_idx` (`Apartamento_idApartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oficina`
--

CREATE TABLE IF NOT EXISTS `oficina` (
  `idOficina` int(11) NOT NULL AUTO_INCREMENT,
  `Lugar_idLugar` int(11) NOT NULL,
  `Empresa_RIF` int(11) NOT NULL,
  PRIMARY KEY (`idOficina`),
  UNIQUE KEY `idOficina_UNIQUE` (`idOficina`),
  KEY `fk_Oficina_Lugar1_idx` (`Lugar_idLugar`),
  KEY `fk_Oficina_Empresa1_idx` (`Empresa_RIF`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `oficina`
--

INSERT INTO `oficina` (`idOficina`, `Lugar_idLugar`, `Empresa_RIF`) VALUES
(2, 1, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `pagosprogramados`
--

CREATE TABLE IF NOT EXISTS `pagosprogramados` (
  `idPagosProgramados` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  `MontoPorApartamento` int(11) NOT NULL,
  `Edificio_RIF` int(11) NOT NULL,
  PRIMARY KEY (`idPagosProgramados`),
  UNIQUE KEY `idPagosProgramados_UNIQUE` (`idPagosProgramados`),
  KEY `fk_PagosProgramados_Edificio1_idx` (`Edificio_RIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `personaasamblea`
--

CREATE TABLE IF NOT EXISTS `personaasamblea` (
  `idPersonaAsamblea` int(11) NOT NULL AUTO_INCREMENT,
  `Aprobacion` tinyint(1) NOT NULL,
  `Asistencia` tinyint(1) NOT NULL,
  `AsambleaExtraordinaria_idAsambleaExtraordinaria` int(11) NOT NULL,
  `AsambleaOrdinaria_idAsambleaOrdinaria` int(11) NOT NULL,
  `Propietario_Cedula` int(11) NOT NULL,
  PRIMARY KEY (`idPersonaAsamblea`),
  UNIQUE KEY `idPersonaAsamblea_UNIQUE` (`idPersonaAsamblea`),
  KEY `fk_PersonaAsamblea_AsambleaExtraordinaria1_idx` (`AsambleaExtraordinaria_idAsambleaExtraordinaria`),
  KEY `fk_PersonaAsamblea_AsambleaOrdinaria1_idx` (`AsambleaOrdinaria_idAsambleaOrdinaria`),
  KEY `fk_PersonaAsamblea_Propietario1_idx` (`Propietario_Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `piso`
--

CREATE TABLE IF NOT EXISTS `piso` (
  `idPiso` int(11) NOT NULL,
  `Edificio_RIF` int(11) NOT NULL,
  `NumeroDePiso` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPiso`),
  KEY `fk_Piso_Edificio_idx` (`Edificio_RIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `piso`
--

INSERT INTO `piso` (`idPiso`, `Edificio_RIF`, `NumeroDePiso`) VALUES
(1, 6434346, 1),
(2, 464366, 1),
(3, 515152512, 1),
(4, 515152512, 2),
(5, 515152512, 3),
(6, 515152512, 4),
(7, 515152512, 5),
(8, 2147483647, 1),
(9, 856856856, 1),
(10, 123, 1),
(11, 1234, 1),
(12, 1234, 2),
(13, 1234, 3),
(14, 1234, 4),
(15, 1234, 5),
(16, 1234, 6),
(17, 1234, 7);

-- --------------------------------------------------------

--
-- Table structure for table `propietario`
--

CREATE TABLE IF NOT EXISTS `propietario` (
  `Cedula` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `ClaveLogueo` varchar(45) NOT NULL,
  PRIMARY KEY (`Cedula`),
  UNIQUE KEY `Cedula_UNIQUE` (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `RIF` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`RIF`),
  UNIQUE KEY `idProveedor_UNIQUE` (`RIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `idServicio` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  `Monto` int(11) NOT NULL,
  `Proveedor_RIF` int(11) NOT NULL,
  PRIMARY KEY (`idServicio`),
  UNIQUE KEY `idServicio_UNIQUE` (`idServicio`),
  KEY `fk_Servicio_Proveedor1_idx` (`Proveedor_RIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supervicionevaluacion`
--

CREATE TABLE IF NOT EXISTS `supervicionevaluacion` (
  `idSupervicionEvaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `Nota` int(11) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Fecha` date NOT NULL,
  `TrabajadorEdificio_Cedula` int(11) NOT NULL,
  `TrabajadorEmpresa_Cedula` int(11) NOT NULL,
  `TrabajadorEmpresa_Oficina_idOficina` int(11) NOT NULL,
  `TrabajadorEmpresa_Oficina_Empresa_RIF` int(11) NOT NULL,
  PRIMARY KEY (`idSupervicionEvaluacion`),
  UNIQUE KEY `idSupervicionEvaluacion_UNIQUE` (`idSupervicionEvaluacion`),
  KEY `fk_SupervicionEvaluacion_TrabajadorEdificio1_idx` (`TrabajadorEdificio_Cedula`),
  KEY `fk_SupervicionEvaluacion_TrabajadorEmpresa1_idx` (`TrabajadorEmpresa_Cedula`,`TrabajadorEmpresa_Oficina_idOficina`,`TrabajadorEmpresa_Oficina_Empresa_RIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tdc`
--

CREATE TABLE IF NOT EXISTS `tdc` (
  `NumeroTDC` int(11) NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `FechaVencimiento` date NOT NULL,
  `FechaExpedicion` date NOT NULL,
  `CodigoSeguridad` int(11) NOT NULL,
  PRIMARY KEY (`NumeroTDC`),
  UNIQUE KEY `idTDC_UNIQUE` (`NumeroTDC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `telefono`
--

CREATE TABLE IF NOT EXISTS `telefono` (
  `numeroTelefono` int(11) NOT NULL,
  `Oficina_idOficina` int(11) NOT NULL,
  `Oficina_Empresa_RIF` int(11) NOT NULL,
  `Propietario_Cedula` int(11) NOT NULL,
  `TrabajadorEdificio_Cedula` int(11) NOT NULL,
  `TrabajadorEmpresa_Cedula` int(11) NOT NULL,
  `TrabajadorEmpresa_Oficina_idOficina` int(11) NOT NULL,
  `TrabajadorEmpresa_Oficina_Empresa_RIF` int(11) NOT NULL,
  PRIMARY KEY (`numeroTelefono`),
  UNIQUE KEY `numeroTelefono_UNIQUE` (`numeroTelefono`),
  KEY `fk_Telefono_Oficina1_idx` (`Oficina_idOficina`,`Oficina_Empresa_RIF`),
  KEY `fk_Telefono_Propietario1_idx` (`Propietario_Cedula`),
  KEY `fk_Telefono_TrabajadorEdificio1_idx` (`TrabajadorEdificio_Cedula`),
  KEY `fk_Telefono_TrabajadorEmpresa1_idx` (`TrabajadorEmpresa_Cedula`,`TrabajadorEmpresa_Oficina_idOficina`,`TrabajadorEmpresa_Oficina_Empresa_RIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trabajadoredificio`
--

CREATE TABLE IF NOT EXISTS `trabajadoredificio` (
  `Cedula` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `ClaveLogueo` varchar(45) NOT NULL,
  `Rol` varchar(45) NOT NULL,
  PRIMARY KEY (`Cedula`),
  UNIQUE KEY `Cedula_UNIQUE` (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trabajadorempresa`
--

CREATE TABLE IF NOT EXISTS `trabajadorempresa` (
  `Cedula` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `ClaveLogueo` varchar(45) DEFAULT NULL,
  `Rol` varchar(45) DEFAULT NULL,
  `Contrato` varchar(45) DEFAULT NULL,
  `Oficina_idOficina` int(11) NOT NULL,
  PRIMARY KEY (`Cedula`),
  UNIQUE KEY `Cedula_UNIQUE` (`Cedula`),
  KEY `fk_TrabajadorEmpresa_Oficina1_idx` (`Oficina_idOficina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trabajadorempresa`
--

INSERT INTO `trabajadorempresa` (`Cedula`, `Nombre`, `Apellido`, `ClaveLogueo`, `Rol`, `Contrato`, `Oficina_idOficina`) VALUES
(21291555, 'Andres', 'Rubio', '123', '2', '250', 2);

-- --------------------------------------------------------

--
-- Table structure for table `trabajo`
--

CREATE TABLE IF NOT EXISTS `trabajo` (
  `idTrabajo` int(11) NOT NULL AUTO_INCREMENT,
  `Monto` int(11) NOT NULL,
  `Aprobado` tinyint(1) NOT NULL DEFAULT '0',
  `AltoValor` tinyint(1) NOT NULL DEFAULT '0',
  `PagoParcial` int(11) DEFAULT NULL,
  `Mejora` tinyint(1) DEFAULT '0',
  `AsambleaExtraordinaria_idAsambleaExtraordinaria` int(11) DEFAULT NULL,
  `AsambleaExtraordinaria_TrabajadorEmpresa_Cedula` int(11) DEFAULT NULL,
  `AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_idOficina` int(11) DEFAULT NULL,
  `AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_Empresa_RIF` int(11) DEFAULT NULL,
  `CartaConsulta_idCartaConsulta` int(11) DEFAULT NULL,
  `Servicio_idServicio` int(11) NOT NULL,
  `Servicio_Proveedor_RIF` int(11) NOT NULL,
  PRIMARY KEY (`idTrabajo`),
  UNIQUE KEY `idTrabajo_UNIQUE` (`idTrabajo`),
  KEY `fk_Trabajo_AsambleaExtraordinaria1_idx` (`AsambleaExtraordinaria_idAsambleaExtraordinaria`,`AsambleaExtraordinaria_TrabajadorEmpresa_Cedula`,`AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_idOficina`,`AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_Empresa_RIF`),
  KEY `fk_Trabajo_CartaConsulta1_idx` (`CartaConsulta_idCartaConsulta`),
  KEY `fk_Trabajo_Servicio1_idx` (`Servicio_idServicio`,`Servicio_Proveedor_RIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaccion`
--

CREATE TABLE IF NOT EXISTS `transaccion` (
  `idTransaccion` int(11) NOT NULL AUTO_INCREMENT,
  `Monto` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Aprobado` tinyint(1) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Ingreso` tinyint(1) NOT NULL,
  `TDC_NumeroTDC` int(11) DEFAULT NULL,
  `Transferencia_idTransferencia` int(11) DEFAULT NULL,
  `Efectivo_idEfectivo` int(11) DEFAULT NULL,
  `Cheque_numeroCheque` int(11) DEFAULT NULL,
  `Fondo_idFondo` int(11) NOT NULL,
  `PagosProgramados_idPagosProgramados` int(11) DEFAULT NULL,
  `Edificio_RIF` int(11) NOT NULL,
  `Propietario_Cedula` int(11) NOT NULL,
  `Trabajo_idTrabajo` int(11) NOT NULL,
  PRIMARY KEY (`idTransaccion`),
  UNIQUE KEY `idTransaccion_UNIQUE` (`idTransaccion`),
  KEY `fk_Transaccion_TDC1_idx` (`TDC_NumeroTDC`),
  KEY `fk_Transaccion_Transferencia1_idx` (`Transferencia_idTransferencia`),
  KEY `fk_Transaccion_Efectivo1_idx` (`Efectivo_idEfectivo`),
  KEY `fk_Transaccion_Cheque1_idx` (`Cheque_numeroCheque`),
  KEY `fk_Transaccion_Fondo1_idx` (`Fondo_idFondo`),
  KEY `fk_Transaccion_PagosProgramados1_idx` (`PagosProgramados_idPagosProgramados`),
  KEY `fk_Transaccion_Edificio1_idx` (`Edificio_RIF`),
  KEY `fk_Transaccion_Propietario1_idx` (`Propietario_Cedula`),
  KEY `fk_Transaccion_Trabajo1_idx` (`Trabajo_idTrabajo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transferencia`
--

CREATE TABLE IF NOT EXISTS `transferencia` (
  `idTransferencia` int(11) NOT NULL AUTO_INCREMENT,
  `CuentaBancaria_NumeroDeCuenta` int(11) NOT NULL,
  PRIMARY KEY (`idTransferencia`),
  UNIQUE KEY `idTransferencia_UNIQUE` (`idTransferencia`),
  KEY `fk_Transferencia_CuentaBancaria1_idx` (`CuentaBancaria_NumeroDeCuenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ventaapartamento`
--

CREATE TABLE IF NOT EXISTS `ventaapartamento` (
  `idVentaApartamento` int(11) NOT NULL AUTO_INCREMENT,
  `Monto` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Comision` int(11) NOT NULL,
  `Apartamento_idApartamento` int(11) NOT NULL,
  `TrabajadorEmpresa_Cedula` int(11) NOT NULL,
  PRIMARY KEY (`idVentaApartamento`),
  UNIQUE KEY `idVentaApartamento_UNIQUE` (`idVentaApartamento`),
  KEY `fk_VentaApartamento_Apartamento1_idx` (`Apartamento_idApartamento`),
  KEY `fk_VentaApartamento_TrabajadorEmpresa1_idx` (`TrabajadorEmpresa_Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actareunion`
--
ALTER TABLE `actareunion`
  ADD CONSTRAINT `fk_ActaReunion_Edificio1` FOREIGN KEY (`Edificio_RIF`) REFERENCES `edificio` (`RIF`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ActaReunion_JuntaCondominio1` FOREIGN KEY (`JuntaCondominio_idJuntaCondominio`) REFERENCES `juntacondominio` (`idJuntaCondominio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ActaReunion_Oficina1` FOREIGN KEY (`Oficina_idOficina`) REFERENCES `oficina` (`idOficina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ActaReunion_TrabajadorEmpresa1` FOREIGN KEY (`TrabajadorEmpresa_Cedula`) REFERENCES `trabajadorempresa` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `apartamento`
--
ALTER TABLE `apartamento`
  ADD CONSTRAINT `fk_Apartamento_Piso1` FOREIGN KEY (`Piso_idPiso`) REFERENCES `piso` (`idPiso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `apartamentopersona`
--
ALTER TABLE `apartamentopersona`
  ADD CONSTRAINT `fk_ApartamentoPersona_Apartamento1` FOREIGN KEY (`Apartamento_idApartamento`) REFERENCES `apartamento` (`idApartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ApartamentoPersona_Propietario1` FOREIGN KEY (`Propietario_Cedula`) REFERENCES `propietario` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `areacomun`
--
ALTER TABLE `areacomun`
  ADD CONSTRAINT `fk_AreaComun_Edificio1` FOREIGN KEY (`Edificio_RIF`) REFERENCES `edificio` (`RIF`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `asambleaextraordinaria`
--
ALTER TABLE `asambleaextraordinaria`
  ADD CONSTRAINT `fk_AsambleaExtraordinaria_TrabajadorEmpresa1` FOREIGN KEY (`TrabajadorEmpresa_Cedula`) REFERENCES `trabajadorempresa` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `asambleaordinaria`
--
ALTER TABLE `asambleaordinaria`
  ADD CONSTRAINT `fk_AsambleaOrdinaria_TrabajadorEmpresa1` FOREIGN KEY (`TrabajadorEmpresa_Cedula`) REFERENCES `trabajadorempresa` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `atencion`
--
ALTER TABLE `atencion`
  ADD CONSTRAINT `fk_Atencion_JuntaCondominio1` FOREIGN KEY (`JuntaCondominio_idJuntaCondominio`) REFERENCES `juntacondominio` (`idJuntaCondominio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Atencion_Propietario1` FOREIGN KEY (`Propietario_Cedula`) REFERENCES `propietario` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Atencion_Oficina1` FOREIGN KEY (`Oficina_idOficina`) REFERENCES `oficina` (`idOficina`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cheque`
--
ALTER TABLE `cheque`
  ADD CONSTRAINT `fk_Cheque_CuentaBancaria1` FOREIGN KEY (`CuentaBancaria_NumeroDeCuenta`) REFERENCES `cuentabancaria` (`NumeroDeCuenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `fk_Contrato_Edificio1` FOREIGN KEY (`Edificio_RIF`) REFERENCES `edificio` (`RIF`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Contrato_TrabajadorEdificio1` FOREIGN KEY (`TrabajadorEdificio_Cedula`) REFERENCES `trabajadoredificio` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `correoelectronico`
--
ALTER TABLE `correoelectronico`
  ADD CONSTRAINT `fk_CorrecoElectronico_Oficina1` FOREIGN KEY (`Oficina_idOficina`) REFERENCES `oficina` (`idOficina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CorrecoElectronico_Propietario1` FOREIGN KEY (`Propietario_Cedula`) REFERENCES `propietario` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CorrecoElectronico_TrabajadorEdificio1` FOREIGN KEY (`TrabajadorEdificio_Cedula`) REFERENCES `trabajadoredificio` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CorrecoElectronico_TrabajadorEmpresa1` FOREIGN KEY (`TrabajadorEmpresa_Cedula`) REFERENCES `trabajadorempresa` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cuentabancaria`
--
ALTER TABLE `cuentabancaria`
  ADD CONSTRAINT `fk_CuentaBancaria_Oficina1` FOREIGN KEY (`Oficina_idOficina`) REFERENCES `oficina` (`idOficina`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `documentocondominio`
--
ALTER TABLE `documentocondominio`
  ADD CONSTRAINT `fk_DocumentoCondominio_Propietario1` FOREIGN KEY (`Propietario_Cedula`) REFERENCES `propietario` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DocumentoCondominio_JuntaCondominio1` FOREIGN KEY (`JuntaCondominio_idJuntaCondominio`) REFERENCES `juntacondominio` (`idJuntaCondominio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `edificio`
--
ALTER TABLE `edificio`
  ADD CONSTRAINT `fk_Edificio_Lugar1` FOREIGN KEY (`Lugar_idLugar`) REFERENCES `lugar` (`idLugar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Edificio_TrabajadorEmpresa1` FOREIGN KEY (`TrabajadorEmpresa_Cedula`) REFERENCES `trabajadorempresa` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `fk_Horario_Oficina1` FOREIGN KEY (`Oficina_idOficina`) REFERENCES `oficina` (`idOficina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Horario_TrabajadorEmpresa1` FOREIGN KEY (`TrabajadorEmpresa_Cedula`) REFERENCES `trabajadorempresa` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Horario_ActaReunion1` FOREIGN KEY (`ActaReunion_idActaReunion`) REFERENCES `actareunion` (`idActaReunion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Horario_AsambleaOrdinaria1` FOREIGN KEY (`AsambleaOrdinaria_idAsambleaOrdinaria`) REFERENCES `asambleaordinaria` (`idAsambleaOrdinaria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Horario_AsambleaExtraordinaria1` FOREIGN KEY (`AsambleaExtraordinaria_idAsambleaExtraordinaria`) REFERENCES `asambleaextraordinaria` (`idAsambleaExtraordinaria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inspeccionmantenimiento`
--
ALTER TABLE `inspeccionmantenimiento`
  ADD CONSTRAINT `fk_InspeccionMantenimiento_AreaComun1` FOREIGN KEY (`AreaComun_idAreaComun`) REFERENCES `areacomun` (`idAreaComun`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_InspeccionMantenimiento_TrabajadorEdificio1` FOREIGN KEY (`TrabajadorEdificio_Cedula`) REFERENCES `trabajadoredificio` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `juntacondominio`
--
ALTER TABLE `juntacondominio`
  ADD CONSTRAINT `fk_JuntaCondominio_Edificio1` FOREIGN KEY (`Edificio_RIF`) REFERENCES `edificio` (`RIF`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lugar`
--
ALTER TABLE `lugar`
  ADD CONSTRAINT `fk_Lugar_Lugar1` FOREIGN KEY (`Lugar_idLugar`) REFERENCES `lugar` (`idLugar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `notificacionapartamento`
--
ALTER TABLE `notificacionapartamento`
  ADD CONSTRAINT `fk_NotificacionApartamento_AsambleaOrdinaria1` FOREIGN KEY (`AsambleaOrdinaria_idAsambleaOrdinaria`) REFERENCES `asambleaordinaria` (`idAsambleaOrdinaria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_NotificacionApartamento_AsambleaExtraordinaria1` FOREIGN KEY (`AsambleaExtraordinaria_idAsambleaExtraordinaria`) REFERENCES `asambleaextraordinaria` (`idAsambleaExtraordinaria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_NotificacionApartamento_Transaccion1` FOREIGN KEY (`Transaccion_idTransaccion`) REFERENCES `transaccion` (`idTransaccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_NotificacionApartamento_Apartamento1` FOREIGN KEY (`Apartamento_idApartamento`) REFERENCES `apartamento` (`idApartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `oficina`
--
ALTER TABLE `oficina`
  ADD CONSTRAINT `fk_Oficina_Lugar1` FOREIGN KEY (`Lugar_idLugar`) REFERENCES `lugar` (`idLugar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Oficina_Empresa1` FOREIGN KEY (`Empresa_RIF`) REFERENCES `empresa` (`RIF`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pagosprogramados`
--
ALTER TABLE `pagosprogramados`
  ADD CONSTRAINT `fk_PagosProgramados_Edificio1` FOREIGN KEY (`Edificio_RIF`) REFERENCES `edificio` (`RIF`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `personaasamblea`
--
ALTER TABLE `personaasamblea`
  ADD CONSTRAINT `fk_PersonaAsamblea_AsambleaExtraordinaria1` FOREIGN KEY (`AsambleaExtraordinaria_idAsambleaExtraordinaria`) REFERENCES `asambleaextraordinaria` (`idAsambleaExtraordinaria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PersonaAsamblea_AsambleaOrdinaria1` FOREIGN KEY (`AsambleaOrdinaria_idAsambleaOrdinaria`) REFERENCES `asambleaordinaria` (`idAsambleaOrdinaria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PersonaAsamblea_Propietario1` FOREIGN KEY (`Propietario_Cedula`) REFERENCES `propietario` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `piso`
--
ALTER TABLE `piso`
  ADD CONSTRAINT `fk_Piso_Edificio` FOREIGN KEY (`Edificio_RIF`) REFERENCES `edificio` (`RIF`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_Servicio_Proveedor1` FOREIGN KEY (`Proveedor_RIF`) REFERENCES `proveedor` (`RIF`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supervicionevaluacion`
--
ALTER TABLE `supervicionevaluacion`
  ADD CONSTRAINT `fk_SupervicionEvaluacion_TrabajadorEdificio1` FOREIGN KEY (`TrabajadorEdificio_Cedula`) REFERENCES `trabajadoredificio` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SupervicionEvaluacion_TrabajadorEmpresa1` FOREIGN KEY (`TrabajadorEmpresa_Cedula`) REFERENCES `trabajadorempresa` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `fk_Telefono_Oficina1` FOREIGN KEY (`Oficina_idOficina`) REFERENCES `oficina` (`idOficina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Telefono_Propietario1` FOREIGN KEY (`Propietario_Cedula`) REFERENCES `propietario` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Telefono_TrabajadorEdificio1` FOREIGN KEY (`TrabajadorEdificio_Cedula`) REFERENCES `trabajadoredificio` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Telefono_TrabajadorEmpresa1` FOREIGN KEY (`TrabajadorEmpresa_Cedula`) REFERENCES `trabajadorempresa` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `trabajadorempresa`
--
ALTER TABLE `trabajadorempresa`
  ADD CONSTRAINT `fk_TrabajadorEmpresa_Oficina1` FOREIGN KEY (`Oficina_idOficina`) REFERENCES `oficina` (`idOficina`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `fk_Trabajo_AsambleaExtraordinaria1` FOREIGN KEY (`AsambleaExtraordinaria_idAsambleaExtraordinaria`) REFERENCES `asambleaextraordinaria` (`idAsambleaExtraordinaria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Trabajo_CartaConsulta1` FOREIGN KEY (`CartaConsulta_idCartaConsulta`) REFERENCES `cartaconsulta` (`idCartaConsulta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Trabajo_Servicio1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`idServicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `fk_Transaccion_TDC1` FOREIGN KEY (`TDC_NumeroTDC`) REFERENCES `tdc` (`NumeroTDC`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Transaccion_Transferencia1` FOREIGN KEY (`Transferencia_idTransferencia`) REFERENCES `transferencia` (`idTransferencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Transaccion_Efectivo1` FOREIGN KEY (`Efectivo_idEfectivo`) REFERENCES `efectivo` (`idEfectivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Transaccion_Cheque1` FOREIGN KEY (`Cheque_numeroCheque`) REFERENCES `cheque` (`numeroCheque`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Transaccion_Fondo1` FOREIGN KEY (`Fondo_idFondo`) REFERENCES `fondo` (`idFondo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Transaccion_PagosProgramados1` FOREIGN KEY (`PagosProgramados_idPagosProgramados`) REFERENCES `pagosprogramados` (`idPagosProgramados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Transaccion_Edificio1` FOREIGN KEY (`Edificio_RIF`) REFERENCES `edificio` (`RIF`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Transaccion_Propietario1` FOREIGN KEY (`Propietario_Cedula`) REFERENCES `propietario` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Transaccion_Trabajo1` FOREIGN KEY (`Trabajo_idTrabajo`) REFERENCES `trabajo` (`idTrabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transferencia`
--
ALTER TABLE `transferencia`
  ADD CONSTRAINT `fk_Transferencia_CuentaBancaria1` FOREIGN KEY (`CuentaBancaria_NumeroDeCuenta`) REFERENCES `cuentabancaria` (`NumeroDeCuenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ventaapartamento`
--
ALTER TABLE `ventaapartamento`
  ADD CONSTRAINT `fk_VentaApartamento_Apartamento1` FOREIGN KEY (`Apartamento_idApartamento`) REFERENCES `apartamento` (`idApartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_VentaApartamento_TrabajadorEmpresa1` FOREIGN KEY (`TrabajadorEmpresa_Cedula`) REFERENCES `trabajadorempresa` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
