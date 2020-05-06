<?php
    echo "<select name='livre'>";
    
    if(isset($_POST["idFilm"])){
        try
        {
          $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
          }
        catch(Exception $e)
        {
            die('Erreur:'.$e->getMessage());
          }            
  
         $reponse=$bdd->query('SELECT horaire FROM testhoraire Where film ='.$_POST["idFilm"].' ');
         $donne=$reponse->fetchall();
    
      
       foreach ($donne as $value) 
       {
        echo "<option value='".$value["id"]."'>".$value["horaire"]."</option>";
        }   


    }
    echo "</select>";
?>