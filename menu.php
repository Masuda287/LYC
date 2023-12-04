<dav class="menu">
<input type="checkbox" id="menu-toggle" class="menu-checkbox">
<label for="menu-toggle" class="menu-button"><span></span></label>
<header class="drawer-menu">
  <ul>
    <li><a href="U2.php">マイページ</a></li>
    <li><a href="U1-2-2.php?category1=本">Book</a></li>
    <li><a href="U1-2-2.php?category1=動画">Movie</a></li>
    <li><a href="U1-2-2.php?category1=音楽">Music</a></li>
    <li><a href="U2-3-term.php">閲覧履歴</a></li>
    <li><a href="U2-4-term.php">ライブラリ</a></li>
  </ul>
</header>
<label for="menu-toggle" class="menu-background"></label>
<dev class="tabs has-background-info-light is-large">
                    <p class="has-text-info-light">___________</p>
                    <a href="U1.php" class="has-text-centered">Inhome</a>
                    <?php
                    $ss=0;
                    if(!isset($_SESSION['customer'])){
                    echo '<a href="U1-1-1.php" class="is-size-6 has-text-link">ログイン</a>'; 
                    }else{
                    echo '<a href="logout.php" class="is-size-6 has-text-link">ログアウト</a>'; 
                    }
                    ?>
</dev>
</dav>