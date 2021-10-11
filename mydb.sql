-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`continents`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`continents` ;

CREATE TABLE IF NOT EXISTS `mydb`.`continents` (
  `id_continent` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_continent` VARCHAR(21) NOT NULL,
  PRIMARY KEY (`id_continent`),
  UNIQUE INDEX `id_continent_UNIQUE` (`id_continent` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`currency`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`currency` ;

CREATE TABLE IF NOT EXISTS `mydb`.`currency` (
  `id_currency` INT UNSIGNED NOT NULL,
  `name_currency` VARCHAR(21) NOT NULL,
  PRIMARY KEY (`id_currency`),
  UNIQUE INDEX `id_currency_UNIQUE` (`id_currency` ASC) ,
  UNIQUE INDEX `name_currency_UNIQUE` (`name_currency` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cities`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`cities` ;

CREATE TABLE IF NOT EXISTS `mydb`.`cities` (
  `id_city` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(21) NOT NULL,
  `id_continent` INT UNSIGNED NOT NULL,
  `photo_name` VARCHAR(45) NOT NULL,
  `id_currency` INT UNSIGNED NOT NULL,
  `distance` INT UNSIGNED NOT NULL,
  `descr` VARCHAR(201) NOT NULL,
  PRIMARY KEY (`id_city`),
  UNIQUE INDEX `id_city_UNIQUE` (`id_city` ASC) ,
  INDEX `id_continent_idx` (`id_continent` ASC) ,
  INDEX `id_currency_idx` (`id_currency` ASC) ,
  CONSTRAINT `id_continent`
    FOREIGN KEY (`id_continent`)
    REFERENCES `mydb`.`continents` (`id_continent`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_currency`
    FOREIGN KEY (`id_currency`)
    REFERENCES `mydb`.`currency` (`id_currency`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`destinations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`destinations` ;

CREATE TABLE IF NOT EXISTS `mydb`.`destinations` (
  `id_destination` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_city` INT UNSIGNED NOT NULL,
  `nights` INT UNSIGNED NOT NULL DEFAULT 1,
  `days` INT UNSIGNED NOT NULL DEFAULT 0,
  `cost` INT UNSIGNED NOT NULL,
  `trip` TINYINT NOT NULL DEFAULT 0,
  `food` TINYINT NOT NULL DEFAULT 0,
  `hotel` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_destination`),
  UNIQUE INDEX `id_destination_UNIQUE` (`id_destination` ASC) ,
  INDEX `id_city_idx` (`id_city` ASC) ,
  CONSTRAINT `id_city`
    FOREIGN KEY (`id_city`)
    REFERENCES `mydb`.`cities` (`id_city`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `mydb`.`continents`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`continents` (`id_continent`, `name_continent`) VALUES (1, 'asia');
INSERT INTO `mydb`.`continents` (`id_continent`, `name_continent`) VALUES (2, 'europa');
INSERT INTO `mydb`.`continents` (`id_continent`, `name_continent`) VALUES (3, 'africa');
INSERT INTO `mydb`.`continents` (`id_continent`, `name_continent`) VALUES (4, 'america');
INSERT INTO `mydb`.`continents` (`id_continent`, `name_continent`) VALUES (5, 'oceania');

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`currency`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`currency` (`id_currency`, `name_currency`) VALUES (1, 'euro');
INSERT INTO `mydb`.`currency` (`id_currency`, `name_currency`) VALUES (2, 'sterling');

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`cities`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`cities` (`id_city`, `name`, `id_continent`, `photo_name`, `id_currency`, `distance`, `descr`) VALUES (1, 'Singapore', 1, 'Singapore', 1, 1000, 'Singapore, officially the Republic of Singapore, is a sovereign island city-state in maritime Southeast.');
INSERT INTO `mydb`.`cities` (`id_city`, `name`, `id_continent`, `photo_name`, `id_currency`, `distance`, `descr`) VALUES (2, 'Thailand', 1, 'Thailand', 1, 1000, 'Thailand is a Southeast Asian country. It\'s known for tropical beaches, opulent royal palaces');
INSERT INTO `mydb`.`cities` (`id_city`, `name`, `id_continent`, `photo_name`, `id_currency`, `distance`, `descr`) VALUES (3, 'Paris', 2, 'Paris', 1, 1000, 'Paris, France\'s capital, is a major European city and a global center for art, fashion, gastronomy and culture.');
INSERT INTO `mydb`.`cities` (`id_city`, `name`, `id_continent`, `photo_name`, `id_currency`, `distance`, `descr`) VALUES (4, 'New Zealand', 5, 'NewZealand', 2, 1000, 'New Zealand is an island country in the southwestern Pacific Ocean. It consists of two main landmasses');
INSERT INTO `mydb`.`cities` (`id_city`, `name`, `id_continent`, `photo_name`, `id_currency`, `distance`, `descr`) VALUES (5, 'Bora Bora', 5, 'BoraBora', 2, 1000, 'Bora Bora is a small South Pacific island northwest of Tahiti in French Polynesia. Surrounded by sand');
INSERT INTO `mydb`.`cities` (`id_city`, `name`, `id_continent`, `photo_name`, `id_currency`, `distance`, `descr`) VALUES (6, 'London', 2, 'London', 2, 1000, 'London, the capital of England and the United Kingdom, is a 21st-century city with history stretching');

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`destinations`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`destinations` (`id_destination`, `id_city`, `nights`, `days`, `cost`, `trip`, `food`, `hotel`) VALUES (1, 1, 2, 0, 10000, 1, 1, 1);
INSERT INTO `mydb`.`destinations` (`id_destination`, `id_city`, `nights`, `days`, `cost`, `trip`, `food`, `hotel`) VALUES (2, 2, 2, 0, 10000, 1, 1, 1);
INSERT INTO `mydb`.`destinations` (`id_destination`, `id_city`, `nights`, `days`, `cost`, `trip`, `food`, `hotel`) VALUES (3, 3, 2, 0, 10000, 1, 1, 1);
INSERT INTO `mydb`.`destinations` (`id_destination`, `id_city`, `nights`, `days`, `cost`, `trip`, `food`, `hotel`) VALUES (4, 4, 1, 0, 38800, 1, 1, 1);
INSERT INTO `mydb`.`destinations` (`id_destination`, `id_city`, `nights`, `days`, `cost`, `trip`, `food`, `hotel`) VALUES (5, 5, 3, 2, 38800, 1, 1, 1);
INSERT INTO `mydb`.`destinations` (`id_destination`, `id_city`, `nights`, `days`, `cost`, `trip`, `food`, `hotel`) VALUES (6, 6, 3, 2, 38800, 1, 1, 1);

COMMIT;

