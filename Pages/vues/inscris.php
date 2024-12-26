<?php
session_start();

include '../../Fonctions/config.php';

if(isset($_SESSION['username']))
{
    header('Location:../Formulaires/connexion.php');
    exit();
   /* $getuser=intval($_GET['username']);
    $requser = $bdd->prepare('SELECT * FROM gerant WHERE nom_g = ?');
    $requser->execute(array($getuser));
    $userinfo = $requser->fetch();*/
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <link rel="stylesheet" href="../../Styles/css/bdd.css">
    <script>
        function logout(){
            //Supprime les informations de l'utilisateur
            localStorage.removeItem("username");
            localStorage.removeItem("password");

            //Redirige vers la page de connexion
            window.location.href="../../index.php";
        }
    </script>
</head>
<body>
    <header class="entete">
        <a href="accueil.php" class="retour"><img src="../../Styles/images/accueil.png" alt="" >Accueil</a>
        <h3 class="titree">Votre Profile</h3>
    </header>
    <section class="affichage">
        <p class="smsinscris">
            Vos informations personnelles
        </p>
        <table class="tableinscris">
                <tr>
                    <td class="titreInfo">Votre Username :</td>
                    <td class="info"><?php echo $_SESSION['username']; ?></td>
                </tr>
                <tr>
                    <td class="titreInfo">Votre Email :</td>
                    <td class="info"><?php echo $_SESSION['email']; ?></td>
                </tr>
                <tr>
                    <td class="titreInfo">Votre mot de passe :</td>
                    <td class="info"><?php echo $_SESSION['password']; ?></td>
                </tr>
                <tr>
                    <td class="titreInfo">Votre numéro de téléphone :</td>
                    <td class="info"><?php echo $_SESSION['phone']; ?></td>
                </tr>
        </table>
        <p class="smsinscris">
            Vos informations sont privées et ne sont vus que par vous.
        </p>
        <button type="submit" class="btn btn-danger" onclick="logout()">
                Déconnexion
        </button>
    
    </section>
    
</body>
</html>