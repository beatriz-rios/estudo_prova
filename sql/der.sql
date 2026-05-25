-- Schema lojacosme
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lojacosme`;
USE `lojacosme`;
-- -----------------------------------------------------
-- Table `lojacosme`.`cosmetico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojacosme`.`cosmetico` (
    `idproduto` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(200) NULL DEFAULT NULL,
    `marca` VARCHAR(200) NULL DEFAULT NULL,
    `volume` VARCHAR(200) NULL DEFAULT NULL,
    `cor` VARCHAR(200) NULL DEFAULT NULL,
    PRIMARY KEY (`idproduto`)
);
-- -----------------------------------------------------
-- Table `lojacosme`.`movimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojacosme`.`movimento` (
    `idmovimento` INT(11) NOT NULL AUTO_INCREMENT,
    `mov` VARCHAR(100) NULL DEFAULT NULL,
    `cosmetico_idproduto` INT(11) NOT NULL,
    `quant` VARCHAR(200) NULL DEFAULT NULL,
    PRIMARY KEY (`idmovimento`, `cosmetico_idproduto`),
    INDEX `fk_movimento_cosmetico_idx` (`cosmetico_idproduto` ASC) VISIBLE,
    CONSTRAINT `fk_movimento_cosmetico` FOREIGN KEY (`cosmetico_idproduto`) REFERENCES `lojacosme`.`cosmetico` (`idproduto`)
);