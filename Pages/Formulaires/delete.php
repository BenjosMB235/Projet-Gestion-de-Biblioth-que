
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
        <h3 class="titree">Supprimer un livre</h3>
    </header>
    <section class="formulaire">
        <p>Entrez les informations de votre livre :</p>
        <table>
            <form action="../../Traitements/delete.php" method="POST">
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
                        <input type="submit" value="Supprimer" class="valide" name="validation">
                    </td>
                </tr>
            </form>
        </table>
        </form>
    </section>
    <section class="affichage">
    <?php
        if (isset($_GET['msg'])) {
            # code...
            echo '<p style="color:red">'. $_GET['msg'] .'</p>';
           } 
        
    ?>
    </section>
</body>
</html>

