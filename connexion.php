<?php 
//$db = new PDO('mysql:host=localhost;dbname=produit_poo', 'root', '');
 ?>
 <?php 

 try{
            $db  = new PDO('mysql:host=localhost;dbname=projet_cours','root','');
        }catch(PDOException $e){
            echo 'Connexion impossible'.$e.getMessage();
        }

  ?>