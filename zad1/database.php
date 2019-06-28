<?php
$config = require_once 'config.php';

try{
   $dbAdmin = new PDO("mysql:host={$config['adminDB']['host']};dbname={$config['adminDB']['database']}; charset=utf8",
       $config['adminDB']['username'], $config['adminDB']['password'],[
           PDO::ATTR_EMULATE_PREPARES => false,
           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
       ]);

}catch (PDOException $error){
    echo $error->getMessage();
    exit('Database error');
}


try{
    $dbMars = new PDO("mysql:host={$config['marsDB']['host']};dbname={$config['marsDB']['database']}; charset=utf8",
        $config['marsDB']['username'], $config['marsDB']['password'],[
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

}catch (PDOException $error){
    echo $error->getMessage();
    exit('Database error 2');
}

try{
    $dbMoon = new PDO("mysql:host={$config['moonDB']['host']};dbname={$config['moonDB']['database']}; charset=utf8",
        $config['moonDB']['username'], $config['moonDB']['password'],[
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
}catch (PDOException $error){
    echo $error->getMessage();
    exit('Database error 3');
}

try{
    $dbEarth = new PDO("mysql:host={$config['earthDB']['host']};dbname={$config['earthDB']['database']}; charset=utf8",
        $config['earthDB']['username'], $config['earthDB']['password'],[
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
}catch (PDOException $error){
    echo $error->getMessage();
    exit('Database error 4');
}