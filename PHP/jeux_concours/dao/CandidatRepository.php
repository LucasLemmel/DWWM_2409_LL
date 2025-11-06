<?php

namespace Dao;
//include " Dbconnect.php"; 
class CandidatRepository
{


    private ?\PDO $myConnect;
    //private array $namecols;

    public function __construct()
    {
        $this->myConnect = \Dbconnect::getInstance();
    }

    public function CreateCandidat(string $_lastname, string $_firstname, string $_mail, string $_pass, int $_dept, int $_age): bool
    {

        $hash = password_hash($_pass, PASSWORD_ARGON2ID);
        $rq = "INSERT  INTO candidats  VALUES (id_user,?,?,?,?,?,? )";

        $stmt = $this->myConnect->prepare($rq);


        $testOK = $stmt->execute([$_lastname, $_firstname, $_mail, $hash, $_dept, $_age]);


        return $testOK;
    }

    public function searchAll(): array
    {
        $rq = " SELECT candidats.id_user,candidats.lastname_user,candidats.firstname_user, candidats.mail_user,departements.Name,candidats.age_user FROM candidats INNER JOIN departements ON candidats.departement_user=departements.id_dep";

        $PDOstmt = $this->myConnect->prepare($rq);

        $testOK = $PDOstmt->execute();
        
        if ($testOK == true)
        {
            return $PDOstmt->fetchAll();
        }
        else
        {
            return [];
        }
    }

    public function getFieldName():array
    {
        $rq = "SELECT * FROM candidats";
        $PDOstmt = $this->myConnect->prepare($rq);
        $PDOstmt->execute();
        $nbColonne = $PDOstmt->columnCount();
        $tabNomColonne = [];
        for ($i=1; $i < $nbColonne; $i++)
        { 
            $tabInfo = $PDOstmt->getColumnMeta($i);
            array_push($tabNomColonne,$tabInfo["name"]);
        }
        return $tabNomColonne;
    }

    public function searchById(int $_id):array
    {
        $rq = "SELECT candidats.lastname_user,candidats.firstname_user, candidats.mail_user,departements.Name,candidats.age_user FROM candidats 
        INNER JOIN departements on candidats.departement_user = departements.id_dep WHERE candidats.id_user = ? ";

        $PDOstmt = $this->myConnect->prepare($rq);

        $testOK = $PDOstmt->execute([$_id]);

        if ($testOK == true)
        {
            return $PDOstmt->fetch();
        }
        else 
        {
            return [];
        }
    }


    public function searchByAge(int $_age): array
    {
        $rq = "SELECT candidats.lastname_user,candidats.firstname_user, candidats.mail_user,departements.Name,candidats.age_user FROM candidats inner join departements ON candidats.departement_user=departements.id_dep WHERE candidats.age_user=:age";

        $stmt = $this->myConnect->prepare($rq);
        $stmt->bindParam(":age", $_age, \PDO::PARAM_INT);

        $stmt->execute();
        //$nbligne = $stmt->rowCount();
        return $stmt->fetchAll();
    }

    //Update


    //Delete 

    // function authentification 

    public function signIn(string $_mail_user, string $_pass_user): array
    {

        $rq = " SELECT candidats.id_user, candidats.lastname_user,candidats.firstname_user, candidats.mail_user,candidats.departement_user ,candidats.pass_user, candidats.age_user  FROM candidats WHERE mail_user = ? ";

        $stmt = $this->myConnect->prepare($rq);

        $stmt->execute([$_mail_user]);

        $result = $stmt->fetch();
        var_dump($result);
        $nbligne = $stmt->rowCount();
        echo "nbligne :".$nbligne;
        if ($nbligne > 0 && password_verify($_pass_user, $result["pass_user"]))
        {
           
         $data=   [
                "id_candidat"=> $result["id_user"],
                "nom" => $result["lastname_user"],
                "prenom" => $result["firstname_user"],
                "age" => $result["age_user"]
            ];
            return $data;
        }
        return [];
    }

    public function updateCandidat(string $_lastname, string $_firstname, string $_mail, int $_dept, int $_age, int $_id): int
    {


        $rq = "UPDATE candidats SET lastname_user=? , firstname_user=?, mail_user=?, departement_user=? , age_user=? WHERE id_user=?";

        $PDOstmt = $this->myConnect->prepare($rq);


        $test = $PDOstmt->execute([$_lastname, $_firstname, $_mail, $_dept, $_age, $_id]);
        if ($test == false)
        {
            return 0;
        }
        else
        {
            return $PDOstmt->rowCount();
        }
    }


    public function deleteCandidat(int $_id_user): int
    {

        $rq = "DELETE FROM candidats WHERE id_user=:id_user";
        $PDOstmt = $this->myConnect->prepare($rq);
        // $PDOstmt->bindParam(":id_user",$_id_user, PDO::PARAM_INT);
        $test = $PDOstmt->execute([":id_user" => $_id_user]);
        if ($test == false)
        {
            return 0;
        }
        else
        {
            return $PDOstmt->rowCount();
        }
    }
}