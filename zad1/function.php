<?php
session_start();

function login($user_name, $user_password){
    if($user_name == "test" && $user_password == "test123"){
        $_SESSION['user_name'] = $user_name;
        return true;
    }
    return false;
}

function is_login(){
    if(isset($_SESSION['user_name'])){
        return true;
    }else{
        return false;
    }
}

function logout(){
    session_destroy();
}



function get_users(){
    $sql = "select * from users";
    $response = [];
    if ($result = $GLOBALS["mysqli"]->query($sql)) {
        while ($row = $result->fetch_assoc()){
            $response[] = $row;
        }
        mysqli_free_result($result);
    }
    return $response;
}

//function setUsers($user_name, $user_password, $place){
//    $sql = 'insert into users set user_name="$user_name", user_password="$user", place="$place"';
//    if ($result = $GLOBALS["mysqli"]->query($sql)) {
//        echo "dodano";
//    }
//    echo "nie dodano";
//}