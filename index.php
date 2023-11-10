<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>経歴データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">経歴データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>経歴データ登録</legend>
                <label>番　号: <input type="text" name="num"></label><br>
                <label>緯　度: <input type="text" name="lat"></label><br>
                <label>経　度: <input type="text" name="lon"></label><br>
                <label>高　度: <input type="text" name="alt"></label><br>
                <label>工事名: <input type="text" name="k_name"></label><br>
                <label>竣工年: <input type="text" name="s_year"></label><br>
                <label>役職名: <input type="text" name="y_name"></label><br>
                <label>その他: <input type="text" name="etc"></label><br>
                <input type="submit" value="登録">
            </fieldset>
        </div>
    </form>
</body>

</html>
