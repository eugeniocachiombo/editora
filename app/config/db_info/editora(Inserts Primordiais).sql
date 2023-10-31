

INSERT INTO `Utilizador` ( `nomeUtilizador`, `sobrenomeUtilizador`, `nomeArtisticoUtilizador`, `NIFUtilizador`, `emailUtilizador`, `telefoneUtilizador`, `senhaUtilizador`, `idNacionalidade`, `dataNascimentoUtilizador`, `generoUtilizador`, `idTipoAcesso`, `idProvincia`, `idMunicipio`, `endereco`) VALUES
('Frederico', 'Cachiombo', 'Frey Snuff Snuts', '12121121212', 'fredy@gmail.com', '923564488', 'Genilson', '1', '2000-10-27', 'M', '1', '1', '3', 'Alfa 5'),
('Eugénio', 'Cachiombo', 'Génio Pró', '11fgdgdgdg', 'gp@gmail.com', '922222222', 'asasasas', '1', '1999-04-12', 'M', '1', '1', '3', 'Alfa 5');

INSERT INTO `CargoArtistaBanda` (`descricaoCargoArtistaBanda`, `idBanda`) VALUES
( 'Pianista', 1),
( 'Vocalista', 1),
( 'Guitarrista', 1),
( 'Baterista', 1),
( '...', 2);

INSERT INTO `Artista` (`idUtilizador`, `idCargoArtista`, `idBanda`, `idCargoArtistaBanda`) VALUES
(1, 1, 1, 4),
(2, 2, 1, 3);