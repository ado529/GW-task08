<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sleeping together(ログイン画面)</title>
</head>

<body>
  <h1>sleeping together ログインして下さい</h1>
  <form action="login_create.php" method="POST">
    <fieldset>
      <legend>[ログイン画面]</legend>
      <div>
        ID: <input type="text" name="id" minlength="4" placeholder="4文字以上" required>
      </div>
      <div>
        PASSWORD: <input type="password" name="password" minlength="6" placeholder="6文字以上" required>
      </div>
      <div>
        <input type="submit" value="ログイン">
      </div>
    </fieldset>
  </form>

  <p><a href="">ID/PASSWORDを忘れた方はこちら</a></p>

  <p><a href="signup.php">新規登録</a></p>

</body>

</html>