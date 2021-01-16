<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>今日のできごと掲示板</title>
  <link rel="stylesheet" href=" keijiban.css ">
</head>


<?php
session_start(); // セッションの開始
include('functions.php'); // 関数ファイル読み込み
check_session_id(); // idチェック関数の実行
?>

<body>
  <form action="create.php" method="POST">
    <fieldset>
      <legend>今日のできごと掲示板</legend>
      <a href="read.php">投稿一覧</a>
      <a href="logout.php">logout</a>
      <div>
        <label for="name">投稿者</label>
        <input type="text" name="name">
      </div>
      <div>
        <label for="article">できごと</label>
        <input type="text" name="article">
      </div>
      <div>
        <button>投稿する</button>
      </div>
    </fieldset>
  </form>

</body>

</html>

