<?php
session_start();
class Connexion {
    private  $dbname = "DB_CLIENT";
    private  $hostDB = "localhost";
    private  $pwdBD = "root";
    private  $userDB = "root";

    private $pdo ;

    public  function  __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=" . $this->hostDB . "; dbname=" . $this->dbname, $this->userDB, $this->pwdBD);

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            die("Erreur survenue :" . $e->getMessage());
        }
    }
    public  function  myQuery($sql, $params= false)
    {
        try{
            if($params)
            {
                $req = $this->pdo->prepare($sql);
                $req->execute($params) ;
                return $req ;
            }else{
                return $this->pdo->query($sql);
            }
        }catch (PDOException $ex)

        {
            die("errors : " . $ex->getMessage()  . $ex->getLine());
        }
    }
    public  function  getLastInsert()
    {
        return $this->pdo->lastInsertId();
    }


}