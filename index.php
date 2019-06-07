<html>
<head>
    <meta charset="utf-8"/>
    <title>
        <?php
        $doc_title = "Tytuł strony z wprowadzenia do PHP";
        echo "$doc_title";
        ?>
    </title>
</head>
<body>
<?php

    $metoda_przesylania_danych = $_SERVER['REQUEST_METHOD'];
    if($metoda_przesylania_danych == "GET"){
        ?>
        <form action="index.php" method="post">
            Nazwa: <input type="text" name="user_name"><br>
            Haslo: <input type="text" name="user_password"><br>
            <input type="submit">
        </form>
        <?php
        }
        else if($metoda_przesylania_danych == "POST"){
            echo "Nazwa: $_POST[user_name]<br>";
            echo "Haslo: $_POST[user_password]";
        }
        ?>
</body>
</html>