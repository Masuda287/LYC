<label for="menu-toggle" class="menu-background"></label>

<dev class="tabs has-background-info-light is-large">
  
                    <p></p>
                    <a href="U1.php" class="has-text-centered">Inhome</a>
                    <?php
                    $ss=0;
                    if($ss==0){
                    echo '<a href="U1-1.php" class="is-size-6 has-text-link">ログイン</a>'; 
                    }else{
                    echo '<a href="logout.php">ログアウト</a>'; 
                    }
                    ?>
</dev>
<hr>
<input type="checkbox" id="menu-toggle" class="menu-checkbox">
<label for="menu-toggle" class="menu-button"><span></span></label>
<header class="drawer-menu">
  <ul>
    <li><a href="U2.php">マイページ</a></li>
    <li><a href="U2-3-1.php">ライブラリ</a></li>
    <li><a href="#">Book</a></li>
    <li><a href="#">Movie</a></li>
    <li><a href="#">Music</a></li>
    <li><a href="U2-4-1.php">閲覧履歴</a></li>
  </ul>
</header>
