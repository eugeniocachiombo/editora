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

INSERT INTO Provincia (nomeProvincia) VALUES ('Luanda'),
    ('Bengo'),
    ('Benguela'),
    ('Bié'),
    ('Cabinda'),
    ('Cuando Cubango'),
    ('Cuanza Norte'),
    ('Cuanza Sul'),
    ('Cunene'),
    ('Huambo'),
    ('Huíla'),
    ('Malanje'),
    ('Moxico'),
    ('Namibe'),
    ('Uíge'),
    ('Zaire'),
    ('Lunda Norte'),
    ('Lunda Sul');

INSERT INTO Nacionalidade (nomePais, valorNacionalidade) VALUES
( 'Angola', 'Angolano(a)'),
( 'Portugal', 'Portugês(a)'),
( 'Brasil', 'Brasileiro(a)'),
( 'Congo', 'Congolês(a)');

INSERT INTO `Municipio` ( `nomeMunicipio`, `idProvincia`) VALUES
( 'Belas', 1),
( 'Cacuaco', 1),
( 'Cazenga', 1),
( 'Icolo e bengo', 1),
( 'Luanda', 1),
( 'Quiçama', 1),
( 'Viana', 1);

INSERT INTO `Municipio` ( `nomeMunicipio`, `idProvincia`) VALUES
("Ambriz", 2),
("Bula Atumba", 2),
("Dande", 2),
("Dembos", 2),
("Nambuangongo", 2),
("Pango Aluquém", 2);

INSERT INTO `Municipio` ( `nomeMunicipio`, `idProvincia`) VALUES
("Baía Farta", 3),
("Balombo", 3),
("Benguela", 3),
("Bocoio", 3),
("Caimbambo", 3),
("Catumbela", 3),
("Chongoroi", 3),
("Cubal", 3),
("Ganda", 3),
("Lobito", 3);

INSERT INTO `Municipio` ( `nomeMunicipio`, `idProvincia`) VALUES
("Andulo", 4),
("Camacupa", 4),
("Catabola", 4),
("Chinguar", 4),
("Chitembo", 4),
("Cuemba", 4),
("Cunhinga", 4),
("Cuito", 4),
("Nharêa", 4);

INSERT INTO `Municipio` ( `nomeMunicipio`, `idProvincia`) VALUES
("Belize", 5),
("Buco-Zau", 5),
("Cabinda", 5),
("Cacongo", 5),
("Landana", 5),
("Lândana", 5),
("Necuto", 5),
("Tomboco", 5);

INSERT INTO `Municipio` ( `nomeMunicipio`, `idProvincia`) VALUES
("Calai", 6),
("Cuangar", 6),
("Cuchi", 6),
("Cuito Cuanavale", 6),
("Dirico", 6),
("Mavinga", 6),
("Menongue", 6),
("Nancova", 6),
("Rivungo", 6);

INSERT INTO `Municipio` ( `nomeMunicipio`, `idProvincia`) VALUES
("Ambaca", 7),
("Banga", 7),
("Bolongongo", 7),
("Cambambe", 7),
("Cazengo", 7),
("Golungo Alto", 7),
("Gonguembo", 7),
("Lucala", 7),
("Quiculungo", 7),
("Samba Caju", 7),
("Uige", 7);

INSERT INTO `Municipio` ( `nomeMunicipio`, `idProvincia`) VALUES
("Amboim", 8),
("Cassongue", 8),
("Conda", 8),
("Ebo", 8),
("Libolo", 8),
("Mussende", 8),
("Porto Amboim", 8),
("Quibala", 8),
("Quilenda", 8),
("Seles", 8),
("Sumbe", 8);

INSERT INTO `Municipio` ( `nomeMunicipio`, `idProvincia`) VALUES
("Cahama", 9),
("Cuanhama", 9),
("Curoca", 9),
("Cuvelai", 9),
("Namacunde", 9),
("Ombadja", 9);

INSERT INTO `Municipio` ( `nomeMunicipio`, `idProvincia`) VALUES
("Bailundo", 10),
("Caála", 10),
("Catchiungo", 10),
("Chicala-Cholohanga", 10),
("Chinjenje", 10),
("Longonjo", 10),
("Londuimbali", 10),
("Mungo", 10),
("Tchicala Tcholohanga", 10),
("Ucuma", 10),

("Caconda", 11),
("Cacula", 11),
("Caluquembe", 11),
("Chiange", 11),
("Chibia", 11),
("Chicomba", 11),
("Chipindo", 11),
("Cuvango", 11),
("Humpata", 11),
("Jamba", 11),
("Lubango", 11),
("Matala", 11),

("Cacuso", 12),
("Calandula", 12),
("Cambundi-Catembo", 12),
("Cangandala", 12),
("Cahombo", 12),
("Cunda-dia-Baze", 12),
("Luquembo", 12),
("Malanje", 12),
("Marimba", 12),
("Massango", 12),
("Mucari", 12),
("Quela", 12),
("Quirima", 12),
("Cunda-dia-Baze", 12),

("Alto Zambeze", 13),
("Bundas", 13),
("Camanongue", 13),
("LÈua", 13),
("Luacano", 13),
("Luchazes", 13),
("Luena", 13),
("Lumeje", 13),
("Moxico", 13),

("Bibala", 14),
("Camucuio", 14),
("MoÁ‚medes", 14),
("TÙmbwa", 14),
("Virei", 14),

("Alto Cauale", 15),
("Ambuila", 15),
("Bembe", 15),
("Buengas", 15),
("Bungo", 15),
("Damba", 15),
("Mucaba", 15),
("Negage", 15),
("Puri", 15),
("Quitexe", 15),
("Sanza Pombo", 15),
("Songo", 15),
("UÌge", 15),
("Zombo", 15),

("Cuimba", 16),
("M'banza-Kongo", 16),
("Noqui", 16),
("N'zeto", 16),
("Soyo", 16),
("Tomboco", 16),

("Caungula", 17),
("Chitato", 17),
("Cuango", 17),
("CuÌlo", 17),
("Lubalo", 17),
("Lucapa", 17),
("Capenda-Camulemba", 17),
("Cambulo", 17),
("Dundo", 17),
("X·-Muteba", 17),

("Cacolo", 18),
("Dala", 18),
("Muconda", 18),
("Saurimo", 18);


INSERT INTO `TipoAcesso` ( `descricaoTipoAcesso`) VALUES
( 'independente'),
( 'gerente'),
( 'blogger'),
( 'ceo');

INSERT INTO `Banda` (`nomeBanda`) VALUES
('...');

INSERT INTO `CargoArtista` ( `descricaoCargoArtista`) VALUES
( 'Cantor'),
( 'Produtor'),
( '...');