<?php
require_once("./init.php");
$_SESSION = [];

// クッキーの削除
if(ini_get("session.use_cookies")){
    setcookie(session_name(),"",time() - 42000);
}
// セッションの削除
session_destroy();
header("location:login.php");
exit();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- 初期設定 -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title ?></title>  <!-- 変更 -->
    <link rel="stylesheet" href="./style.css">

</head>

<body>