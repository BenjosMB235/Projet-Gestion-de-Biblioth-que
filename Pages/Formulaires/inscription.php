
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
            <form action="../../Traitements/inscription.php" method="POST">
                <img src="../../Styles/images/person.png" alt="">
                <input type="text" placeholder="User name" id="username" name="username" value="<?php if(isset($username)){ echo $username; } ?>">
                <img src="../../Styles/images/sms.png" alt="">
                <input type="mail" placeholder="Email" id="email" name="email" value="<?php if(isset($email)){ echo $email; } ?>">
                <img src="../../Styles/images/key.png" alt="">
                <input type="password" placeholder="Password" id="password" name="password">
                <img src="../../Styles/images/key.png" alt="">
                <input type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password">
                <img src="../../Styles/images/tel.png" alt="">
                <input type="text" placeholder="Phone Number" id="phone" name="phone" value="<?php if(isset($phonenumber)){ echo $phonenumber; } ?>">

                <input type="checkbox" id="agree" name="agree">

                <p class="agree">Accepter les termes et conditions</p>

                <input type="submit" value="S'INSCRIRE" name="validation">
            </form>
            <?php
                if (isset($_GET['erreur'])) {
                    # code...
                    echo '<p style="color:red">'. $_GET['erreur'] .'</p>';
                   }
            ?>
        </div>
    </div>
</body>
</html>