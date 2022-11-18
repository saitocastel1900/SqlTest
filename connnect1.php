<?php
require_once "ReturnEscapeChars.php";
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
    //SQL文
    $sql="SELECT title, author From books1";
    //PDOのquery()でSQLを実行
    $statement=$dbh->query($sql);

    //fetchで１行１行取得
    while ($row =$statement->fetch())
    {
        echo "書籍名：". str($row[0])."<br>";
        echo "書籍名：". str($row[1])."<br><br>";
    }

}catch (PDOException $ex)
{
    //->でオブジェクトにアクセスできる
    echo "エラー！：". str($ex->getMessage());
    exit;
} finally {

}