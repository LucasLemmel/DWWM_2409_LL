/*commentaire*/
-- commantaire

/* Création de la base de données 
Sous langage DDL / LDD
Data definition Language
Langage de définition de donnée
 */

/*SUPPRIMER LA BASE DE DONNEES SI ELLE EXISTE*/
DROP DATABASE IF EXISTS videos;

/*CREER UNE BASE DE DONNEES NOMMEE "video"*/
CREATE DATABASE IF NOT EXISTS videos;

/*UTILISER LA BASE DE DONNEES CREEE*/
USE videos;

-- Les requêtes qui suivent utiliseront
-- la base de données sélectionné ci-dessus

-- creer une table nommée réalisateur
CREATE TABLE realisateur
(
	realisateur_id INT PRIMARY KEY AUTO_INCREMENT,
    realisateur_nom VARCHAR(100) NOT NULL,
    realisateur_prenom VARCHAR(100) NOT NULL
);

CREATE TABLE acteur
(
	acteur_id INT AUTO_INCREMENT,
    acteur_nom VARCHAR(100) NOT NULL,
    acteur_prenom VARCHAR(100) NOT NULL,
    PRIMARY KEY (acteur_id)
);

/*CREER UNE TABLE NOMMEE"film"*/
CREATE TABLE IF NOT EXISTS film
(
	film_id INT AUTO_INCREMENT,
    film_titre VARCHAR(255) NOT NULL,
    film_duree SMALLINT NOT NULL,
    realisateur_id INT,
    PRIMARY KEY (film_id),
    FOREIGN KEY (realisateur_id) REFERENCES realisateur(realisateur_id)
);

CREATE TABLE film_acteur
(
	film_id INT,
    acteur_id INT,
    PRIMARY KEY (film_id,acteur_id),
    FOREIGN KEY (film_id) REFERENCES film(film_id),
    FOREIGN KEY (acteur_id) REFERENCES acteur(acteur_id)
);



/*
INSERER LE JEU D'ESSAI DANS LA TABLE FILMS
INSERT INTO film
VALUES
(NULL, "Léon", 120),
(NULL, "E.T", 90),
(NULL, "ça", 103);

INSERER LE JEU D'ESSAI DANS LA TABLE FILMS
INSERT INTO film
(film_titre, film_duree)
VALUES
("L'exorciste", 240),
("Super papa", 87),
("Gladiator 2", 117);

INSERT INTO film
(film_duree, film_titre)
VALUES
(98, "Loup-garou");

AFFICHER LES DONNEES DE LA TABLE 
SELECT * FROM film;

SELECT film_id, film_titre FROM film;

*/