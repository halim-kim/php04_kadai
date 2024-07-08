<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css" />
    <title>ログイン</title>
</head>

<body>

    <header>
        <nav>
            <?php
            session_start();
            include('menu.php');
            ?>
        </nav>
    </header>

    <div class="container">
        <div class="jumbotron">
            <fieldset>
                <legend>ログイン</legend>
                <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
                <form name="form1" action="login_act.php" method="post">
                    <div class="form-group">
                        <label for="lid">ID:</label>
                        <input type="text" name="lid" id="lid" />
                    </div>
                    <div class="form-group">
                        <label for="lpw">PW:</label>
                        <input type="password" name="lpw" id="lpw" />
                    </div>
                    <input type="submit" value="LOGIN" />
                </form>
            </fieldset>
        </div>
    </div>

</body>

</html>