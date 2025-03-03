USE employes;

set lc_time_names = 'fr_FR';

/*Première partie*/

-- 1. Donner nom, job, numéro et salaire de tous les employés, puis seulement des employés du département 10

SELECT DEPTNO, ENAME, JOB, SAL, EMPNO
FROM EMP
WHERE DEPTNO =10;

-- 2. Donner nom, job et salaire des employés de type MANAGER dont le salaire est supérieur à 2800

SELECT ENAME, JOB, SAL
FROM EMP
WHERE SAL > 2800 AND JOB = 'MANAGER';

-- 3. Donner la liste des MANAGER n'appartenant pas au département 30

SELECT * 
FROM EMP
WHERE DEPTNO <> 30;

-- 4. Liste des employés de salaire compris entre 1200 et 1400

SELECT *
FROM EMP
WHERE SAL BETWEEN 1200 AND 1400;

-- 5. Liste des employés des départements 10 et 30 classés dans l'ordre alphabétique

SELECT * 
FROM EMP
WHERE DEPTNO IN (10,30)
ORDER BY ENAME;

-- 6. Liste des employés du département 30 classés dans l'ordre des salaires croissants

SELECT * 
FROM EMP
WHERE DEPTNO = 30
ORDER BY SAL;

-- 7. Liste de tous les employés classés par emploi et salaires décroissants

SELECT * 
FROM EMP
ORDER BY JOB, SAL DESC;

-- 8. Liste des différents emplois

SELECT JOB
FROM EMP;

-- 9. Donner le nom du département où travaille ALLEN

SELECT DNAME 
FROM EMP
JOIN DEPT ON EMP.DEPTNO = DEPT.DEPTNO
WHERE ENAME = 'ALLEN';

-- 10. Liste des employés avec nom du département, nom, job, salaire classés par noms de départements et par salaires décroissants.

SELECT DNAME, ENAME, JOB, SAL
FROM EMP
JOIN DEPT ON EMP.DEPTNO = DEPT.DEPTNO
ORDER BY DNAME, SAL DESC;

-- 11. Liste des employés vendeurs (SALESMAN) avec affichage de nom, salaire, commissions, salaire + commissions

SELECT ENAME, SAL, COMM, SAL + COMM
FROM EMP
WHERE JOB = 'SALESMAN';

-- 12. Liste des employés du département 20: nom, job, date d'embauche sous forme VEN 28 FEV 1997'

SELECT ENAME, JOB,upper(date_format(hiredate, "%a %e %b %Y")) 
FROM EMP
WHERE DEPTNO = 20;

-- 13. Donner le salaire le plus élevé par département

SELECT max(SAL), EMP.DEPTNO, DEPT.DNAME
FROM EMP NATURAL JOIN DEPT 
GROUP BY EMP.DEPTNO;

-- 14. Donner département par département masse salariale, nombre d'employés, salaire moyen par type d'emploi.

SELECT DEPTNO, COUNT(EMPNO), ROUND(AVG(SAL),2), SUM(SAL + IFNULL(COMM, 0)), JOB
FROM EMP
GROUP BY DEPTNO, JOB;

-- 15. Même question mais on se limite aux sous-ensembles d'au moins 2 employés

 SELECT DEPTNO, COUNT(EMPNO) as "effectif" ,ROUND(AVG(SAL),2) as "salaire moyen", SUM(SAL + IFNULL(COMM, 0)) as'masse salariale', JOB
FROM EMP
GROUP BY DEPTNO, JOB HAVING COUNT(empno)>1;

-- 16. Liste des employés (Nom, département, salaire) de même emploi que JONES

SELECT ENAME, DEPTNO, SAL, JOB
FROM EMP
WHERE JOB =
(SELECT JOB
FROM EMP
WHERE ENAME = "JONES") AND ENAME <> "JONES";

-- 17. Liste des employés (nom, salaire) dont le salaire est supérieur à la moyenne globale des salaires



-- 18. Création d'une table PROJET avec comme colonnes numéro de projet (3 chiffres), nom de projet(5 caractères), budget. Entrez les valeurs suivantes:
-- 101, ALPHA, 96000
-- 102, BETA, 82000
-- 103, GAMMA, 15000



-- 19. Ajouter l'attribut numéro de projet à la table EMP et affecter tous les vendeurs du département 30 au projet 101, et les autres au projet 102



-- 20. Créer une vue comportant tous les employés avec nom, job, nom de département et nom de projet


-- 21. A l'aide de la vue créée précédemment, lister tous les employés avec nom, job, nom de département et nom de projet triés sur nom de département et nom de projet

-- 22. Donner le nom du projet associé à chaque manager

/*Deuxième partie*/

-- 1. Afficher la liste des managers des départements 20 et 30

-- 2. Afficher la liste des employés qui ne sont pas manager et qui ont été embauchés en 81

-- 3. Afficher la liste des employés ayant une commission

-- 4. Afficher la liste des noms, numéros de département, jobs et date d'embauche triés par Numero de Département et JOB les derniers embauches d'abord.

-- 5. Afficher la liste des employés travaillant à DALLAS

-- 6. Afficher les noms et dates d'embauche des employés embauchés avant leur manager, avec le nom et date d'embauche du manager.

-- 7. Lister les numéros des employés n'ayant pas de subordonné.

-- 8. Afficher les noms et dates d'embauche des employés embauchés avant BLAKE.

-- 9. Afficher les employés embauchés le même jour que FORD.

-- 10. Lister les employés ayant le même manager que CLARK.

-- 11. Lister les employés ayant même job et même manager que TURNER.

-- 12. Lister les employés du département RESEARCH embauchés le même jour que quelqu'un du département SALES.

-- 13. Lister le nom des employés et également le nom du jour de la semaine correspondant à leur date d'embauche.

-- 14. Donner, pour chaque employé, le nombre de mois qui s'est écoulé entre leur date d'embauche et la date actuelle.

-- 15. Afficher la liste des employés ayant un M et un A dans leur nom.

-- 16. Afficher la liste des employés ayant deux 'A' dans leur nom.

-- 17. Afficher les employés embauchés avant tous les employés du département 10.

-- 18. Sélectionner le métier où le salaire moyen est le plus faible.

-- 19. Sélectionner le département ayant le plus d'employés.

-- 20. Donner la répartition en pourcentage du nombre d'employés par département selon le modèle ci-dessous 
-- Département Répartition en % 
-- ----------- ---------------- 
-- 10           21.43 
-- 20           35.71 
-- 30           42.86 

