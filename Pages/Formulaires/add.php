
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
        <h3 class="titree">Ajouter un livre</h3>
    </header>
    <section class="formulaire">
        <p>Entrez les informations de votre livre :</p>
        <table>
            <form action="../../Traitements/add.php" method="POST">
                <!--tr>
                    <td><label for="identifiant">Identifiant du livre :</label></td>
                    <td><input type="number" id="identifiant" name="identifiant"></td>
                </tr!-->
                <tr>
                    <td><label for="titre">Titre du livre :</label></td>
                    <td><input type="text" id="titre" name="titre"></td>
                </tr>
                <tr>
                    <td><label for="auteur">Nom de l'auteur :</label></td>
                    <td><input type="text" id="auteur" name="auteur"></td>
                </tr>
                <tr>
                    <td><label for="annee">Année de parution:</label></td>
                    <td><input type="date" id="annee" name="annee"></td>
                </tr>
                <tr>
                    <td><label for="type">Type du livre :</label></td>
                    <td>
                        <!--input type="text" id="type" name="type"!-->
                        <select multiple id="type" name="type">
                            <option>Roman</option>
                            <option>Poésie</option>
                            <option>Nouvelle</option>
                            <option>Pièce</option>
                            <option>Essai</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="resume">Resumé du livre :</label></td>
                    <td><textarea placeholder="Saisissez ici..." name="resume" id="resume" cols="53" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" class="td_submit">
                        <input type="submit" value="Ajouter" class="valide" name="validation"><br>
                        <?php
                            if (isset($_GET['msg'])) {
                                # code...
                                echo '<p style="color:red">'. $_GET['msg'] .'</p>';
                               } 
                    
                        ?>
                    </td>
                </tr>
            </form>
        </table>
    </section>
    <div>
         
    </div>
</body>
</html>