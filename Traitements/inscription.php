<?php


include '../Fonctions/config.php';


if(isset($_POST['validation']))
{
    $username=htmlspecialchars($_POST['username']);
    $email=htmlspecialchars($_POST['email']);
    $password=sha1($_POST['password']);
    $confirmpassword=sha1($_POST['confirm_password']);
    $phonenumber=htmlspecialchars($_POST['phone']);
    $agree=$_POST['agree'];

    

    if(!empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['confirm_password']) AND !empty($_POST['phone']) AND !empty($_POST['agree']))
    {
        $longusername=strlen($username);
        if($longusername<=255){
            /*$reqname=$connexion->prepare("SELECT * FROM gerant WHERE nom_g = ?");
            $reqname->execute(array($username));
            $nameexiste =$reqname->rowCount();*/
            $req="SELECT * FROM gerant WHERE nom_g = '$username'";
            $exe=mysqli_query($connexion, $req);
            $resultatname=mysqli_num_rows($exe);

            if($resultatname == 0){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                   /* $reqmail=$bdd->prepare("SELECT * FROM gerant WHERE email_g = ?");
                    $reqmail->execute(array($email));
                    $mailexiste =$reqmail->rowCount();*/
                    $req="SELECT * FROM gerant WHERE email_g = '$email'";
                    $exe=mysqli_query($connexion, $req);
                    $resultatmail=mysqli_num_rows($exe);

                    if($resultatmail == 0){
    
                        if($password == $confirmpassword){
                           /* $reqpassword=$bdd->prepare("SELECT * FROM gerant WHERE motdepass = ?");
                            $reqpassword->execute(array($password));
                            $mdpexiste =$reqpassword->rowCount();*/
                            $req="SELECT * FROM gerant WHERE motdepass = '$password'";
                            $exe=mysqli_query($connexion, $req);
                            $resultatpass=mysqli_num_rows($exe);

                            if($resultatpass == 0){
                                /* $insertgerant = $connexion->prepare("INSERT INTO gerant (nom_g, email_g, motdepass, tellephone) VALUES (:nom_g, :email_g, :motdepass, :tellephone)");
                                 $insertgerant->execute(array($username, $email, $password, $phonenumber));
                                 $insertgerant->bindParam(':nom_g', $username, PDO::PARAM_STR);
                                 $insertgerant->bindParam(':email_g', $email, PDO::PARAM_STR);
                                 $insertgerant->bindParam(':motdepass', $password, PDO::PARAM_STR);
                                 $insertgerant->bindParam(':tellephone', $phonenumber, PDO::PARAM_STR);*/

                                 $sql='INSERT INTO gerant (nom_g, email_g, motdepass, tellephone) VALUES ("'.$username.'","'.$email.'","'.$password.'","'.$phonenumber.'");';

                                 $exe = mysqli_query($connexion, $sql);
            
                                if($exe)
                                {
                                    header("Location: ../Pages/Formulaires/connexion.php?msg=Connectez-vous maintenant");
                                    exit();
                                }else{
                                    header("Location: ../Pages/Formulaires/inscription.php?erreur=Nous n'avons pas pu vous ajouter!");
                                }
                            }else{
                                header("Location: ../Pages/Formulaires/inscription.php?erreur=Ce mot de passe est déjà utilisé !");
                            }
                            
                        }else{
                            header("Location: ../Pages/Formulaires/inscription.php?erreur=Vos mots de passe ne correspondent pas !");
                        }
                    }else{
                        header("Location: ../Pages/Formulaires/inscription.php?erreur=L'adresse Email est déjà utilisée !");
                    }
               
               }else{
                header("Location: ../Pages/Formulaires/inscription.php?erreur=Votre Email n'est pas valide !");
               }
            }else{
                header("Location: ../Pages/Formulaires/inscription.php?erreur=Ce nom est déjà utlisé !");
            }
           
        }else{
            header("Location: ../Pages/Formulaires/inscription.php?erreur=Votre nom d'utilisateur est trop long!");
        }
    }
}
?>