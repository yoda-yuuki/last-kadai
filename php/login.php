<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style3.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
      integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <title>ログイン画面</title>
  </head>

  <body>
    <div id="container">
      <h1>Bistro Yoda ログイン画面</h1>
      <form action="login_act.php" method="POST">
        <div>
          <h2><i class="fas fa-portrait"></i>id</h2>
          <input name="lid" type="text" required />
        </div>
        <div>
          <h2><i class="fas fa-unlock-alt"></i>password</h2>
          <input name="lpw" type="text" required />
        </div>
        <button id="login">ログイン</button>
      </form>
    </div>
  </body>
</html>
