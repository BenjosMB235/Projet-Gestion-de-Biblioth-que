<?php
/*
session_start();

include '../Fonctions/config.php';


if(isset($_POST['validation'])){
        $titre = htmlspecialchars($_POST['titre']);
        $auteur = htmlspecialchars($_POST['auteur']);
    
        $afficher = "SELECT * FROM livre WHERE titre_i = '$titre' AND nom_a = '$auteur'";
        $exe = mysqli_query($connexion, $afficher);
        echo $exe;
        die();
        $resultat=mysqli_num_rows($exe);
        if($resultat > 0){
            $data=array();
            while($row=mysqli_fetch_assoc($exe)){
                $data[]=$row;
            }
            $data=$_SESSION['results'];
            header('Location:../Pages/Formulaires/search.php');  
        }else {
                header('Location:../Pages/Formulaires/search.php?msg1=Aucun résultat trouvé');
                exit();
        }     
}else{
    echo "Erreur de l'exécution de la requête";
    header('refresh:3,../Pages/Formulaires/search.php');
    exit();
}
exit();
*/
//<?php
session_start();
include '../Fonctions/config.php';  // Assurez-vous que la connexion est bien établie dans ce fichier

if (isset($_POST['validation'])) {
    // Sécurisation des données entrées par l'utilisateur
    $titre = trim(htmlspecialchars($_POST['titre']));
    $auteur = trim(htmlspecialchars($_POST['auteur']));

    // Vérification que les champs ne sont pas vides
    if (!empty($titre) && !empty($auteur)) {
        // Utilisation de requêtes préparées pour éviter les injections SQL
        if ($stmt = mysqli_prepare($connexion, "SELECT * FROM livre WHERE titre_i = ? AND nom_a = ?")) {
            mysqli_stmt_bind_param($stmt, "ss", $titre, $auteur);  // "ss" pour deux chaînes de caractères
            mysqli_stmt_execute($stmt);
            $resultat = mysqli_stmt_get_result($stmt);

            // Vérification des résultats de la requête
            if (mysqli_num_rows($resultat) > 0) {
                $data = array();
                while ($row = mysqli_fetch_assoc($resultat)) {
                    $data[] = $row; // Stocker chaque ligne dans le tableau $data
                }
                // Stockage des résultats dans la session
                $_SESSION['results'] = $data;
                // Redirection vers la page de résultats
                header('Location: ../Pages/Formulaires/search.php');
                exit();  // Assurer que le script s'arrête après la redirection
            } else {
                // Si aucun résultat trouvé, redirection avec un message d'erreur
                header('Location: ../Pages/Formulaires/search.php?msg1=Aucun résultat trouvé');
                exit();
            }
        } else {
            // Si la requête préparée échoue
            echo "Erreur lors de la préparation de la requête";
            exit();
        }
    } else {
        // Si les champs sont vides, redirection avec un message d'erreur
        header('Location: ../Pages/Formulaires/search.php?msg1=Veuillez remplir tous les champs');
        exit();
    }
} else {
    // Si la requête POST n'a pas été soumise, redirection vers la page de recherche
    echo "Erreur de l'exécution de la requête";
    header('refresh:3;url=../Pages/Formulaires/search.php'); // Correction du header refresh
    exit();
}
?>

