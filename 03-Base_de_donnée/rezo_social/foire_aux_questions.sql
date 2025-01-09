
/*Supprimer la base de donnée si elle existe*/
DROP DATABASE IF EXISTS mini_faq;

/*Creer la base de donnée*/
CREATE DATABASE mini_faq;

/*Selectionner la base donnée*/
USE mini_faq;

/*creer la table user*/
CREATE TABLE users
(
	user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_email VARCHAR(128) NOT NULL UNIQUE,
    user_lastname VARCHAR(50) NOT NULL,
    user_firstname VARCHAR(50) NOT NULL
);

/*creer la table categories*/
CREATE TABLE categories
(
	category_name VARCHAR(30) NOT NULL PRIMARY KEY,
    category_description VARCHAR(255),
    category_order TINYINT NOT NULL UNIQUE
);

/*creer la table questions*/
CREATE TABLE questions
(
	question_id INT AUTO_INCREMENT PRIMARY KEY,
    question_date DATE NOT NULL,
    question_label VARCHAR(255) NOT NULL,
    question_response TEXT NOT NULL,
    user_id INT
);

/*creer la table categories_questions*/
CREATE TABLE categories_questions
(
	category_name VARCHAR(30) NOT NULL,
    question_id INT
);

/* Modifier la table publication et y ajouter la clé étrangère */
ALTER TABLE questions ADD FOREIGN KEY (user_id) REFERENCES users(user_id);
 
/* CONTRAINTES */
ALTER TABLE categories_questions ADD CONSTRAINT fk_categories_questions_questions FOREIGN KEY(question_id) REFERENCES questions(question_id);
ALTER TABLE categories_questions ADD CONSTRAINT fk_categories_questions_categories FOREIGN KEY(category_name) REFERENCES categories(category_name);