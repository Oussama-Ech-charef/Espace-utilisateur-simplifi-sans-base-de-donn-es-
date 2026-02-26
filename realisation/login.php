<?php 

    session_start();


    $users = [
        ["name" => "Oussama",
         "password" => "admin123",
         "role" => "administrateur",
         "active" => true
         ],
        ["name" => "Anass",
         "password" => "anass123",
         "role" => "formateur",
         "active" => true
         ],
        ["name" => "Hassan",
         "password" => "hassan123",
         "role" => "apprenant",
         "active" => false
         ],
        ["name" => "mohamed",
         "password" => "mohamed123",
         "role" => "apprenant",
         "active" => true
         ],

         
    ];


    $message = "";

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $login = $_POST["user_name"] ?? "";
        $pass = $_POST["password"] ?? "";
        $user_found = false;


        foreach ($users as $user) {

            if($user["name"] === $login){
                $user_found = true;

                if($user["password"] === $pass){
                    if ($user["active"]) {

                        $_SESSION["user"] = $user;

                        header("Location: profil.php");
                        exit();
                    }else {
                        $message = "Compte désactivé";
                    }

                } else {
                    $message = "Mot de passe incorrect.";
                }

                break;
            }
        }
        if(!$user_found) {
            $message = "Identifiants incorrects";
    }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="container">
        <h2>Authentification</h2>

        <?php if($message) echo "<p class='error-msg'>$message</p>" ?>

        <form action="login.php" method="POST">

            <label for="">Nom dutilisateur :</label>
            <input type="text" name="user_name" required>

            <label for="">Mot de passe :</label>
            <input type="password" name="password" required>


            <button type="submit">Se connecter</button>

            

        </form>
    </div>
    
</body>
</html>