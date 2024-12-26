<?php
session_start();

include '../Fonctions/config.php';


if(isset($_POST['validation']))
{
    $username=htmlspecialchars($_POST['username']);
    $password=sha1($_POST['password']);

    if(!empty($_POST['username']) AND !empty($_POST['password'])){

        $req="SELECT * FROM gerant WHERE nom_g = '$username' AND motdepass = '$password'";
        $exe=mysqli_query($connexion, $req);
        $resultat=mysqli_num_rows($exe);

       
        if($resultat > 0){
            $userinfo = mysqli_fetch_assoc($resultat);
            $_SESSION['username'] = $userinfo['username'];
            $_SESSION['email'] = $userinfo['email'];
            $_SESSION['password'] = $userinfo['password'];
            $_SESSION['phone'] = $userinfo['phone'];
            header("Location: ../Pages/vues/accueil.php?username=".$_SESSION['username']);
            exit();
        }else{
            header('Location: ../Pages/Formulaires/connexion.php?erreur=Vos informations ne sont pas correct !');
        }
    }
}

?>