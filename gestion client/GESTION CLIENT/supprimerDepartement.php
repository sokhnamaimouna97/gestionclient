<?php
  require_once("Connexion.php");
  if(isset($_GET) && !empty($_GET["id"])){
     $ID= $_GET["id"];
     $db = new Connexion();
     $sql = "delete from DEPARTEMENT where ID=?";
     $resultat= $db->myQuery($sql,array($ID));
     if($resultat){
        echo "insertion reussie";
                  
     }
     else{
       echo "echec";
     }
      require_once("ajouterDepartement.php");
      //header("location:ajouterClient.php");
    }
              
    ?>