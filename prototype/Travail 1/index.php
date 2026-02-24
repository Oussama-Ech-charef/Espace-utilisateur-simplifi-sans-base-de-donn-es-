
<?php 
    $name = "Guest";
    $color = "#ffffff";
    $language = "fr";



    $currentDate = date("d/m/Y H:i:s");


    if(isset($_COOKIE["name_cookie"])) {
        $name = $_COOKIE["name_cookie"];
    }

    if(isset($_COOKIE["color_cookie"])) {
        $color = $_COOKIE["color_cookie"];
    }

    if(isset($_COOKIE["lang_cookie"])) {
        $language = $_COOKIE["lang_cookie"];
    }

    if(isset($_COOKIE["date_cookie"])) {
        $currentDate = $_COOKIE["date_cookie"];
    }


switch ($language) {
    case "en":
            $welcome = "Welcome, ";
            $Date = "Last update is: ";
            $labelName = "Name";
            $labelLanguage = "Language";
            $btnSave = "Save your choices";
            $btnReset = "Reset all";
            $labelColor = "Background color";
    break;



    case "fr":
            $welcome = "Bienvenue, ";
            $Date = "Derniére mise a jour : ";
            $labelName = "Nom";
            $labelLanguage = "Langue";
            $btnSave = "Enregistrer mes choix";
            $btnReset = "Réinitialiiser tout";
            $labelColor = "Couleur de fond";
    break;
}



if($_SERVER["REQUEST_METHOD"] === "POST") {


        if(!empty($_POST["name"])) {
            $name = trim($_POST["name"]);
            setcookie("name_cookie", $name, time() + 3600 * 24 * 30);
        }

        if(!empty($_POST["color"])) {
            $color = $_POST["color"];
            setcookie("color_cookie", $color, time() + 3600 * 24 * 30);
        }

        if(!empty($_POST["lang"])) {
            $language = $_POST["lang"];
            setcookie("lang_cookie", $language, time() + 3600 * 24 * 30);
        }

        $saveTime = date("d/m/Y H:i:s");
        setcookie("date_cookie", $saveTime, time() + 3600 * 24 * 30);



        header("Location: index.php");
        exit();
}


if(isset($_GET["action"]) && $_GET["action"] === "reset") {



        setcookie("name_cookie", "", time() - 3600);
        setcookie("color_cookie", "", time() - 3600);
        setcookie("leng_cookie", "", time() - 3600);
        setcookie("date_cookie", "", time() - 3600);

    header("Location: index.php");
    exit();
}


?>




















<!DOCTYPE html>
<html lang="<?php  echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preference App</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: Arial, Helvetica, sans-serif;
    background: <?php echo $color; ?>;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}


.container {
    background: white;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    width: 450px;
    text-align: center;
}


.container h1 {
    margin-bottom: 10px;
    color: #333;
}

.container h3 {
    margin-bottom: 20px;
    color: #666;
    font-weight: normal;
}


label {
    display: block;
    margin-top: 15px;
    margin-bottom: 5px;
    text-align: left;
    color: #444;
    font-weight: bold;
}


input[type="text"],
select,
input[type="color"] {
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 14px;
}


input[type="color"] {
    height: 40px;
    cursor: pointer;
}

input[type="submit"] {
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    border: none;
    border-radius: 6px;
    background: #4facfe;
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

input[type="submit"]:hover {
    background: #00c6ff;
}

a {
    display: inline-block;
    margin-top: 15px;
    text-decoration: none;
    color: #4facfe;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

        
    </style>
</head>

<body>

    <div class="container">

        <h1>
             
        </h1>

        <h3>
            
    </h3>
    

        <form method="post">

            <label for="name"></label><br>
            <input type="text"  name="name"  id="name" required>

            

            <label for="color"></label><br>
            <input type="color" name="color" value="">

            

            <label></label>
            
            

            <select name="lang">
                <option value="en">English</option>
                <option value="fr">Francais</option>
            </select>

            

            <input type="submit" value="">

        </form>

        

        <a href="index.php?action=reset">
           
        </a>

    </div>

</body>
</html>