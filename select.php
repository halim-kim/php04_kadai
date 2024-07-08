<?php
// 0. SESSION開始！！
session_start();

require_once('funcs.php');
loginCheck();

//1. DB接続します
$pdo = db_conn();

//2. データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//3. データ表示
$view = "";
if ($status == false) {
    sql_error($stmt);
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // URLが 'http://' または 'https://' で始まっているか確認し、そうでない場合は 'http://' を追加
        $url = $result['url'];
        if (!preg_match('/^https?:\/\//', $url)) {
            $url = 'http://' . $url;
        }

        $view .= '<div class="bookmark-item">';
        $view .= '<h3>' . h($result['name']) . '</h3>';
        $view .= '<p>URL: <a href="' . h($url) . '" target="_blank">' . h($result['url']) . '</a></p>';
        $view .= '<p>コメント: ' . h($result['comment']) . '</p>';
        $view .= '<a href="detail.php?id=' . h($result['id']) . '">編集</a> ';
        // 修正箇所: 管理者権限がある場合のみ削除ボタンを表示
        if ($_SESSION['kanri'] == 1) {
            $view .= '<a href="delete.php?id=' . h($result['id']) . '">削除</a>';
        }
        $view .= '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ブックマーク一覧</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <?php include('menu.php'); ?>
        </nav>
    </header>

    <div class="container">
        <h1>ブックマーク一覧</h1>
        <div class="jumbotron">
            <?= $view ?>
        </div>
    </div>
</body>
</html>
