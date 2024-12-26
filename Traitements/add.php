<?php

include '../Fonctions/config.php';

if(isset($_POST['validation']))
{
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $annee = $_POST['annee'];
    $type = $_POST['type'];
    $resume = $_POST['resume'];

    if(!empty($_POST['titre']) AND !empty($_POST['auteur']) AND !empty($_POST['annee']) AND !empty($_POST['type']) AND !empty($_POST['resume']))
    {
        $req="INSERT INTO livre (titre_i, annee_i, resume_i, id_t, nom_a) VALUES ('$titre', $annee, '$resume', '$type', '$auteur')";
        $exe=mysqli_query($connexion, $req);
       
        if($exe)
        {
            header('Location:../Pages/Formulaires/add.php?msg=Votre livre a bien été ajouté');
        }else{
             header('Location:../Pages/Formulaires/add.php?msg=Impossible de sauvegarder votre livre');
        }
    }else{
            header('Location:../Pages/Formulaires/add.php?msg=Vous devez fournir toutes les informations');
    }
}

// $resultat=mysqli_num_rows($exe);

        /*$insertlivre->execute(array($titre, $annee, $resume, $type));*
        $insertlivre->bindParam(':titre_i', $titre, PDO::PARAM_STR);
        $insertlivre->bindParam(':nom_a', $auteur, PDO::PARAM_STR);
        $insertlivre->bindParam(':annee_i', $annee, PDO::PARAM_INT);
        $insertlivre->bindParam(':resume_i', $resume, PDO::PARAM_STR);
        $insertlivre->bindParam(':id_t', $type, PDO::PARAM_STR);*/

?>
