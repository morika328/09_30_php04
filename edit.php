<?php
// 送信データのチェック
session_start(); // セッションの開始
include('functions.php'); // 関数ファイル読み込み
check_session_id(); // idチェック関数の実行

// 関数ファイルの読み込み
// include("functions.php");

$article_id = $_GET["article_id"];
$pdo = connect_to_db();
// var_dump($article_id);
// exit();
// データ取得SQL作成
$sql = 'SELECT * FROM articledb_table WHERE article_id=:article_id';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':article_id', $article_id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  // 正常にSQLが実行された場合は指定の11レコードを取得
  // fetch()関数でSQLで取得したレコードを取得できる
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=" keijiban.css ">
  <title>今日のできごと掲示板</title>
</head>
<body>
  <form action="update.php" method="POST">
    <fieldset>
      <legend>今日のできごと掲示板</legend>
      <a href="read.php">投稿一覧</a>
      <div>
        <label for="name">投稿者</label>
        <input type="text" name="name" value="<?= $record["name"] ?>">
      </div>
      <div>
        <input type="text" name="article" value="<?= $record["article"] ?>">
      </div>
      <div>
        <button>投稿する</button>
      </div>
      <input type="hidden" name="article_id" value="<?= $record["article_id"] ?>">
    </fieldset>
  </form>

</body>

</html>