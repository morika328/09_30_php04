<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=" keijiban.css ">
  <title>今日のできごと掲示板</title>
</head>

<body>


  <form action="login_act.php" method="POST" >
    <fieldset>
      <legend>ログイン画面</legend>
      <div>
        ログインID: <input type="text" name="mail">
      </div>
      <div>
        password: <input type="text" name="password">
      </div>
      <div>
        <button>ログイン</button>
      </div>
      <a href="register.php">アカウント新規作成</a>
    </fieldset>
  </form>

</body>

</html>