<?php
session_start(); // セッションの開始
include('functions.php'); // 関数ファイル読み込み
$pdo = connect_to_db(); // DB接続
$mail = $_POST['mail']; // データ受け取り→変数に入れる
$password = $_POST['password'];

// DBにデータがあるかどうか検索
$sql = 'SELECT * FROM userdb_table
WHERE mail=:mail
AND password=:password
AND is_deleted=0';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$status = $stmt->execute();

// DBのデータ有無で条件分岐
$val = $stmt->fetch(PDO::FETCH_ASSOC); // 該当レコードだけ取得
if (!$val) { // 該当データがないときはログインページへのリンクを表示
echo "<p>ログイン情報に誤りがあります．</p>";
echo '<a href="login.php">ログイン画面へ</a>';
exit();

// DBにデータがあればセッション変数に格納
} else {
$_SESSION = array(); // セッション変数を空にする
$_SESSION["session_id"] = session_id();
$_SESSION["is_admin"] = $val["is_admin"];
$_SESSION["name"] = $val["name"];
header("Location:read.php"); // 一覧ページへ移動
exit();
}
// session変数には必要な値を保存する