<?php
try{
    header("Content-Type:text/html; charset=utf-8");
    define('DB_Server', 'localhost');       //資料庫主機
    define('DB_User', 'root');              //資料庫使用者
    define('DB_Password', 'root');              //資料庫使用者密碼
    define('DB_Database', 'stocktry');       //資料庫名稱
    //資料庫連接
    $mysqli =new mysqli(DB_Server, DB_User, DB_User, DB_Database);
    /* 檢查是否連接失敗 */
    if ($mysqli->connect_error) {
        die('無法連上資料庫 (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
}
catch(Exception $a){
    echo $a;
}


