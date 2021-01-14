<?php
// sessionに保存されている変数を取り出し，計算しsession_start(); // 必須！
session_start();
$_SESSION['num'] += 1; // session変数を+1する
echo $_SESSION['num']; // 結果を出力
?>