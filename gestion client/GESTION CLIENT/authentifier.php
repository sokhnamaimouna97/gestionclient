<?php

      
          require_once("Connexion.php");
              if(isset($_POST) && !empty($_POST["username"]) && !empty($_POST["pass"])){
                $LOGIN= $_POST["username"];
                $PASSWORD=$_POST["pass"];
                $db = new Connexion();
                $sql = "select * from USERS u join EMPLOYÉ e on ( u.ID_EMPLOYE = e.ID_E )  where LOGIN=? and PASSWORD=?";
                $resultat= $db->myQuery($sql,array($LOGIN,$PASSWORD))->fetch();
                if($resultat){
                  $_SESSION['PROFILE']=$resultat->ROLE;
                  if($resultat->ROLE=="ADMIN" or $resultat->ROLE=="CHEFDEPARTEMENT" or $resultat->ROLE=="DG"){
                    header("location:ajouterClient.php"); 
                  }
                 
                   if($resultat->ROLE=="EMPLOYE"){
                    header("location:ajouterFicheService.php");  
                  }
                  if($resultat->ROLE=="CHEFDEPARTEMENT"){
                    header("location:ajouterEmploye.php");
                  }
                  
                }
                else{
                  die;
                  header("location:login.php"); 
                  }
                }

                
             
           ?>