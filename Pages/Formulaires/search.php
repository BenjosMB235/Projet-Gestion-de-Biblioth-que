<?php
session_start();
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
        <a href="../vues/accueil.php" class="retour"><img src="../../Styles/images/accueil.png" alt="" >Accueil</a>
        <h3 class="titree">Rechercher un livre</h3>
    </header>
    <section class="formulaire">
        <p>Entrez les informations de votre livre :</p>
        <table>
            <form action="../../Traitements/search.php" method="POST">
                <tr>
                    <td><label for="titre">Titre du livre :</label></td>
                    <td><input type="text" id="titre" name="titre"></td>
                </tr>
                <tr>
                    <td><label for="auteur">Nom de l'auteur:</label></td>
                    <td><input type="text" id="auteur" name="auteur"></td>
                </tr>
                <tr>
                    <td colspan="2" class="td_submit">
                        <input type="submit" value="Rechercher" class="valide" name="validation">
                    </td>
                </tr>
            </form>
        </table>
    </section>
    <section class="affichage">
    <?php
    // Vérifier si des résultats existent dans la session
    if (isset($_SESSION['results']) && !empty($_SESSION['results'])) {
        $res = $_SESSION['results'];
        
        echo "<h3>Résultats de la recherche :</h3>";

        // Parcourir les résultats et les afficher
        foreach ($res as $row) {
            echo "<div class='result'>";
            echo "<strong>ID :</strong> " . htmlspecialchars($row['id_i']) . "<br>";
            echo "<strong>Titre :</strong> " . htmlspecialchars($row['titre_i']) . "<br>";
            echo "<strong>Auteur :</strong> " . htmlspecialchars($row['nom_a']) . "<br>";
            echo "<strong>Année :</strong> " . htmlspecialchars($row['annee_i']) . "<br>";
            echo "<strong>Type :</strong> " . htmlspecialchars($row['id_t']) . "<br>";
            echo "<strong>Résumé :</strong> " . htmlspecialchars($row['resume_i']) . "<br>";
            echo "<hr>";
            echo "</div>";
        }

        // Nettoyer la session après l'affichage des résultats pour éviter qu'ils ne persistent
        unset($_SESSION['results']);
    } else {
        // Afficher un message si aucun résultat n'est trouvé
        if (isset($_GET['msg1'])) {
            echo '<p style="color:red">' . htmlspecialchars($_GET['msg1']) . '</p>';
        }
    }

   /* if (isset($_SESSION['results'])) {
        $res=$_SESSION['results'];
        foreach($res as $row){
            echo "<strong>ID :</strong>" . $row['id_i'] . "<br>";
                echo "<strong>Titre : </strong>" . $row['titre_i'] . "<br>";
                echo "<strong>Auteur : </strong>" . $row['nom_a'] . "<br>";
                echo "<strong>Année :</strong>" . $row['annee_i'] . "<br>";
                echo "<strong>Type : </strong>" . $row['id_t'] . "<br>";
                echo "<strong>Le résumé : </strong>" . $row['resume_i'] . "<br>";
                echo "<br>";
                echo "<hr>";
                echo "<br>";
        }
        unset($_SESSION['results']);
    }
    if (isset($_GET['msg1'])) {
        # code...
        echo '<p style="color:red">'. $_GET['msg1'] .'</p>';
    } 
        
         if(mysqli_num_rows($res) > 0){
            while ($ligne = mysqli_fetch_assoc($res)){
                echo "<strong>ID :</strong>" . $ligne['id_i'] . "<br>";
                echo "<strong>Titre : </strong>" . $ligne['titre_i'] . "<br>";
                echo "<strong>Auteur : </strong>" . $ligne['nom_a'] . "<br>";
                echo "<strong>Année :</strong>" . $ligne['annee_i'] . "<br>";
                echo "<strong>Type : </strong>" . $ligne['id_t'] . "<br>";
                echo "<strong>Le résumé : </strong>" . $ligne['resume_i'] . "<br>";
                echo "<br>";
                echo "<hr>";
                echo "<br>";
            } 

        }*/
    ?>
    </section>
</body>
</html>