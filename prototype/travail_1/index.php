
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preference App</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            background-color: <?php echo htmlspecialchars($bgColor); ?>;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px 40px;
            width: 100%;
            max-width: 500px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            text-align: center;
        }

        h3 {
            font-size: 0.9rem;
            color: #555;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        form {
            display: grid;
            grid-gap: 1rem;
        }

        label {
            font-weight: 600;
        }

        input[type="text"],
        input[type="color"],
        select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
        }

        input[type="text"]:focus,
        input[type="color"]:focus,
        select:focus {
            outline: none;
            border-color: #0078d4;
            box-shadow: 0 0 0 2px rgba(0,120,212,0.2);
        }

        input[type="submit"] {
            width: 100%;
            padding: 0.75rem 1rem;
            background-color: #0078d4;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #005a9e;
        }

        a {
            display: inline-block;
            margin-top: 1rem;
            text-decoration: none;
            color: #0078d4;
            transition: color 0.2s;
        }

        a:hover {
            color: #005a9e;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>
            Bienvenue, oussama
        </h1>

        <h3>
            Derciére mise a jour : 22-01-2026 12:02:15        
    </h3>

        <form method="post">

            <label for="name">Nome :</label><br>
            <input type="text"  name="f_name"  id="name" required>

            <br><br>

            <label for="bg_color"></label><br>
            <input type="color" name="bg_color" value="">

            <br><br>

            <label>langue :</label>
            
            <br>

            <select name="choose">
                <option value="en">English</option>
                <option value="fr">Francais</option>
            </select>

            <br><br>

            <input type="submit" value="Enregistrer mes choix">

        </form>

        <br><hr>

        <a href="index.php?action=reset">
            Réinitialiiser tout
        </a>

    </div>

</body>
</html>