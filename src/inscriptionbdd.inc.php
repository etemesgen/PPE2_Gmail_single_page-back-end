<?php
    try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=user_inscription', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['mail']) || isset($_POST['password'])){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["mail"];

        $req = $bdd->prepare('INSERT INTO user_mail(nom, prenom, mail, password)VALUES(?,?,?,?)');
        $req->execute(array('nom' => $_POST['nom'],'prenom' => $_POST['prenom'],'mail' => $_POST['mail'], password_hash($_POST['password'],PASSWORD_DEFAULT)));
        
        echo "<p class=\"success\">Merci votre contenu est ajouté : 
                <a href=\"connexion.php\" title=\"pub\">Connectez vous</a>        
        </p>";
    }		
?>