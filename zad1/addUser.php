<?php
    require_once ("function.php");
    require_once ("database.php");
    $nameAdd = $_POST['user_name'];
    $passwordAdd = $_POST['user_password'];
    $placeAdd = $_POST['place'];

    if($placeAdd == 2){
        $placeAdd2 = "mars";
    }elseif($placeAdd == 3){
        $placeAdd2 = "moon";
    }elseif($placeAdd == 1){
        $placeAdd2 = "earth";
    }

    if(!empty($_POST)){
        if(isset($_POST['user_name']) && isset($_POST['user_password']) && isset($_POST['place'])){
            $queryAdmin = $dbAdmin->prepare('INSERT INTO users VALUE (NULL, :user_name, :user_password,:place)');
            $queryAdmin->bindValue(':user_name', $nameAdd, PDO::PARAM_STR);
            $queryAdmin->bindValue(':user_password', $passwordAdd, PDO::PARAM_STR);
            $queryAdmin->bindValue(':place', $placeAdd2, PDO::PARAM_STR);
            $queryAdmin->execute();
            if($placeAdd == 2){
                $querymarsDB = $dbMars->prepare('INSERT INTO users VALUE (NULL, :user_name, :user_password,:place)');
                $querymarsDB->bindValue(':user_name', $nameAdd, PDO::PARAM_STR);
                $querymarsDB->bindValue(':user_password', $passwordAdd, PDO::PARAM_STR);
                $querymarsDB->bindValue(':place', $placeAdd2, PDO::PARAM_STR);
                $querymarsDB->execute();
            }elseif($placeAdd == 3){
                $querymoonDB = $dbMoon->prepare('INSERT INTO users VALUE (NULL, :user_name, :user_password,:place)');
                $querymoonDB->bindValue(':user_name', $nameAdd, PDO::PARAM_STR);
                $querymoonDB->bindValue(':user_password', $passwordAdd, PDO::PARAM_STR);
                $querymoonDB->bindValue(':place', $placeAdd2, PDO::PARAM_STR);
                $querymoonDB->execute();
            }elseif($placeAdd == 1){
                $queryearthDB = $dbEarth->prepare('INSERT INTO users VALUE (NULL, :user_name, :user_password,:place)');
                $queryearthDB->bindValue(':user_name', $nameAdd, PDO::PARAM_STR);
                $queryearthDB->bindValue(':user_password', $passwordAdd, PDO::PARAM_STR);
                $queryearthDB->bindValue(':place', $placeAdd2, PDO::PARAM_STR);
                $queryearthDB->execute();
            }
            header('Location: admin.php');
//            setUsers($nameAdd, $passwordAdd, $placeAdd);
        }
    }else{
        header('Location: index.php');
        exit();
    }
 ?>