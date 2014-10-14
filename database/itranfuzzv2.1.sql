SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `itranfuzz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `itranfuzz` ;

-- -----------------------------------------------------
-- Table `itranfuzz`.`center`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `itranfuzz`.`center` (
  `cId` INT NOT NULL AUTO_INCREMENT COMMENT 'Center identification number\n' ,
  `province` VARCHAR(5) NOT NULL COMMENT 'Province of the\nCenter' ,
  `address1` VARCHAR(45) NOT NULL COMMENT 'Address of the center\n' ,
  `address2` VARCHAR(45) NOT NULL COMMENT 'Address 2\nWhich is actually\nCity of the\nCenter\n' ,
  `phone` INT(10) NOT NULL ,
  `lLongitude` DECIMAL(11,8) NOT NULL COMMENT 'Logitude' ,
  `lLatitude` DECIMAL(11,8) NOT NULL COMMENT 'Latitude\n' ,
  `type` CHAR NOT NULL DEFAULT 'c' COMMENT 'Type of the\nCenter\n\'C\' - collecting\n\'s\'- store\n' ,
  PRIMARY KEY (`cId`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `itranfuzz`.`employee`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `itranfuzz`.`employee` (
  `eId` INT NOT NULL COMMENT 'identification\nnumber of employee\n' ,
  `email` VARCHAR(45) NOT NULL COMMENT 'email of the employee\n' ,
  `password` VARCHAR(45) NOT NULL ,
  `fname` VARCHAR(45) NOT NULL COMMENT 'First name\nof the employee\n' ,
  `lname` VARCHAR(45) NOT NULL COMMENT 'last name of the employee\n' ,
  `nic` VARCHAR(10) NOT NULL ,
  `gender` CHAR NOT NULL COMMENT 'gender of the\nemployee\n' ,
  `phone` INT(10) NOT NULL COMMENT 'phone number\n' ,
  `address1` VARCHAR(45) NOT NULL COMMENT 'address1' ,
  `address2` VARCHAR(45) NOT NULL COMMENT 'address2\n' ,
  `type` VARCHAR(5) NOT NULL DEFAULT 'cs' COMMENT 'type of the employee\n' ,
  `photo` VARCHAR(45) NULL DEFAULT 'defualt_profile_20.jpg' COMMENT 'photo of the employee\n' ,
  `center_cId` INT NOT NULL ,
  PRIMARY KEY (`eId`) ,
  INDEX `fk_employee_center` (`center_cId` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  CONSTRAINT `fk_employee_center`
    FOREIGN KEY (`center_cId` )
    REFERENCES `itranfuzz`.`center` (`cId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `itranfuzz`.`donor`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `itranfuzz`.`donor` (
  `dId` INT NOT NULL AUTO_INCREMENT ,
  `email` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  `nic` VARCHAR(10) NOT NULL ,
  `fname` VARCHAR(45) NOT NULL ,
  `lname` VARCHAR(45) NOT NULL ,
  `photo` VARCHAR(45) NULL DEFAULT 'defualt_profile_20.jpg' ,
  `phone` INT(10) NULL ,
  `address1` VARCHAR(45) NOT NULL ,
  `address2` VARCHAR(45) NOT NULL ,
  `gender` CHAR NOT NULL ,
  `dob` DATE NOT NULL ,
  `illnessTest` TINYINT(1) NOT NULL ,
  `lLongitude` DECIMAL(11,8) NULL ,
  `lLatitude` DECIMAL(11,8) NULL ,
  `bType` VARCHAR(2) NULL ,
  `dState` CHAR NOT NULL ,
  `center_cId` INT NOT NULL ,
  PRIMARY KEY (`dId`) ,
  INDEX `fk_donor_center1` (`center_cId` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  CONSTRAINT `fk_donor_center1`
    FOREIGN KEY (`center_cId` )
    REFERENCES `itranfuzz`.`center` (`cId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `itranfuzz`.`donation_method`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `itranfuzz`.`donation_method` (
  `dmId` INT NOT NULL ,
  `description` VARCHAR(45) NOT NULL ,
  `minAge` INT NULL ,
  `maxAge` INT NULL ,
  `weight` INT NOT NULL ,
  `dParticipating` INT NOT NULL ,
  `maxAmount` INT NULL ,
  PRIMARY KEY (`dmId`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `itranfuzz`.`event`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `itranfuzz`.`event` (
  `evId` INT NOT NULL ,
  `description` VARCHAR(45) NOT NULL ,
  `evType` CHAR NOT NULL ,
  `center_cId` INT NOT NULL ,
  `employee_eId` INT NOT NULL ,
  PRIMARY KEY (`evId`) ,
  INDEX `fk_event_center1` (`center_cId` ASC) ,
  INDEX `fk_event_employee1` (`employee_eId` ASC) ,
  CONSTRAINT `fk_event_center1`
    FOREIGN KEY (`center_cId` )
    REFERENCES `itranfuzz`.`center` (`cId` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_event_employee1`
    FOREIGN KEY (`employee_eId` )
    REFERENCES `itranfuzz`.`employee` (`eId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `itranfuzz`.`participate`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `itranfuzz`.`participate` (
  `donor_dId` INT NOT NULL ,
  `event_evId` INT NOT NULL ,
  `donation_method_dmId` INT NOT NULL ,
  PRIMARY KEY (`donor_dId`, `event_evId`) ,
  INDEX `fk_donor_has_event_event1` (`event_evId` ASC) ,
  INDEX `fk_donor_has_event_donor1` (`donor_dId` ASC) ,
  INDEX `fk_participate_donation_method1` (`donation_method_dmId` ASC) ,
  CONSTRAINT `fk_donor_has_event_donor1`
    FOREIGN KEY (`donor_dId` )
    REFERENCES `itranfuzz`.`donor` (`dId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_donor_has_event_event1`
    FOREIGN KEY (`event_evId` )
    REFERENCES `itranfuzz`.`event` (`evId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_participate_donation_method1`
    FOREIGN KEY (`donation_method_dmId` )
    REFERENCES `itranfuzz`.`donation_method` (`dmId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `itranfuzz`.`blood_request`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `itranfuzz`.`blood_request` (
  `brId` INT NOT NULL ,
  `bType` VARCHAR(2) NOT NULL ,
  `eDate` DATE NOT NULL ,
  `eTime` TIME NOT NULL ,
  `amount` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`brId`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `itranfuzz`.`mobile_session`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `itranfuzz`.`mobile_session` (
  `mseId` INT NOT NULL ,
  `orgName` VARCHAR(45) NULL ,
  `address1` VARCHAR(45) NOT NULL ,
  `address2` VARCHAR(45) NOT NULL ,
  `phone` VARCHAR(45) NOT NULL ,
  `date` DATE NOT NULL ,
  `stime` TIME NOT NULL ,
  `etime` TIME NOT NULL ,
  `lLongitude` DECIMAL(11,8) NOT NULL ,
  `lLatitude` DECIMAL(11,8) NOT NULL ,
  `eParticipation` INT NOT NULL ,
  PRIMARY KEY (`mseId`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
