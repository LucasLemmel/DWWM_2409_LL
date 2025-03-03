/*creer un utilisateur*/
CREATE USER 'toto'@'localhost' IDENTIFIED BY 'azer';

/* Accorder TOUS les PRIVILEGES à Toto 
sur la base de données rezo_social */
GRANT ALL PRIVILEGES ON rezo_social.* TO 'toto'@'localhost';

CREATE USER 'lucas'@'localhost' IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON foire_aux_questions.* TO 'lucas'@'localhost';


