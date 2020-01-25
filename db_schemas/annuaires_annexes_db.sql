-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema annuaires-sw
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `annuaires-sw` ;

-- -----------------------------------------------------
-- Schema annuaires-sw
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `annuaires-sw` DEFAULT CHARACTER SET utf8 ;
USE `annuaires-sw` ;

-- -----------------------------------------------------
-- Table `annuaires-sw`.`categorie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `annuaires-sw`.`categorie` ;

CREATE TABLE IF NOT EXISTS `annuaires-sw`.`categorie` (
  `idcategorie` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(45) NOT NULL,
  `description` LONGTEXT NULL,
  PRIMARY KEY (`idcategorie`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `annuaires-sw`.`service_referenced`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `annuaires-sw`.`service_referenced` ;

CREATE TABLE IF NOT EXISTS `annuaires-sw`.`service_referenced` (
  `idservice_referenced` INT NOT NULL,
  `denomination` VARCHAR(45) NOT NULL,
  `contacts` LONGTEXT NOT NULL,
  `adresse` VARCHAR(100) NOT NULL,
  `horaire_disponibilite` VARCHAR(45) NOT NULL,
  `id_ville` INT NOT NULL DEFAULT 1,
  `details` LONGTEXT NULL,
  `categorie_idcategorie` INT NOT NULL,
  PRIMARY KEY (`idservice_referenced`),
  INDEX `fk_service_referenced_categorie_idx` (`categorie_idcategorie` ASC),
  CONSTRAINT `fk_service_referenced_categorie`
    FOREIGN KEY (`categorie_idcategorie`)
    REFERENCES `annuaires-sw`.`categorie` (`idcategorie`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
