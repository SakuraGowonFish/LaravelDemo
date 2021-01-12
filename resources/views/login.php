<?php session_start(); 

/*  引入  */
require_once "linkSql.php";

//會員登入
foreach ($_POST as $var_name => $var_val) {
    $$var_name = $mysqli->real_escape_string($var_val);
}
// echo $user_id;
global $mysqli;
if (empty($user_id)) {
    echo "<script>alert('毛沒長齊就請您申請');location.href='index.php'; </script>";

}
$sql    = "SELECT * FROM `user` WHERE `account`='{$user_id}'";
$result = $mysqli->query($sql) or die($mysqli->connect_error);
$user   = $result->fetch_assoc();
if (!empty($user)) {
    if (password_verify($_POST['user_passwd'], $user['paswword'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['user'] =$user['username'];
        $_SESSION['money'] =$user['principal'];
        // echo $_SESSION['user'];
        header("Location: user.php");
    } 
    else {
        echo "<script>alert('哭阿,密碼忘了你也找不回來');location.href='index.php'; </script>";
    }
}
    
    // $fuckId = 
    // echo $user_id+"<br>";
    // echo $user_name+"<br>";
    // echo $user_money+"<br>";
    // $sql = "INSERT INTO `user` (`id`, `account`, `paswword`, `username`,`principal`) VALUES ('87', '{$user_id}' , '{$user_passwd}' , '{$user_name}' , '{$user_money}')";
