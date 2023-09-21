CREATE DATABASE `editora` DEFAULT CHARACTER SET utf8mb4 ;
USE `editora` ;

-- -----------------------------------------------------
-- Table `editora`.`TipoAcesso`
-- -----------------------------------------------------
CREATE TABLE `editora`.`TipoAcesso` (
  `idTipoAcesso` INT NOT NULL AUTO_INCREMENT,
  `descricaoTipoAcesso` VARCHAR(45) NULL,
  PRIMARY KEY (`idTipoAcesso`));
  
-- -----------------------------------------------------
-- Table `editora`.`Provincia`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Provincia` (
  `idProvincia` INT NOT NULL AUTO_INCREMENT,
  `nomeProvincia` VARCHAR(45) NULL,
  PRIMARY KEY (`idProvincia`));

-- -----------------------------------------------------
-- Table `editora`.`Nacionalidade`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Nacionalidade` (
  `idNacionalidade` INT NOT NULL AUTO_INCREMENT,
  `nomePais` VARCHAR(45) NULL,
  `valorNacionalidade` VARCHAR(45) NULL,
  PRIMARY KEY (`idNacionalidade`));

-- -----------------------------------------------------
-- Table `editora`.`Municipio`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Municipio` (
  `idMunicipio` INT NOT NULL AUTO_INCREMENT,
  `nomeMunicipio` VARCHAR(45) NULL,
  `idProvincia` INT NOT NULL,
  PRIMARY KEY (`idMunicipio`),
  INDEX `fk_Municipio_Provincia1_idx` (`idProvincia` ASC),
  CONSTRAINT `fk_Municipio_Provincia1`
    FOREIGN KEY (`idProvincia`)
    REFERENCES `editora`.`Provincia` (`idProvincia`) 
     );


-- -----------------------------------------------------
-- Table `editora`.`Utilizador`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Utilizador` (
  `idUtilizador` INT NOT NULL AUTO_INCREMENT,
  `nomeUtilizador` VARCHAR(45) NULL,
  `sobrenomeUtilizador` VARCHAR(45) NULL,
  `nomeArtisticoUtilizador` VARCHAR(45) NULL,
  `NIFUtilizador` VARCHAR(45) NULL,
  `emailUtilizador` VARCHAR(45) NULL,
  `telefoneUtilizador` INT NULL,
  `senhaUtilizador` VARCHAR(45) NULL,
  `idNacionalidade` INT NOT NULL,
  `dataNascimentoUtilizador` DATE NULL,
  `generoUtilizador` ENUM('M', 'F') NULL,
  `idTipoAcesso` INT NOT NULL,
  `idProvincia` INT NOT NULL,
  `idMunicipio` INT NOT NULL,
  `endereco` VARCHAR(45) NULL,
  PRIMARY KEY (`idUtilizador`),
  INDEX `fk_Usuario_TipoAcesso_idx` (`idTipoAcesso` ASC),
  INDEX `fk_Usuario_Provincia1_idx` (`idProvincia` ASC),
  INDEX `fk_Usuario_Municipio1_idx` (`idMunicipio` ASC),
  INDEX `fk_Usuario_Nacionalidade1_idx` (`idNacionalidade` ASC),
  CONSTRAINT `fk_Usuario_TipoAcesso`
    FOREIGN KEY (`idTipoAcesso`)
    REFERENCES `editora`.`TipoAcesso` (`idTipoAcesso`) ON DELETE CASCADE ,
  CONSTRAINT `fk_Usuario_Provincia1`
    FOREIGN KEY (`idProvincia`)
    REFERENCES `editora`.`Provincia` (`idProvincia`) ON DELETE CASCADE ,
  CONSTRAINT `fk_Usuario_Municipio1`
    FOREIGN KEY (`idMunicipio`)
    REFERENCES `editora`.`Municipio` (`idMunicipio`) ON DELETE CASCADE ,
  CONSTRAINT `fk_Usuario_Nacionalidade1`
    FOREIGN KEY (`idNacionalidade`)
    REFERENCES `editora`.`Nacionalidade` (`idNacionalidade`) ON DELETE CASCADE );


-- -----------------------------------------------------
-- Table `editora`.`Banda`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Banda` (
  `idBanda` INT NOT NULL AUTO_INCREMENT,
  `nomeBanda` VARCHAR(45) NULL,
  PRIMARY KEY (`idBanda`)
);


-- -----------------------------------------------------
-- Table `editora`.`CargoArtistaBanda`
-- -----------------------------------------------------
CREATE TABLE `editora`.`CargoArtistaBanda` (
  `idCargoArtistaBanda` INT NOT NULL AUTO_INCREMENT,
  `descricaoCargoArtistaBanda` VARCHAR(45) NULL,
  `idBanda` INT NOT NULL,
  PRIMARY KEY (`idCargoArtistaBanda`),
  INDEX `fk_CargoArtistaBanda_Banda1_idx` (`idBanda` ASC),
  CONSTRAINT `fk_Banda_Banda1`
    FOREIGN KEY (`idBanda`)
    REFERENCES `editora`.`Banda` (`idBanda`) ON DELETE CASCADE
  );

-- -----------------------------------------------------
-- Table `editora`.`CargoArtista`
-- -----------------------------------------------------
CREATE TABLE `editora`.`CargoArtista` (
  `idCargoArtista` INT NOT NULL AUTO_INCREMENT,
  `descricaoCargoArtista` VARCHAR(45) NULL,
  PRIMARY KEY (`idCargoArtista`));


-- -----------------------------------------------------
-- Table `editora`.`Artista`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Artista` (
  `idArtista` INT NOT NULL AUTO_INCREMENT,
  `idUtilizador` INT NOT NULL,
  `idCargoArtista` INT NOT NULL,
  `idBanda` INT NOT NULL,
  `idCargoArtistaBanda` INT NOT NULL,
  PRIMARY KEY (`idArtista`, `idCargoArtista`),
  INDEX `fk_Artista_Usuario1_idx` (`idUtilizador` ASC),
  INDEX `fk_Artista_Banda1_idx` (`idBanda` ASC),
  INDEX `fk_Artista_CargoArtista1_idx` (`idCargoArtista` ASC),
  INDEX `fk_Artista_CargoArtistaBanda1_idx` (`idCargoArtista` ASC),
  CONSTRAINT `fk_Artista_Usuario1`
    FOREIGN KEY (`idUtilizador`)
    REFERENCES `editora`.`Utilizador` (`idUtilizador`)  ON DELETE CASCADE ,
  CONSTRAINT `fk_Artista_Banda1`
    FOREIGN KEY (`idBanda`)
    REFERENCES `editora`.`Banda` (`idBanda`) ON DELETE CASCADE ,
  CONSTRAINT `fk_Artista_CargoArtista1`
    FOREIGN KEY (`idCargoArtista`)
    REFERENCES `editora`.`CargoArtista` (`idCargoArtista`) ON DELETE CASCADE ,
  CONSTRAINT `fk_Artista_CargoArtistaBanda1`
    FOREIGN KEY (`idCargoArtistaBanda`)
    REFERENCES `editora`.`CargoArtistaBanda` (`idCargoArtistaBanda`) ON DELETE CASCADE );


-- -----------------------------------------------------
-- Table `editora`.`Album`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Album` (
  `idAlbum` INT NOT NULL AUTO_INCREMENT,
  `nomeAlbum` VARCHAR(45) NULL,
  `idArtista` INT  NULL,
  PRIMARY KEY (`idAlbum`),
  INDEX `fk_Album_Artista1_idx` (`idArtista` ASC),
  CONSTRAINT `fk_Album_Artista1`
    FOREIGN KEY (`idArtista`)
    REFERENCES `editora`.`Artista` (`idArtista`) ON DELETE CASCADE );


-- -----------------------------------------------------
-- Table `editora`.`Estilo`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Estilo` (
  `idEstilo` INT NOT NULL AUTO_INCREMENT,
  `nomeEstilo` VARCHAR(45) NULL,
  PRIMARY KEY (`idEstilo`));


-- -----------------------------------------------------
-- Table `editora`.`Obra`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Obra` (
  `idObra` INT NOT NULL AUTO_INCREMENT,
  `tituloObra` VARCHAR(45) NULL,
  `idArtista` INT NOT NULL,
  `generoObra` VARCHAR(45) NULL,
  `idEstilo` INT NOT NULL,
  `idAlbum` INT NULL,
  `arquivoObra` LONGBLOB NULL,
  PRIMARY KEY (`idObra`),
  INDEX `fk_Obra_Artista1_idx` (`idArtista` ASC),
  INDEX `fk_Obra_Estilo1_idx` (`idEstilo` ASC),
  INDEX `fk_Obra_Album1_idx` (`idAlbum` ASC),
  CONSTRAINT `fk_Obra_Artista1`
    FOREIGN KEY (`idArtista`)
    REFERENCES `editora`.`Artista` (`idArtista`) ON DELETE CASCADE ,
  CONSTRAINT `fk_Obra_Estilo1`
    FOREIGN KEY (`idEstilo`)
    REFERENCES `editora`.`Estilo` (`idEstilo`) ON DELETE CASCADE ,
  CONSTRAINT `fk_Obra_Album1`
    FOREIGN KEY (`idAlbum`)
    REFERENCES `editora`.`Album` (`idAlbum`) ON DELETE CASCADE );


-- -----------------------------------------------------
-- Table `editora`.`Pedido`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Pedido` (
  `idPedido` INT NOT NULL AUTO_INCREMENT,
  `tituloPedido` VARCHAR(45) NULL,
  `descricaoPedido` VARCHAR(45) NULL,
  `cargoPedido` VARCHAR(45) NULL,
  `idUtilizador` INT NOT NULL,
  PRIMARY KEY (`idPedido`),
  INDEX `fk_Pedido_Usuario1_idx` (`idUtilizador` ASC),
  CONSTRAINT `fk_Pedido_Usuario1`
    FOREIGN KEY (`idUtilizador`)
    REFERENCES `editora`.`Utilizador` (`idUtilizador`) ON DELETE CASCADE );


-- -----------------------------------------------------
-- Table `editora`.`Contrato`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Contrato` (
  `idContrato` INT NOT NULL AUTO_INCREMENT,
  `idUtilizador` INT NOT NULL,
  `tipoContrato` VARCHAR(45) NULL,
  `descricaoContrato` VARCHAR(45) NULL,
  `dataInicialContrato` DATE NULL,
  `dataFinalContrato` DATE NULL,
  `estadoContrato` VARCHAR(45) NULL,
  PRIMARY KEY (`idContrato`),
  INDEX `fk_Contrato_Usuario1_idx` (`idUtilizador` ASC),
  CONSTRAINT `fk_Contrato_Usuario1`
    FOREIGN KEY (`idUtilizador`)
    REFERENCES `editora`.`Utilizador` (`idUtilizador`) ON DELETE CASCADE );


-- -----------------------------------------------------
-- Table `editora`.`Chat`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Chat` (
  `idChat` INT NOT NULL AUTO_INCREMENT,
  `idUtilizadorEmissor` INT NOT NULL,
  `idUtilizadorReceptor` INT NOT NULL,
  `textoChat` VARCHAR(45) NULL,
  `arquivoChat` LONGBLOB NULL,
  PRIMARY KEY (`idChat`),
  INDEX `fk_Chat_Usuario1_idx` (`idUtilizadorEmissor` ASC),
  INDEX `fk_Chat_Usuario2_idx` (`idUtilizadorReceptor` ASC),
  CONSTRAINT `fk_Chat_Usuario1`
    FOREIGN KEY (`idUtilizadorEmissor`)
    REFERENCES `editora`.`Utilizador` (`idUtilizador`) ON DELETE CASCADE ,
  CONSTRAINT `fk_Chat_Usuario2`
    FOREIGN KEY (`idUtilizadorReceptor`)
    REFERENCES `editora`.`Utilizador` (`idUtilizador`) ON DELETE CASCADE );


-- -----------------------------------------------------
-- Table `editora`.`Pagamento`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Pagamento` (
  `idPagamento` INT NOT NULL AUTO_INCREMENT,
  `idArtista` INT NOT NULL,
  `idUtilizadorGerente` INT NOT NULL,
  `descricaoPagamento` VARCHAR(45) NULL,
  `valorPagamento` DECIMAL(3,3) NULL,
  `dataPagamento` DATE NULL,
  PRIMARY KEY (`idPagamento`),
  INDEX `fk_Pagamento_Artista1_idx` (`idArtista` ASC),
  INDEX `fk_Pagamento_Usuario1_idx` (`idUtilizadorGerente` ASC),
  CONSTRAINT `fk_Pagamento_Artista1`
    FOREIGN KEY (`idArtista`)
    REFERENCES `editora`.`Artista` (`idArtista`) ON DELETE CASCADE ,
  CONSTRAINT `fk_Pagamento_Usuario1`
    FOREIGN KEY (`idUtilizadorGerente`)
    REFERENCES `editora`.`Utilizador` (`idUtilizador`) ON DELETE CASCADE );


-- -----------------------------------------------------
-- Table `editora`.`Postagem`
-- -----------------------------------------------------
CREATE TABLE `editora`.`Postagem` (
  `idPostagem` INT NOT NULL AUTO_INCREMENT,
  `idObra` INT NOT NULL,
  `idUtilizadorPublicador` INT NOT NULL,
  `dataPostagem` DATE NULL,
  PRIMARY KEY (`idPostagem`, `idUtilizadorPublicador`),
  INDEX `fk_Postagem_Obra1_idx` (`idObra` ASC),
  INDEX `fk_Postagem_Usuario1_idx` (`idUtilizadorPublicador` ASC),
  CONSTRAINT `fk_Postagem_Obra1`
    FOREIGN KEY (`idObra`)
    REFERENCES `editora`.`Obra` (`idObra`) ON DELETE CASCADE ,
  CONSTRAINT `fk_Postagem_Usuario1`
    FOREIGN KEY (`idUtilizadorPublicador`)
    REFERENCES `editora`.`Utilizador` (`idUtilizador`) ON DELETE CASCADE );


-- -----------------------------------------------------
-- Table `editora`.`SaldoEmpresa`
-- -----------------------------------------------------
CREATE TABLE `editora`.`SaldoEmpresa` (
  `idSaldoEmpresa` INT NOT NULL AUTO_INCREMENT,
  `valorSaldoEmpresa` DECIMAL(3,3) NULL,
  PRIMARY KEY (`idSaldoEmpresa`));


-- -----------------------------------------------------
-- Table `editora`.`Notificação`
-- -----------------------------------------------------
CREATE TABLE Notificacao(  
  idNotificacao int NOT NULL primary key AUTO_INCREMENT,
  textoNotificacao text,
  idTipoAcesso int
);
