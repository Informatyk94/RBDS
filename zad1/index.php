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
    require_once ("function.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST)){
            if(isset($_POST['user_name']) && isset($_POST['user_password'])){
                if(login($_POST['user_name'], $_POST['user_password'])){
                    echo "Logowanie pomyślne";
                }else{
                    echo "logowanie niepomyślne";
                }
            }
        }
    }
    if(is_login()){
        ?>
        <form action="logout.php" method="get">
            <button type="submit">Wyloguj</button>
        </form>
        <?
        $users = get_users();
        for($i = 0; $i < sizeof($users); $i++){
            ?>
                <tr>
                    <td>
                        <? echo users[$i]['user_name']; ?>
                    </td>
                </tr>
            <?
        }
    }else{
        ?>
            <h1>Zaloguj się</h1>
            <form action="index.php" method="post">
                Nazwa: <input type="text" name="user_name"><br>
                Haslo: <input type="text" name="user_password"><br>
                <input type="submit">
            </form>
        <?
    }?>
</body>
</html>