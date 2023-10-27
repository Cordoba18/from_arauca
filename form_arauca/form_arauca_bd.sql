-- MySQL Script generated by MySQL Workbench
-- Fri Oct 27 15:56:10 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema form_arauca_bd
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema form_arauca_bd
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `form_arauca_bd` DEFAULT CHARACTER SET utf8 ;
USE `form_arauca_bd` ;

-- -----------------------------------------------------
-- Table `form_arauca_bd`.`departaments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `form_arauca_bd`.`departaments` (
  `id` INT NOT NULL,
  `departamentscol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `form_arauca_bd`.`citys`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `form_arauca_bd`.`citys` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `city` VARCHAR(100) NOT NULL,
  `id_departament` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_citys_departaments_idx` (`id_departament` ASC) ,
  CONSTRAINT `fk_citys_departaments`
    FOREIGN KEY (`id_departament`)
    REFERENCES `form_arauca_bd`.`departaments` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `form_arauca_bd`.`participants`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `form_arauca_bd`.`participants` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `nit` VARCHAR(45) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `id_city` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_participants_citys1_idx` (`id_city` ASC) ,
  CONSTRAINT `fk_participants_citys1`
    FOREIGN KEY (`id_city`)
    REFERENCES `form_arauca_bd`.`citys` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `form_arauca_bd`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `form_arauca_bd`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
