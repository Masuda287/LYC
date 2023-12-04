<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<div class="has-text-centered">
<div level>
<?php
        $name1=$_GET['u_name'];
        $login1=$_GET['login'];
        $birth1=$_GET['b_day'];
        $mail1=$_GET['mail'];
        $password1=$_GET['password'];
        $URL="U1-1-4.php?u_name={$name1}&login={$login1}&b_day={$birth1}&mail={$mail1}&password={$password1}"; 
        echo  '<form action="',$URL,'" method="post">';
        echo  '<h1 class="is-size-3">入力情報確認</h1><br>';
        echo  '<table class="level-item">';
        echo  '<div class="U1-1-3 has-text-centered">';
        echo  '<p class="pb-2">姓名：',$_GET['u_name'],'</p>';
        echo  '<p class="pb-2">ユーザー名：',$_GET['login'],'</p>';
        echo  '<p class="pb-2">生年月日：',$_GET['b_day'],'</p>';
        echo  '<p class="pb-2">メールアドレス：',$_GET['mail'],'</p>';
        echo  '<p class="pb-2">パスワード：',preg_replace('/^A-Za-z0-9/','*',$_GET['password']),'</p>';   
        echo  '</div>';
        echo  '</table><br>';
        echo '<a href="',$URL,'" class="button is-info ">新規登録</a>';
        echo  '</form>';
    ?>
</div>
</div>
<?php require 'footer.php'; ?>
<?php
// $_GET['password'] echo preg_replace('/^A-Za-z0-9{1}/', '*', $GET['password']);
?>