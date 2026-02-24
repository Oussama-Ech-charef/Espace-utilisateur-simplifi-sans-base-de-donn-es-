




















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