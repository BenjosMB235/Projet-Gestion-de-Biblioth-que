<?php

include '../../Fonctions/config.php';

if(!$connexion){
    die("La connexion à la base de données a échoué : " .mysqli_connect_error());
}

$afficher = "SELECT * FROM livre";
$resultat = mysqli_query($connexion, $afficher);
 
if(!$resultat){
    die("La requete a échoué : " . mysqli_error($connexion));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <link rel="stylesheet" href="../../Styles/css/bdd.css">
</head>
<body>
    <header class="entete">
        <a href="accueil.php" class="retour"><img src="../../Styles/images/accueil.png" alt="" >Accueil</a>
        <h3 class="titree">Tous vos Livres</h3>
    </header>
    <section class="affichage">
    <?php
        $message='<p class="smsinscris">Voici les informations sur tous les livres disponible :</p>';
        echo $message;
        while ($ligne = mysqli_fetch_assoc($resultat)){
            echo '<table class="affichetab">';
            echo '<tr> <td class="affichgauche"><strong>ID :</strong></td><td class="affichdroite">' . $ligne['id_i'] . '</td></tr>';
            echo '<tr> <td class="affichgauche"><strong>Titre : </strong></td><td class="affichdroite">' . $ligne['titre_i'] . '</td></tr>';
            echo '<tr> <td class="affichgauche"><strong>Auteur : </strong></td><td class="affichdroite">' . $ligne['nom_a'] . '</td></tr>';
            echo '<tr> <td class="affichgauche"><strong>Année :</strong></td><td class="affichdroite">' . $ligne['annee_i'] . '</td></tr>';
            echo '<tr> <td class="affichgauche"><strong>Type : </strong></td><td class="affichdroite">' . $ligne['id_t'] . '</td></tr>';
            echo '<tr> <td class="affichgauche"><strong>Le résumé : </strong></td><td class="affichdroite">' . $ligne['resume_i'] . '</td></tr>';
            echo '</table>';
            echo "<br>";
            echo "<hr>";
            echo "<br>";
        }
       
    ?>
    </section>
    
</body>
</html>