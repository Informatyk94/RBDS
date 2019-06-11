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
        <div class="col-6 col-md-4">
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
                                </form></div>


                    <?
                    $mysqli = new mysqli("58897.m.tld.pl", "admin58897_baza_1", "0Xh5WLd259", "baza58897_baza_1");
                    if(mysqli_connect_errno()){
                        prontf("Connect dailed: %s\n", mysqli_connect_error());
                    }

                    $users = get_users();

                    echo "Ilość użytkowników w bazie: " . sizeof($users);

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
                        <form class="form-signin form" action="admin.php" method="post">
                            <img class="mb-4 image" src="style/image/admin.png" alt="" width="72" height="72">
                            <h1 class="h3 mb-3 font-weight-normal login">Zaloguj się</h1>
                            <label for="inputEmail" class="sr-only">Login</label>
                            <input type="text" id="inputEmail" name="user_name"  class="form-control" placeholder="Email address" required="" autofocus="">
                            <label for="inputPassword" class="sr-only">Hasło</label>
                            <input type="password" id="inputPassword" name="user_password" class="form-control" placeholder="Password" required="">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </form>
                    <?
                }?>
        <div class="col-6 col-md-4"></div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>