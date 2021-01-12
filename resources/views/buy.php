<?php session_start();

/*  引入  */
require_once "linkSql.php";

global $mysqli;
// foreach ($_POST as $var_name => $var_val) {
//     $$var_name = $mysqli->real_escape_string($var_val);
// }
//購買
// print_r($_POST["fuck"]) ;
// echo count($_POST["fuck"]);
if (count($_POST["fuck"]) == 0) {
    echo "false";
} else {
    for ($a = 0; $a <= count($_POST["fuck"]); $a += 4) {
        $sql = "INSERT INTO `stock` (`id`, `stockNumber`, `stockName`, `stockMuch`, `fuckUserID`) VALUES (NULL, '{$_POST["fuck"][$a]}', '{$_POST["fuck"][$a + 1]}', '{$_POST["fuck"][$a + 2]}', '{$_SESSION["id"]}')";


        if ($_SESSION['money'] - $_POST["fuck"][$a + 3] > 0) {
            $_SESSION['money'] -= $_POST["fuck"][$a + 3];
            $change_money = "UPDATE `user` SET `principal` = '{$_SESSION["money"]}' WHERE `user`.`id` = '{$_SESSION["id"]}'";
            $mysqli->query($change_money);
            $mysqli->query($sql);
            echo "true";
        } else {
            echo "false";
            // echo "<script>alert('毛長齊在來買股');location.href='user.php'; </script>";
        }
    }
}

