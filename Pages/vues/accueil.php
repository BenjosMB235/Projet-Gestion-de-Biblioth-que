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

        <header>
            <img src="../../Styles/images/livre.png" alt="" class="livre">
            <p class="tete">LA BIBLIOTHEQUE</p>
            <div class="compte">
                <button type="submit"  onclick="logout()">
                    Déconnexion
                </button>
            </div>
            <a href="about.php">
                <div class="compte">
                    <img src="../../Styles/images/pro.png" alt=""  class="icn">
                </div>
            </a>
            <a href="#">
                <div class="compte">
                    <img src="../../Styles/images/parta.png" alt=""  class="icn">
                </div>
            </a>
            <!--a href="#">
                <div class="compte">
                    <img src="images/seting.png" alt="" class="icn">
                </div>
            </a-->
            <a href="inscris.php">
                <div class="compte">
                    <img src="../../Styles/images/icone.png" alt="" class="icn">
                </div>
            </a>
        </header>
        <section>
            <article>
                <a href="../Formulaires/search.php">
                    <div class="contenu">
                        <img src="../../Styles/images/loupe.png" alt="">
                        <p>Rechercher un livre</p>
                    </div>
                </a>
            </article>
        </section>
        <section>
            <article>
                <a href="see.php">
                    <div class="contenu">
                        <img src="../../Styles/images/voir.png" alt="">
                        <p>Voir tous les livres</p>
                    </div>
                </a>
            </article>
        </section>
        <section>
            <article>
                <a href="../Formulaires/add.php">
                    <div class="contenu">
                        <img src="../../Styles/images/ajout.png" alt="">
                        <p>Ajouter un nouveau livre</p>
                    </div>
                </a>
            </article>
        </section>
        <section>
            <article>
                <a href="../Formulaires/delete.php">
                    <div class="contenu">
                        <img src="../../Styles/images/delete.png" alt="">
                        <p>Supprimer un livre</p>
                    </div>
                </a>
            </article>
        </section>
    </body>
</html>