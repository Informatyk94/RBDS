<?php
    require_once ("function.php");
    echo "dodanie do bazy";
    echo $_POST['user_name'];
    echo $_POST['user_password'];
    echo $_POST['place'];

    if(!empty($_POST)){
        if(isset($_POST['user_name']) && isset($_POST['user_password']) && isset($_POST['place'])){
          
        }
    }
// ?>