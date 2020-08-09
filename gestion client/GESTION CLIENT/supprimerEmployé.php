<?php
  require_once("Connexion.php");
  if(isset($_GET) && !empty($_GET["idemploye"])){
     $ID_E= $_GET["idemploye"];

     $db = new Connexion();
     $sql = "delete from EMPLOYÉ where ID_E=?";
     $resultat= $db->myQuery($sql,array($ID_E));
     if($resultat){
        echo "insertion reussie";
                  
     }
     else{
       echo "echec";
     }
      require_once("ajouterEmployé.php");
      //header("location:ajouterEmployé.php");
    }
    
                
             
           ?>