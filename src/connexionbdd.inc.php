<?php
    session_start();
?>

<?php
    try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=user_inscription', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    
        $reponse = $bdd->query('SELECT mail, password FROM  user_mail limit 1');
    
        while($donnee = $reponse->fetch()){
            $donnee['mail'];
            $donnee['password'];
        
              echo "<p class=\"success\">Votre login est "." ".$donnee['mail'].
              "votre mot de passe est ".$donnee['password']."</p>";
        }
        $reponse->closeCursor();


?>