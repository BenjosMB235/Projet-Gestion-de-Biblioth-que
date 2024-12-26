<?php

include '../Fonctions/config.php';

if(isset($_POST['validation']))
    {
        $titre = htmlspecialchars($_POST['titre']);
        $auteur = htmlspecialchars($_POST['auteur']);
    
        $req = "DELETE FROM livre WHERE titre_i='$titre' AND nom_a='$auteur'";
        $exe=mysqli_query($connexion, $req);
        $resultat=mysqli_num_rows($exe);
        
        if($exe){
            if($resultat>0){
                header('Location:../Pages/Formulaires/delete.php?msg=Votre livre a bien été supprimé');
            }else{
                header("Location:../Pages/Formulaires/delete.php?msg=Votre livre n'a pas  été trouvé");
            }
        }else{
            echo "Erreur de l'exécution de la requête. impossible de supprimer le livre ".$titre;
            header('refresh:3,../Pages/Formulaires/delete.php');
        }
    }
?>