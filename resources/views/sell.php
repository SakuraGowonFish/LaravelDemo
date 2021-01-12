<?php session_start();

/*  引入  */
require_once "linkSql.php";

global $mysqli;
// foreach ($_POST as $var_name => $var_val) {
//     $$var_name = $mysqli->real_escape_string($var_val);
// }

// 賣出
// print_r($_POST["fuck2"]) ;
if (count($_POST["fuck2"]) == 0) {
    echo "false";
} else {
    print_r($_POST["fuck2"][0]) ;

    // fuck2= ["0054", "元大台商50", "1", "29.78"]
    // 取得     id        name       much   money
    $sql2="DELETE FROM `stock` WHERE `stockNumber`='{$_POST["fuck2"][0]}' AND `stockName` ='{$_POST["fuck2"][1]}' AND `stockMuch`='{$_POST["fuck2"][2]}'";
    
    $result = $mysqli->query($sql2) ;
    // 本金+= much * money

    $_SESSION['money'] += (int)((float)$_POST["fuck2"][2] * (float)$_POST["fuck2"][3]);

    // 更改金錢

    $change_money2 = "UPDATE `user` SET `principal` = '{$_SESSION["money"]}' WHERE `user`.`id` = '{$_SESSION["id"]}'";
    $mysqli->query($change_money2);

    echo "true";
    // echo "<script>alert('賣出失敗');location.href='user.php'; </script>";
}