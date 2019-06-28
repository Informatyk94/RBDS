<html>
<head>
    <meta charset="utf-8"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    <title>
        <?php
        $doc_title = "Tytuł strony z wprowadzenia do PHP";
        echo "$doc_title";
        ?>
    </title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 col-md-4"></div>
        <div class="col-6 col-md-4 form">
            <?php
            require_once ("database.php");

            $userQuery = $dbEarth->prepare('SELECT * FROM users');
            $userQuery->execute();
            $users = $userQuery->fetchAll();


            ?>
            <div class="score">
                <?php
                echo "Ilość użytkowników w bazie: " . sizeof($users);

                ?>
            </div>
            <?php
            ?>
            <div class="scoreTitle">Lista wszystkich użytkowników</div>
            <ol>
                <?php
                for($i = 0; $i < sizeof($users); $i++){
                    ?>
                    <li>
                        <?php
                        echo $users[$i]['user_name'];
                        echo " Lokalizacja: ";
                        echo $users[$i]['place'];
                        ?>
                    </li>
                    <?php
                }
                ?>
            </ol>
            <a href="/rbds/zad1/">Wróć do menu głównego</a>
            <div class="col-6 col-md-4"></div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>