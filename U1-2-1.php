<?php session_start();?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
    <form action="U1-2-2.php" method="post">
        <input type="text" name="keyword">
        <input type="submit" src="parts/search.img" width="20" heigh="20" alt="検索">
        <a href="U1-3-1-show.php"><img src="parts/cart.jpg" width="100" heigh="100" alt="カート"></a>
    </form>
    <div id="app">
        <div @click="move_menu_book">本</div>
        <p v-if="book_menu"><span @click="move_menu_manga">漫画</span><span @click="move_menu_syosetu">小説</span></p>
        <p v-if="manga_menu"><a href="U1-2-2.php?category2=漫画少年">少年漫画</a><a href="U1-2-2.php?category2=漫画少女">少女漫画</a></p>
        <p v-if="syosetu_menu"><a href="U1-2-2.php?category2=小説恋愛">恋愛</a><a href="U1-2-2.php?category2=小説SF">SF</a><a href="U1-2-2.php?category2=小説ミステリー">ミステリー</a></p>
        <div @click="move_menu_movie">動画</div>
        <p v-if="movie_menu"><span @click="move_menu_eiga">映画</span><a href="U1-2-2.php?category2=ドラマ">ドラマ</a><a href="U1-2-2.php?category2=アニメ">アニメ</a>
        <p v-if="eiga_menu"><a href="U1-2-2.php?category2=映画恋愛">恋愛</a><a href="U1-2-2.php?category2=映画SF">SF</a><a href="U1-2-2.php?category2=映画ミステリー">ミステリー</a></p>
        <div @click="move_menu_music">音楽</div>
        <p v-if="music_menu"><a href="U1-2-2.php?category2=jpop">jpop</a><a href="U1-2-2.php?category2=rock">ロック</a><a href="U1-2-2.php?category2=ボカロ">ボカロ</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="script/U1-2-1.js"></script>
    <?php require 'footer.php'; ?>