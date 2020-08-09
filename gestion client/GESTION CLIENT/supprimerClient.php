<?php
   session_start();
    if(!(isset($_SESSION['PROFILE']))){
     header("location:login.php");
    }
?>
<?php
  require_once("Connexion.php");
  if(isset($_GET) && !empty($_GET["code"])){
     $CODE= $_GET["code"];
     $db = new Connexion();
     $sql = "delete from CLIENT where CODE=?";
     $resultat= $db->myQuery($sql,array($CODE));
     if($resultat){
        echo "insertion reussie";
                  
     }
     else{
       echo "echec";
     }
      require_once("ajouterClient.php");
      //header("location:ajouterClient.php");
    }
                
  ?>