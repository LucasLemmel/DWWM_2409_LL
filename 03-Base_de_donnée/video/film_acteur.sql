/*
INSERER LE JEU D'ESSAI DANS LA TABLE FILMS
Sous langage : DML/LMD
Data Manipulation Language
Langage de manipulation des données
Principale intructions:
INSERT : Ajouter des nouvelles données dans une table
UPDATE : Mettre à jour des données existantes dans une table
DELETE : Supprimer des données dans une table
TRUNCATE : Vider toute la table
*/

-- selectionner la base de données
 USE videos;
 
 TRUNCATE TABLE film_acteur;
 TRUNCATE TABLE film;
 TRUNCATE TABLE acteur;
 TRUNCATE TABLE realisateur;
 
 -- insertion des données dans la table "realisateur"
 
INSERT INTO realisateur
VALUES
(NULL,"Besson","Luc"),
(NULL,"Spielberg","Steven"),
(NULL,"Carpenter","John");

INSERT INTO acteur
(acteur_prenom,acteur_nom)
VALUES
("Jean","Réno"),
("Mel","Gibson"),
("Tom","Holland"),
("Eva","Green"),
("Emma","Watson");