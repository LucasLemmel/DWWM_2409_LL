**1. Donner nom, job, numéro et salaire de tous les employés,**

```
db.emp.find({},{_id:1,ename:1,job:1,sal:1})
```

**puis seulement des employés du département 10**

```
db.emp.find({deptno:10},{_id:1,ename:1,job:1,sal:1})
```

**2. Donner nom, job et salaire des employés de type MANAGER dont le salaire est supérieur à 2800**

```
db.emp.find({job:{$eq:"MANAGER"},sal:{$gt:2800}},{_id:0,ename:1,job:1,sal:1})
```

**3. Donner la liste des MANAGER n'appartenant pas au département 30**

```
db.emp.find({job:"MANAGER",deptno:{$ne:30}})
```

**4. Liste des employés de salaire compris entre 1200 et 1400**

```
db.emp.find({sal:{$gte:1200,$lte:1400}})
```

**5. Liste des employés des départements 10 et 30 classés dans l'ordre alphabétique**

```
db.emp.find({$or:[{deptno:10},{deptno:30}]},{_id:1,ename:1,job:1,sal:1,deptno:1}).sort({ename:1})
```

**6. Liste des employés du département 30 classés dans l'ordre des salaires croissants**

```
db.emp.find({deptno:30},{_id:1,ename:1,job:1,sal:1,deptno:1}).sort({sal:1})
```

**7. Liste de tous les employés classés par emploi et salaires décroissants**

```
db.emp.find({},{_id:1,ename:1,job:1,sal:1,deptno:1}).sort({job:1,sal:-1})
```

**8. Liste des différents emplois**

```
db.emp.distinct("job")
```

**9. Donner le nom du département où travaille ALLEN**

```
db.emp.find({ename:'ALLEN'},{ename:1,dname:1})
```

**10. Liste des employés avec nom du département, nom, job, salaire classés par noms de départements et par salaires décroissants.**

```
db.emp.find({},{_id:0,dname:1,ename:1,job:1,sal:1}).sort({dname:1,sal:-1})
```

**11. Liste des employés vendeurs (SALESMAN) avec affichage de nom, salaire, commissions, salaire + commissions**

```
db.emp.find({job:'SALESMAN'},{_id:0,ename:1,sal:1,comm:1,totalSal:{$add:['$sal','$comm']}})
```

**12. Donner le salaire le plus élevé par département**

```
db.emp.aggregate([{ $group: {_id:"$dname",maxSalary:{$max:"$sal"}}}])
```

**13. Donner département par département masse salariale, nombre d'employés, salaire moyen par type d'emploi.**

```
db.emp.aggregate([
{$group: {

_id: {Départment: "$dname", Job: "$job"},

"Salaries":{$sum: "$sal"},

"Commissions": {$sum: "$comm"},

"Nombre d'employés": {$sum:1},

"SALM": {$avg: "$sal"},

}},

{$project:{

_id:0,

"Informations service": "$_id",

"Masse salariale": {$add: ["$Salaires", "$Commissions"]},

"Nombre d'employés":1,

"Salaire moyen": {$round: ["$SALM", 2]}

}}

])
```
