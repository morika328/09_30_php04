<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=" keijiban.css ">
  <title>新規アカウント作成</title>
</head>

<body>
  <form action="register_act.php" method="POST">
    <fieldset>
      <legend>新規アカウント作成</legend>
      <div>
        なまえ: <input type="text" name="name">
      </div>
      <div>
        ログインID (メールアドレス): <input type="text" name="mail">
      </div>
      <div>
        password: <input type="text" name="password">
      </div>
      <div>
        <button>登録</button>
      </div>
      <a href="login.php">すでにアカウントをお持ちの方はコチラ</a>
    </fieldset>
  </form>

</body>

</html>