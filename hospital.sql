-- MySQL Script generated by MySQL Workbench
-- 10/11/16 12:13:04
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema hospital
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `hospital` ;

-- -----------------------------------------------------
-- Schema hospital
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hospital` DEFAULT CHARACTER SET utf8 ;
USE `hospital` ;

-- -----------------------------------------------------
-- Table `hospital`.`Tipo_Documento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Tipo_Documento` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Tipo_Documento` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Estado_Civil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Estado_Civil` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Estado_Civil` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Nivel_Educativo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Nivel_Educativo` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Nivel_Educativo` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Madre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Madre` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Madre` (
  `ID` INT(45) NOT NULL,
  `dpi` BIGINT(100) NOT NULL,
  `rfid` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `primer_apellido` VARCHAR(45) NOT NULL,
  `segundo_apellido` VARCHAR(45) NULL,
  `fecha_de_nacimiento` DATE NOT NULL,
  `edad` INT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `tipo_de_ocupacion` VARCHAR(45) NULL,
  `total_de_embarazos` INT NULL,
  `hijos_actualmente_vivos` INT NULL,
  `hijos_nacidos_vivos_que_fallecieron` INT NULL,
  `abortos_o_nacidos_muertos` INT NULL,
  `fecha_nacimiento_ultimo_hijo` DATE NULL,
  `tipo_documento` INT NOT NULL,
  `estado_civil` INT NOT NULL,
  `nivel_educativo` INT NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`, `dpi`, `rfid`),
  INDEX `fk_Madre_TipoDocumento1_idx` (`tipo_documento` ASC),
  INDEX `fk_Madre_EstadoCivil1_idx` (`estado_civil` ASC),
  INDEX `fk_Madre_NivelEducativo1_idx` (`nivel_educativo` ASC),
  CONSTRAINT `fk_Madre_TipoDocumento1`
    FOREIGN KEY (`tipo_documento`)
    REFERENCES `hospital`.`Tipo_Documento` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Madre_EstadoCivil1`
    FOREIGN KEY (`estado_civil`)
    REFERENCES `hospital`.`Estado_Civil` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Madre_NivelEducativo1`
    FOREIGN KEY (`nivel_educativo`)
    REFERENCES `hospital`.`Nivel_Educativo` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Sede`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Sede` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Sede` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `departamento` VARCHAR(45) NOT NULL,
  `municipio` VARCHAR(45) NOT NULL,
  `zona` VARCHAR(45) NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Atendio_Parto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Atendio_Parto` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Atendio_Parto` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Condicion_Parto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Condicion_Parto` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Condicion_Parto` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Tipo_Parto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Tipo_Parto` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Tipo_Parto` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Neonato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Neonato` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Neonato` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `rfid` INT NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  `peso` FLOAT NOT NULL,
  `talla` FLOAT NOT NULL,
  `perimetro_cefalico` FLOAT NOT NULL,
  `perimetro_toracico` FLOAT NOT NULL,
  `hora_de_nacimiento` VARCHAR(45) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `duracion_del_embarazo` VARCHAR(45) NOT NULL,
  `malformacion_congenita` VARCHAR(45) NULL,
  `lactancia_precoz` VARCHAR(45) NOT NULL,
  `tipo_de_ligadura_y_corte_del_cordon` VARCHAR(45) NOT NULL,
  `sede` INT NOT NULL,
  `atendio_parto` INT NOT NULL,
  `condicion_parto` INT NOT NULL,
  `tipo_parto` INT NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`, `rfid`),
  INDEX `fk_Neonato_Sede1_idx` (`sede` ASC),
  INDEX `fk_Neonato_AtendioParto1_idx` (`atendio_parto` ASC),
  INDEX `fk_Neonato_CondicionParto1_idx` (`condicion_parto` ASC),
  INDEX `fk_Neonato_TipoParto1_idx` (`tipo_parto` ASC),
  CONSTRAINT `fk_Neonato_Sede1`
    FOREIGN KEY (`sede`)
    REFERENCES `hospital`.`Sede` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Neonato_AtendioParto1`
    FOREIGN KEY (`atendio_parto`)
    REFERENCES `hospital`.`Atendio_Parto` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Neonato_CondicionParto1`
    FOREIGN KEY (`condicion_parto`)
    REFERENCES `hospital`.`Condicion_Parto` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Neonato_TipoParto1`
    FOREIGN KEY (`tipo_parto`)
    REFERENCES `hospital`.`Tipo_Parto` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Profesion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Profesion` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Profesion` (
  `ID` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Profesional`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Profesional` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Profesional` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `no_colegiatura` INT NOT NULL,
  `dpi` BIGINT(100) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `primer_apellido` VARCHAR(45) NOT NULL,
  `segundo_apellido` VARCHAR(45) NULL,
  `genero` VARCHAR(45) NOT NULL,
  `certifica_declara` VARCHAR(45) NOT NULL,
  `tipo_documento` INT NOT NULL,
  `sede` INT NOT NULL,
  `profesion` INT NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`, `no_colegiatura`, `dpi`),
  INDEX `fk_Profecional_TipoDocumento1_idx` (`tipo_documento` ASC),
  INDEX `fk_Profecional_Sede1_idx` (`sede` ASC),
  INDEX `fk_Profecional_Profesion1_idx` (`profesion` ASC),
  CONSTRAINT `fk_Profecional_TipoDocumento1`
    FOREIGN KEY (`tipo_documento`)
    REFERENCES `hospital`.`Tipo_Documento` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Profecional_Sede1`
    FOREIGN KEY (`sede`)
    REFERENCES `hospital`.`Sede` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Profecional_Profesion1`
    FOREIGN KEY (`profesion`)
    REFERENCES `hospital`.`Profesion` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Usuario` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Usuario` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `activo` INT NULL,
  `timestamp` TIMESTAMP NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Role`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Role` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Role` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `role` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  `activo` INT NULL,
  `timestamp` TIMESTAMP NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`UserRole`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`UserRole` ;

CREATE TABLE IF NOT EXISTS `hospital`.`UserRole` (
  `Usuario_ID` INT NOT NULL,
  `Role_ID` INT NOT NULL,
  PRIMARY KEY (`Usuario_ID`, `Role_ID`),
  INDEX `fk_Usuario_has_Role_Role1_idx` (`Role_ID` ASC),
  INDEX `fk_Usuario_has_Role_Usuario_idx` (`Usuario_ID` ASC),
  CONSTRAINT `fk_Usuario_has_Role_Usuario`
    FOREIGN KEY (`Usuario_ID`)
    REFERENCES `hospital`.`Usuario` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Role_Role1`
    FOREIGN KEY (`Role_ID`)
    REFERENCES `hospital`.`Role` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `hospital` ;

-- -----------------------------------------------------
-- Placeholder table for view `hospital`.`CertificadoNacimiento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`CertificadoNacimiento` (`DPI_Madre` INT, `Nombre_Madre` INT, `Primer_Apellido_Madre` INT, `Segundo_Apellido_Madre` INT, `Edad_Madre` INT, `Direccion_Madre` INT, `Genero_Neonato` INT, `Fecha_Nacimiento_Neonato` INT, `Sede_Neonato` INT, `Hora_De_Nacimiento_Neonato` INT, `Tipo_Documento_Profecional` INT, `Primer_Apellido_Profecional` INT, `Segundo_Apellido_Profecional` INT, `Nombre_Profecional` INT, `DPI_Profecional` INT, `Certifica_Declara_Profecional` INT, `Sede_Profecional` INT, `No_Colegiatura_Profecional` INT);

-- -----------------------------------------------------
-- View `hospital`.`CertificadoNacimiento`
-- -----------------------------------------------------
DROP VIEW IF EXISTS `hospital`.`CertificadoNacimiento` ;
DROP TABLE IF EXISTS `hospital`.`CertificadoNacimiento`;
USE `hospital`;
CREATE  OR REPLACE VIEW CertificadoNacimiento AS
    SELECT 
        madre.DPI AS DPI_Madre,
        madre.Nombre AS Nombre_Madre,
        madre.Primer_Apellido AS Primer_Apellido_Madre ,
        madre.Segundo_Apellido AS Segundo_Apellido_Madre,
        madre.Edad AS Edad_Madre,
        madre.Direccion AS Direccion_Madre ,
        neonato.Genero AS Genero_Neonato ,
        neonato.Fecha_Nacimiento AS Fecha_Nacimiento_Neonato ,
        neonato.Sede AS Sede_Neonato ,
        neonato.Hora_De_Nacimiento AS Hora_De_Nacimiento_Neonato ,
        profesional.Tipo_Documento AS Tipo_Documento_Profecional ,
        profesional.Primer_Apellido AS Primer_Apellido_Profecional ,
        profesional.Segundo_Apellido AS Segundo_Apellido_Profecional ,
        profesional.Nombre AS Nombre_Profecional ,
        profesional.DPI AS DPI_Profecional ,
        profesional.Certifica_Declara AS Certifica_Declara_Profecional ,
        profesional.Sede AS Sede_Profecional ,
        profesional.No_Colegiatura AS No_Colegiatura_Profecional
    FROM
        madre,
        neonato,
        profesional;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `hospital`.`Tipo_Documento`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Tipo_Documento` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'DPI', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Tipo_Documento` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'CEDULA', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Tipo_Documento` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'PASAPORTE', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Estado_Civil`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Estado_Civil` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'SOLTERO(A)', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Estado_Civil` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'CASADO(A)', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Nivel_Educativo`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Nivel_Educativo` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'PRIMARIA', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Nivel_Educativo` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'EDUCACION BASICA', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Nivel_Educativo` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'DIVERSIFICADO', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Nivel_Educativo` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (4, 'CARRERA UNIVERSITARIA', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Madre`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Madre` (`ID`, `dpi`, `rfid`, `nombre`, `primer_apellido`, `segundo_apellido`, `fecha_de_nacimiento`, `edad`, `direccion`, `tipo_de_ocupacion`, `total_de_embarazos`, `hijos_actualmente_vivos`, `hijos_nacidos_vivos_que_fallecieron`, `abortos_o_nacidos_muertos`, `fecha_nacimiento_ultimo_hijo`, `tipo_documento`, `estado_civil`, `nivel_educativo`, `activo`, `timestamp`) VALUES (1, 2521134110114, 20160929, 'Jasmin', 'Cardona', 'Aguilar', '08-07-1996', 20, 'villa nueva', 'secretaria', 0, 0, 0, 0, NULL, 1, 1, 4, 1, '11-10-2016 12:08:52 ');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Sede`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Sede` (`ID`, `nombre`, `direccion`, `departamento`, `municipio`, `zona`, `activo`, `timestamp`) VALUES (1, 'HOSPITAL DE AMATITLAN', '4TA CALLE 10 AVE BARRIO HOSPITAL AMATITLAN', 'GUATEMALA', 'AMATITLAN', '0', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Atendio_Parto`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Atendio_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'ENFERMERO(A)', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Atendio_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'MEDICO GENERAL', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Atendio_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'MEDICO GINECO-OBSTETRA', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Atendio_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (4, 'OBSTETRA', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Condicion_Parto`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Condicion_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'ESPONTANEO', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Condicion_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'INSTRUMENTADO', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Condicion_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'CESAREA', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Tipo_Parto`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Tipo_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'UNICO', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Tipo_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'DOBLE', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Tipo_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'TRIPLE', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Tipo_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (4, 'MAS DE TRES', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Neonato`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Neonato` (`ID`, `rfid`, `genero`, `peso`, `talla`, `perimetro_cefalico`, `perimetro_toracico`, `hora_de_nacimiento`, `fecha_nacimiento`, `duracion_del_embarazo`, `malformacion_congenita`, `lactancia_precoz`, `tipo_de_ligadura_y_corte_del_cordon`, `sede`, `atendio_parto`, `condicion_parto`, `tipo_parto`, `activo`, `timestamp`) VALUES (1, 20160929, '1', 500, 10, 10, 10, '10:26:00', '29-09-2016', '38', 'no', 'si', DEFAULT, 1, 1, 1, 1, 1, DEFAULT);

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Profesion`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Profesion` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'OBSTETRA', 1, '29-09-2016 19:21:00');
INSERT INTO `hospital`.`Profesion` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'MEDICO GENERAL', 1, '29-09-2016 19:21:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Usuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Usuario` (`ID`, `usuario`, `password`, `activo`, `timestamp`) VALUES (1, 'admin', 'admin', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Usuario` (`ID`, `usuario`, `password`, `activo`, `timestamp`) VALUES (2, 'enfermero', 'enfermero', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Role`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'DOCTOR', NULL, 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'ENFERMERO', 'DEBE LLENAR SOLO FORMULARIOS', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'DIRECTOR', '', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (4, 'ADMIN', NULL, 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (5, 'DBA', NULL, 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (DEFAULT, '', NULL, NULL, NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`UserRole`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`UserRole` (`Usuario_ID`, `Role_ID`) VALUES (1, 4);
INSERT INTO `hospital`.`UserRole` (`Usuario_ID`, `Role_ID`) VALUES (2, 2);

COMMIT;

