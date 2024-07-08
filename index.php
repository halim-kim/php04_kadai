<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブックマークアプリ</title>
    <link rel="stylesheet" href="style.css">
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
    <!-- method, action, 各inputのnameを確認してください。  -->
        <form method="post" action="insert.php">
            <div class="jumbotron">
                <fieldset>
                    <legend>ブックマークアプリ</legend>
                    <label>書籍名：<input type="text" name="name"></label><br>
                    <label>書籍URL：<input type="text" name="url"></label><br>
                    <label>書籍コメント：<textarea name="comment" rows="4" cols="40"></textarea></label><br>
                    <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>

    </div>
</body>

</html>