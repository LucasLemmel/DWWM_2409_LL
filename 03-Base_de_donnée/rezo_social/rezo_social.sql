

DROP DATABASE IF EXISTS rezo_social;

CREATE DATABASE IF NOT EXISTS rezo_social;

USE rezo_social;

CREATE TABLE utilisateur
(
	utilisateur_id INT PRIMARY KEY,
    utilisateur_nom VARCHAR(32) NOT NULL,
    utilisateur_email VARCHAR(128) NOT NULL
);

CREATE TABLE publication
(
	pub_id INT AUTO_INCREMENT,
    pub_date DATETIME,
    pub_titre VARCHAR(255) NOT NULL,
    pub_contenu TEXT,
    utilisateur_id INT,
    PRIMARY KEY (pub_id),
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(utilisateur_id)
);

CREATE TABLE aimer
(
	utilisateur_id INT,
    pub_id INT,
    PRIMARY KEY (utilisateur_id, pub_id),
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(utilisateur_id),
    FOREIGN KEY (pub_id) REFERENCES publication(pub_id)
);