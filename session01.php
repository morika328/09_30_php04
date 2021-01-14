<?php
// session変数を定義して値を入れようsession_start(); // session変数を使用する場合も必須！
session_start();
$_SESSION['num'] = 100; // session変数の宣言
echo $_SESSION['num'];
?>