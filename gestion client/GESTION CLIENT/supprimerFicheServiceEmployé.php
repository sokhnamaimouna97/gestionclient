<?php
  require_once("Connexion.php");
  if(isset($_GET) && !empty($_GET["idservice"])){
     $ID= $_GET["id"];
     $db = new Connexion();
     $sql = "delete from FICHE_SERVICE_EMPLOYE where ID=?";
     $resultat= $db->myQuery($sql,array($ID));
     if($resultat){
        echo "suppresion reussie";
                  
     }
     else{
       echo "echec";
     }
      require_once("ajouterFicheService.php");
      //header("location:ajouterClient.php");
    }
                
  ?>