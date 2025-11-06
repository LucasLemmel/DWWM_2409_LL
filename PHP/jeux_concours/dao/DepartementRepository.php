<?php

namespace Dao;
class DepartementRepository
{
    private ?\PDO $myConnect;
    
    public function __construct()
    {
        $this->myConnect = \Dbconnect::getInstance();
    }

    public function searchAll():array
    {
        $rq = "SELECT id_dep, Name as name_dep FROM departements WHERE dep_actif = 1";
        
        $stmt = $this->myConnect->prepare($rq);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}