<?php

try {
    $user = "phpuser";
    $password = "saito1011";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];

//PDO出の接続
    $dbh = new PDO("mysql:host=localhost;dbname=sample_db", $user, $password, $opt);
    var_dump($dbh);
}catch (PDOException $ex)
{
    //->でオブジェクトにアクセスできる
    echo "エラー！：". $ex->getMessage();
    exit;
} finally {

}