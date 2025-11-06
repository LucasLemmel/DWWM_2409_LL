<?php

class Dbconnect
{
    
    private static ?PDO $connection = null;
    private static string $host;
    private static string $user;
    private static string $pass;
    private static string $base;

   private static array $tab; 

    private function __construct()
    {
       
        
    }

  
    public static function recupConfig():void
    {  
      self::$tab= require_once __DIR__."/config.php";// $tabConfig sera le tableau retourné
   //    var_dump($tabConfig);

    // Affiche le tableau pour debug

    }
    public static function getInstance(): PDO
    {
           // self::recupConfig();
        //  var_dump(self::$tab);
        self::$host ='localhost';
        self::$user ='lucas';
        self::$pass = 'Lemmel67';
        self::$base ="guide";

        if (self::$connection == null)
        {
            try
            {

                self::$connection = new PDO("mysql:host=" . self::$host . ";port=3306; dbname=" . self::$base . ";charset=utf8", self::$user, self::$pass, array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_CASE => PDO::CASE_LOWER,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ));
            }
            catch (\Exception $e)
            {
                die("Database connection failed" . $e->getMessage());
            }
        }
        return self::$connection;
    }
}