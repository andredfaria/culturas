CREATE DATABASE TAI;

CREATE TABLE `TAI`.`culturas`( `id` INT(255) NOT NULL AUTO_INCREMENT, `nome` VARCHAR(255) NOT NULL, `descricao` VARCHAR(255), `valorMedio` INT(255), `tempoDeColheitaEmDia` INT(255), PRIMARY KEY (`id`, `nome`) ); 
CREATE TABLE `TAI`.`colheita`( `idCultura` INT(255) NOT NULL, `nome` VARCHAR(255) NOT NULL, `data` DATE NOT NULL, `quantidade` INT(11), `lucro` FLOAT(11) ); 
CREATE TABLE `TAI`.`plantio`( `idProduto` INT(255) NOT NULL, `nome` VARCHAR(255) NOT NULL, `data` DATE, `quantidade` INT(11), `custo` FLOAT(11) ); 