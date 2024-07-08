<div class="nav-menu">
    <div class="left-menu">
        <a href="index.php">データ登録</a>
        <a href="select.php">データ一覧</a>
    </div>
    <div class="right-menu">
        <?php if (isset($_SESSION['chk_ssid']) && $_SESSION['chk_ssid'] === session_id()): ?>
            <a href="logout.php">ログアウト</a>
            <span class="login-status">ログイン中</span>
        <?php else: ?>
            <a href="login.php">ログイン</a>
        <?php endif; ?>
    </div>
</div>