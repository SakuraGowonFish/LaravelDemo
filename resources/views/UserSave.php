<?php session_start(); 

/*  引入  */
require_once "linkSql.php";

//儲存會員
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $passwd = password_hash($_POST['user_passwd'], PASSWORD_DEFAULT);
    $sql = "SELECT * FROM user";
    $result = $mysqli->query($sql);

   
    // $fuckId = 
    // echo $user_id+"<br>";
    // echo $user_name+"<br>";
    // echo $user_money+"<br>";
    // $sql = "INSERT INTO `user` (`id`, `account`, `paswword`, `username`,`principal`) VALUES ('87', '{$user_id}' , '{$user_passwd}' , '{$user_name}' , '{$user_money}')";
    $sql = "INSERT INTO `user` ( `account`, `paswword`, `username`, `principal`) VALUES ( '{$user_id}', '{$passwd}', '{$user_name}', '{$user_money}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $user_sn             = $mysqli->insert_id;
    $_SESSION['id'] = $user_sn;
    $_POST['id']    = $user_sn;
    $_SESSION['money']    =$user_money;
    $_SESSION['user']    =$user_name;
    // echo $_SESSION['user'];
    header("Location: user.php");
 ?>