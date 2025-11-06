<?php

class RestoRepository
{
    private PDO $connection;

    public function __construct()
    {       $this->connection=Dbconnect::getInstance();

        
    }

    public function searchById(int $_id)
    {
        $rq = "SELECT restaurant.nom,restaurant.adresse,restaurant.prix,restaurant.commentaire,restaurant.note,restaurant.visite FROM restaurant WHERE restaurant.id = :idResto";

        $stmt = $this->connection->prepare($rq);

        $stmt->bindValue(":idResto",$_id,PDO::PARAM_INT);

        $bool = $stmt->execute();

        if($bool == false)
        {
            return [];
        }
        else
        {
            return $stmt->fetch();
        }
        
    }


    //searchAll

    // updateUser
}