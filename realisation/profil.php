<?php  



session_start();



if(!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}


$user = $_SESSION["user"];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Personnel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Espace <?php echo ucfirst($user["role"]);   ?> </h2>

        <p>Bienvenue <strong><?php echo ucfirst($user["name"]); ?></strong> !</p>
        <p>Votre role est : <?php echo $user["role"]; ?></p>


        <form action="deconnexion.php" method="POST">
            <button type="submit" class="logout-btn">Se déconnecter</button>

        </form>
    </div>


    
</body>
</html>