<?php
    require_once ("function.php");
    $nameAdd = $_POST['user_name'];
    $passwordAdd = $_POST['user_password'];
    $placeAdd = $_POST['place'];

    if(!empty($_POST)){
        if(isset($_POST['user_name']) && isset($_POST['user_password']) && isset($_POST['place'])){
            setUsers($nameAdd, $passwordAdd, $placeAdd);
        }
    }
 ?>