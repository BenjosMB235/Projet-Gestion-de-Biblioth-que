
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <link rel="stylesheet" href="../../Styles/css/style.css">
</head>
<body>
    <div class="container">
        <div class="icon">
            <img src="../../Styles/images/livre.png" alt="">
            <p>
                LA BIBLIOTHEQUE
            </p>
        </div>
        <div class="forms">
            <form action="../../Traitements/connexion.php" method="POST">
                <img src="../../Styles/images/person.png" alt="">
                <input type="text" placeholder="User name" id="username" name="username">
                <img src="../../Styles/images/key.png" alt="">
                <input type="password" placeholder="Password" id="password" name="password">

                <input type="submit" value="CONNECTER" name="validation">
            </form>
            <?php
                if (isset($_GET['erreur'])) {
                    # code...
                    echo '<p style="color:red">'. $_GET['erreur'] .'</p>';
                   }
                   if (isset($_GET['msg'])) {
                    # code...
                    echo '<p style="color:green">'. $_GET['msg'] .'</p>';
                   }
                    
            ?>
        </div>
       
        
    </div>
</body>
</html>