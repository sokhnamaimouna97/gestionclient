<?php
  require_once("Connexion.php");
  if(isset($_GET) && !empty($_GET["idservice"])){
     $ID_S= $_GET["idservice"];
     $db = new Connexion();
     $sql = "delete from Fiche_Service where ID_S=?";
     $resultat= $db->myQuery($sql,array($ID_S));
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