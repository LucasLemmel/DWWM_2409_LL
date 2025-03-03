
DROP DATABASE IF EXISTS buveurs;

CREATE DATABASE buveurs;

USE buveurs;


CREATE TABLE buveurs
(
	num_buv INT PRIMARY KEY AUTO_INCREMENT,
    nom_buv VARCHAR(100) NOT NULL,
    prenom_buv VARCHAR(100) NOT NULL,
    ville_buv
);

CREATE TABLE vignerons
(
	
);

CREATE TABLE commandes
(
	
);

CREATE TABLE lignes_de_commandes
(
	
);

CREATE TABLE vins
(
	
);


CREATE TABLE ressentis_vignerons_entre_eux
(
	
);
